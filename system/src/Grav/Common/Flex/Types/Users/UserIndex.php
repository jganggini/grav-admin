<?php

declare(strict_types=1);

/**
 * @package    Grav\Common\Flex
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Flex\Types\Users;

use Grav\Common\Debugger;
use Grav\Common\File\CompiledYamlFile;
use Grav\Common\Flex\Traits\FlexGravTrait;
use Grav\Common\Flex\Traits\FlexIndexTrait;
use Grav\Common\Grav;
use Grav\Common\User\Interfaces\UserInterface;
use Grav\Framework\Flex\FlexIndex;
use Grav\Framework\Flex\Interfaces\FlexStorageInterface;
use Monolog\Logger;

class UserIndex extends FlexIndex
{
    public const VERSION = parent::VERSION . '.1';

    use FlexGravTrait;
    use FlexIndexTrait;

    /**
     * @param FlexStorageInterface $storage
     * @return array
     */
    public static function loadEntriesFromStorage(FlexStorageInterface $storage): array
    {
        // Load saved index.
        $index = static::loadIndex($storage);

        $version = $index['version'] ?? 0;
        $force = static::VERSION !== $version;

        // TODO: Following check flex index to be out of sync after some saves, disabled until better solution is found.
        //$timestamp = $index['timestamp'] ?? 0;
        //if (!$force && $timestamp && $timestamp > time() - 1) {
        //    return $index['index'];
        //}

        // Load up to date index.
        $entries = parent::loadEntriesFromStorage($storage);

        return static::updateIndexFile($storage, $index['index'], $entries, ['force_update' => $force]);
    }

    /**
     * @param array $meta
     * @param array $data
     * @param FlexStorageInterface $storage
     */
    public static function updateObjectMeta(array &$meta, array $data, FlexStorageInterface $storage)
    {
        // Username can also be number and stored as such.
        $key = (string)($data['username'] ?? $meta['key'] ?? $meta['storage_key']);
        $meta['key'] = static::filterUsername($key, $storage);
        $meta['email'] = isset($data['email']) ? mb_strtolower($data['email']) : null;
    }

    /**
     * Load user account.
     *
     * Always creates user object. To check if user exists, use $this->exists().
     *
     * @param string $username
     * @return UserObject
     */
    public function load($username): UserInterface
    {
        if ($username !== '') {
            $key = static::filterUsername($username, $this->getFlexDirectory()->getStorage());
            $user = $this->get($key);
            if ($user) {
                return $user;
            }
        } else {
            $key = '';
        }

        $directory = $this->getFlexDirectory();

        /** @var UserObject $object */
        $object = $directory->createObject(
            [
                'username' => $username,
                'state' => 'enabled'
            ],
            $key
        );

        return $object;
    }

    /**
     * Find a user by username, email, etc
     *
     * @param string $query the query to search for
     * @param array $fields the fields to search
     * @return UserObject
     */
    public function find($query, $fields = ['username', 'email']): UserInterface
    {
        if (is_string($query) && $query !== '') {
            foreach ((array)$fields as $field) {
                if ($field === 'key') {
                    $user = $this->get($query);
                } elseif ($field === 'storage_key') {
                    $user = $this->withKeyField('storage_key')->get($query);
                } elseif ($field === 'flex_key') {
                    $user = $this->withKeyField('flex_key')->get($query);
                } elseif ($field === 'email') {
                    $user = $this->withKeyField('email')->get($query);
                } elseif ($field === 'username') {
                    $user = $this->get(static::filterUsername($query, $this->getFlexDirectory()->getStorage()));
                } else {
                    $user = $this->__call('find', [$query, $field]);
                }
                if ($user) {
                    return $user;
                }
            }
        }

        return $this->load('');
    }

    /**
     * @param string $key
     * @param FlexStorageInterface $storage
     * @return string
     */
    protected static function filterUsername(string $key, FlexStorageInterface $storage): string
    {
        if ($storage && \method_exists($storage, 'normalizeKey')) {
            return $storage->normalizeKey($key);
        }

        return mb_strtolower($key);
    }

    /**
     * @param FlexStorageInterface $storage
     * @return CompiledYamlFile|null
     */
    protected static function getIndexFile(FlexStorageInterface $storage)
    {
        // Load saved index file.
        $grav = Grav::instance();
        $locator = $grav['locator'];
        $filename = $locator->findResource('user-data://flex/indexes/accounts.yaml', true, true);

        return CompiledYamlFile::instance($filename);
    }

    /**
     * @param array $entries
     * @param array $added
     * @param array $updated
     * @param array $removed
     */
    protected static function onChanges(array $entries, array $added, array $updated, array $removed)
    {
        $message = sprintf('Flex: User index updated, %d objects (%d added, %d updated, %d removed).', \count($entries), \count($added), \count($updated), \count($removed));

        $grav = Grav::instance();

        /** @var Logger $logger */
        $logger = $grav['log'];
        $logger->addDebug($message);

        /** @var Debugger $debugger */
        $debugger = $grav['debugger'];
        $debugger->addMessage($message, 'debug');
    }
}
