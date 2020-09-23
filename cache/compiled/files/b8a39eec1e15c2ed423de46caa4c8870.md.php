<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/fastdata/blog.md',
    'modified' => 1600830420,
    'data' => [
        'header' => [
            'title' => 'FASTDATA',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'permissions' => [
                'inherit' => true
            ],
            'visibility_requires_access' => true,
            'access' => [
                'site.login' => true
            ],
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'blog_url' => '/fastdata',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'published' => false,
            'media_order' => 'ad_banner.jpg'
        ],
        'frontmatter' => 'title: FASTDATA
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
permissions:
    inherit: true
visibility_requires_access: true
access:
    site.login: true
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
blog_url: /fastdata
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
published: false
media_order: ad_banner.jpg',
        'markdown' => '# **FASTDATA** Space
## Arquitectura Digital'
    ]
];
