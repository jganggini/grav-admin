<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/blog.md',
    'modified' => 1600830385,
    'data' => [
        'header' => [
            'title' => 'Arquitectura Digital',
            'published' => true,
            'hide_page_title' => true,
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'limit' => 0,
                'taxonomy' => [
                    'filter' => [
                        0 => 'view1',
                        1 => 'view2'
                    ]
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'media_order' => 'ad_banner.jpg',
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'visibility_requires_access' => true,
            'access' => [
                'site.login' => true
            ],
            'permissions' => [
                'inherit' => true,
                'authors' => [
                    0 => 'jganggini'
                ]
            ]
        ],
        'frontmatter' => 'title: \'Arquitectura Digital\'
published: true
hide_page_title: true
content:
    items:
        - \'@self.children\'
    order:
        by: folder
        dir: asc
    limit: 0
    taxonomy:
        filter:
            - view1
            - view2
    pagination: true
    url_taxonomy_filters: true
media_order: ad_banner.jpg
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
visibility_requires_access: true
access:
    site.login: true
permissions:
    inherit: true
    authors:
        - jganggini',
        'markdown' => '# **Arquitectura Digital** Space
## Dirección de Tecnología'
    ]
];
