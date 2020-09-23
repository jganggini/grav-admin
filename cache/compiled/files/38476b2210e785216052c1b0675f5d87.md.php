<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/06.multi-section-page/sections.md',
    'modified' => 1600832181,
    'data' => [
        'header' => [
            'title' => 'Multi-Section Page',
            'published' => false,
            'hide_git_sync_repo_link' => false,
            'hide_page_title' => true,
            'child_type' => 'section',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'taxonomy' => [
                    'filter' => [
                        0 => 'view1',
                        1 => 'view2'
                    ]
                ]
            ],
            'hide_next_prev_page_buttons' => false
        ],
        'frontmatter' => 'title: \'Multi-Section Page\'
published: false
hide_git_sync_repo_link: false
hide_page_title: true
child_type: section
content:
    items: \'@self.children\'
    order:
        by: folder
        dir: asc
    taxonomy:
        filter:
            - view1
            - view2
hide_next_prev_page_buttons: false',
        'markdown' => '[div class="sections-page-title"]
### Sections
[/div]

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie iaculis nisl sed interdum. Praesent mi nisl, efficitur in felis vel, molestie sollicitudin eros. Mauris urna quam, euismod nec lacinia non, dignissim eu odio. Donec nisl nibh, facilisis at nisl vitae, porttitor hendrerit libero. Integer vel neque in ante condimentum malesuada. Mauris dictum nunc enim, non tincidunt arcu tincidunt vel. Aliquam gravida, massa id semper tincidunt, tellus sapien accumsan tortor, in placerat arcu justo ac urna. Vestibulum blandit ultrices neque, eget congue tortor vehicula id.
'
    ]
];
