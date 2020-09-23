<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/pages/05.modular-page-inject/default.md',
    'modified' => 1600832181,
    'data' => [
        'header' => [
            'title' => 'Modular',
            'published' => false,
            'login' => [
                'visibility_requires_access' => '1'
            ],
            'access' => [
                'site' => [
                    'client' => '1',
                    'administrators' => '1',
                    'registered' => '0',
                    'provider' => '0'
                ]
            ],
            'hide_git_sync_repo_link' => false,
            'body_classes' => 'modular',
            'onpage_menu' => false,
            'page-inject' => [
                'processed_content' => false
            ]
        ],
        'frontmatter' => 'title: Modular
published: false
login:
    visibility_requires_access: \'1\'
access:
    site:
        client: \'1\'
        administrators: \'1\'
        registered: \'0\'
        provider: \'0\'
hide_git_sync_repo_link: false
body_classes: modular
onpage_menu: false
page-inject:
    processed_content: false',
        'markdown' => 'This is example **modular** page, where where content from module pages of **another page** is displayed using the [Page Inject Plugin](https://github.com/getgrav/grav-plugin-page-inject).   Each of the below definitions are contained in a separate page, and these pages can be included in multiple areas of the site.

[Text](http://wikieducator.org/OER_Handbook/educator_version_one/Conclusion/Glossary) by [http://wikieducator.org/](http://wikieducator.org/), available under a Creative Commons Attribution 4.0 license.  

[plugin:content-inject](/modular-page-inject/_cc-by)  
[plugin:content-inject](/modular-page-inject/_cc-by-sa)  
[plugin:content-inject](/modular-page-inject/_cc-by-nc)  
[plugin:content-inject](/modular-page-inject/_cc-by-nc-nd)  
[plugin:content-inject](/modular-page-inject/_cc-by-nc-sa)  
[plugin:content-inject](/modular-page-inject/_cc-by-nd)  
'
    ]
];
