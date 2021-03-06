<?php

/**
 * @package    Grav\Common\Assets
 *
 * @copyright  Copyright (C) 2015 - 2020 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Assets;

use Grav\Common\Utils;

class InlineCss extends BaseAsset
{
    /**
     * InlineCss constructor.
     * @param array $elements
     * @param string|null $key
     */
    public function __construct(array $elements = [], $key = null)
    {
        $base_options = [
            'asset_type' => 'css',
            'position' => 'after'
        ];

        $merged_attributes = Utils::arrayMergeRecursiveUnique($base_options, $elements);

        parent::__construct($merged_attributes, $key);
    }

    /**
     * @return string
     */
    public function render()
    {
        return '<style' . $this->renderAttributes(). ">\n" . trim($this->asset) . "\n</style>\n";
    }
}
