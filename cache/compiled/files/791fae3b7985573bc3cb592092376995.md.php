<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/plataforma/blog.md',
    'modified' => 1600830480,
    'data' => [
        'header' => [
            'title' => 'PLATAFORMA',
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
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'blog_url' => '/plataforma',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'visibility_requires_access' => true,
            'access' => [
                'site.login' => true
            ],
            'published' => false,
            'media_order' => 'ad_banner.jpg'
        ],
        'frontmatter' => 'title: PLATAFORMA
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
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
blog_url: /plataforma
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
visibility_requires_access: true
access:
    site.login: true
published: false
media_order: ad_banner.jpg',
        'markdown' => '# **PLATAFORMA** Space
## Arquitectura Digital'
    ]
];
