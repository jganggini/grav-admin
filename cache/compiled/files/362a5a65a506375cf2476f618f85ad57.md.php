<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/frontend/blog.md',
    'modified' => 1600830484,
    'data' => [
        'header' => [
            'title' => 'FRONTEND',
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
            'permissions' => [
                'inherit' => true
            ],
            'body_classes' => 'header-dark header-transparent',
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
            'visibility_requires_access' => true,
            'access' => [
                'site.login' => true
            ],
            'hide_git_sync_repo_link' => false,
            'sitemap' => [
                'changefreq' => 'monthly'
            ],
            'blog_url' => '/fronend',
            'modular_content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'order' => [
                    'by' => 'folder',
                    'dir' => 'dsc'
                ],
                'limit' => 6,
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'published' => false,
            'media_order' => 'ad_banner.jpg'
        ],
        'frontmatter' => 'title: FRONTEND
content:
    items:
        - \'@self.children\'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
permissions:
    inherit: true
body_classes: \'header-dark header-transparent\'
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
visibility_requires_access: true
access:
    site.login: true
hide_git_sync_repo_link: false
sitemap:
    changefreq: monthly
blog_url: /fronend
modular_content:
    items:
        - \'@self.children\'
    order:
        by: folder
        dir: dsc
    limit: 6
    pagination: true
    url_taxonomy_filters: true
published: false
media_order: ad_banner.jpg',
        'markdown' => '# **FRONTEND** Space
## Arquitectura Digital
'
    ]
];
