<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/01.home/blog.md',
    'modified' => 1600833221,
    'data' => [
        'header' => [
            'title' => 'Home',
            'hide_git_sync_repo_link' => false,
            'sitemap' => [
                'changefreq' => 'monthly'
            ],
            'body_classes' => 'header-dark header-transparent',
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'blog_url' => '/blog',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'modular_content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'dsc'
                ]
            ],
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 6,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'bricklayer_layout' => true,
            'display_post_summary' => [
                'enabled' => false
            ],
            'feed' => [
                'limit' => 10,
                'description' => 'Sample Blog Description'
            ],
            'pagination' => true,
            'child_type' => 'item',
            'media_order' => 'banner.jpg'
        ],
        'frontmatter' => 'title: Home
hide_git_sync_repo_link: false
sitemap:
    changefreq: monthly
body_classes: \'header-dark header-transparent\'
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
modular_content:
    items: \'@self.modular\'
    order:
        by: folder
        dir: dsc
content:
    items:
        - \'@self.children\'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
bricklayer_layout: true
display_post_summary:
    enabled: false
feed:
    limit: 10
    description: \'Sample Blog Description\'
pagination: true
child_type: item
media_order: banner.jpg',
        'markdown' => '# CoE **Arquitectura** Space
## Dirección de Transformación TI'
    ]
];
