<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/04.custom-content-list-page/customcontentlist.md',
    'modified' => 1600793394,
    'data' => [
        'header' => [
            'title' => 'Custom Content List Page',
            'published' => false,
            'child_type' => 'embedlycard',
            'visible' => true,
            'content' => [
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'items' => '@self.children',
                'limit' => 0
            ],
            'hide_git_sync_repo_link' => true,
            'display_child_page_titles' => true
        ],
        'frontmatter' => 'title: \'Custom Content List Page\'
published: false
child_type: embedlycard
visible: true
content:
    order:
        by: default
        dir: asc
    items: \'@self.children\'
    limit: 0
hide_git_sync_repo_link: true
display_child_page_titles: true',
        'markdown' => ''
    ]
];
