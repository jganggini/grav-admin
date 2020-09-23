<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/03.arquitectura-digital/control/blog.md',
    'modified' => 1600832890,
    'data' => [
        'header' => [
            'title' => 'CONTROL',
            'hero_classes' => 'text-light title-h1h2 overlay-dark-gradient hero-large parallax',
            'blog_url' => '/devops',
            'show_sidebar' => true,
            'show_breadcrumbs' => true,
            'show_pagination' => true,
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
            'visibility_requires_access' => true,
            'access' => [
                'site.login' => true
            ],
            'permissions' => [
                'inherit' => true
            ],
            'hero_image' => 'ad_banner.jpg',
            'media_order' => 'ad_control.jpg,ad_banner.jpg'
        ],
        'frontmatter' => 'title: CONTROL
hero_classes: \'text-light title-h1h2 overlay-dark-gradient hero-large parallax\'
blog_url: /devops
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
visibility_requires_access: true
access:
    site.login: true
permissions:
    inherit: true
hero_image: ad_banner.jpg
media_order: \'ad_control.jpg,ad_banner.jpg\'',
        'markdown' => 'The [Quark theme](/arquitectura-digital/devops) has the ability to allow pages to override some of the default options by letting the user set <kbd>Ctrl + S</kbd> for any page.  The theme will merge the combination of the defaults with any `<kbd>Ctrl + S</kbd> set. This allows you to easily add hero classes to give your blog post some **bling**.

===
# **CONTROL** Space
## Arquitectura Digital'
    ]
];
