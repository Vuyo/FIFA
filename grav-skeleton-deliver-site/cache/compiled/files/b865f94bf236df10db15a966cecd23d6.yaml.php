<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-skeleton-deliver-site/user/config/site.yaml',
    'modified' => 1502860124,
    'data' => [
        'title' => 'Deliver',
        'author' => [
            'name' => 'John Appleseed',
            'email' => 'john@email.com',
            'copyright' => 'Copyright 2013 Deliver. All Rights Reserved.'
        ],
        'social' => [
            0 => [
                'url' => 'https://twitter.com/getgrav',
                'icon' => 'twitter'
            ],
            1 => [
                'url' => '#',
                'icon' => 'facebook'
            ],
            2 => [
                'url' => 'blog.rss',
                'icon' => 'rss'
            ]
        ],
        'contact' => [
            'address' => [
                0 => [
                    'line' => '222 Ave C South'
                ],
                1 => [
                    'line' => 'Saskatoon, Saskatchewan'
                ],
                2 => [
                    'line' => 'Canada S7K 2N5'
                ]
            ],
            'gps' => '1.306.222.3456'
        ],
        'othermenu' => [
            0 => [
                'text' => 'About',
                'url' => 'about'
            ],
            1 => [
                'text' => 'Privacy Policy',
                'url' => '#'
            ],
            2 => [
                'text' => 'Contact',
                'url' => 'contact'
            ]
        ],
        'quicklinks' => [
            0 => [
                'text' => 'Portfolio',
                'url' => 'base_url:portfolio'
            ],
            1 => [
                'text' => 'About',
                'url' => 'base_url:about'
            ],
            2 => [
                'text' => 'Services',
                'url' => 'base_url:services'
            ],
            3 => [
                'text' => 'Archive',
                'url' => 'base_url:archive'
            ],
            4 => [
                'text' => 'Blog',
                'url' => 'base_url:blog'
            ],
            5 => [
                'text' => 'Contact Us',
                'url' => 'base_url:contact'
            ]
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'metadata' => [
            'description' => 'My Deliver Site'
        ],
        'summary' => [
            'size' => 300
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'header_options' => [
            'arrows' => 'true',
            'autoslide' => 'false',
            'autoslideHoverStop' => 'false',
            'interval' => '2000',
            'loop' => 'false',
            'transition' => 'zoom',
            'itemsForSlide' => '0',
            'touch' => 'true',
            'swipe' => 'true'
        ],
        'footer' => [
            'description' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.',
            'contact_title' => 'Contact Info',
            'links_title' => 'Quick Links',
            'newsletter_title' => 'Newsletter',
            'newsletter_description' => 'Etiam porta sem malesuada magna mollis euismod.',
            'copyright_text' => 'Copyright 2013 Deliver. All Rights Reserved.',
            'feedburner' => ''
        ]
    ]
];
