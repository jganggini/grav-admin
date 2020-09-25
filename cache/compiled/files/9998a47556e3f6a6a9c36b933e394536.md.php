<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/integracion/blog.md',
    'modified' => 1600969947,
    'data' => [
        'header' => [
            'title' => 'INTEGRACIÓN',
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
            'blog_url' => '/integracion ',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'visibility_requires_access' => true,
            'access' => [
                'site.login' => true
            ],
            'published' => false,
            'media_order' => 'ad_banner.jpg',
            'body_classes' => 'header-dark header-transparent'
        ],
        'frontmatter' => 'title: INTEGRACIÓN
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
blog_url: \'/integracion \'
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
visibility_requires_access: true
access:
    site.login: true
published: false
media_order: ad_banner.jpg
body_classes: \'header-dark header-transparent\'',
        'markdown' => '# **INTEGRACIÓN** Space
## Arquitectura Digital'
    ]
];
