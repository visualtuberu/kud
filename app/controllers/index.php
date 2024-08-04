<?php


    $title = 'My Blog :: Home';
    $posts = [
        1 => [
            'title' => 'Title 1',
            'desc' => 'Some description 1',
            'slug' => 'title-1',
        ],
        2 => [
            'title' => 'Title 2',
            'desc' => 'Some description 2',
            'slug' => 'title-2',
        ],
        3 => [
            'title' => 'Title 3',
            'desc' => 'Some description 3',
            'slug' => 'title-3',
        ],
        4 => [
            'title' => 'Title 4',
            'desc' => 'Some description 4',
            'slug' => 'title-4',
        ],
        5 => [
            'title' => 'Title 5',
            'desc' => 'Some description 5',
            'slug' => 'title-5',
        ],

    ];
    $recent_posts = [
        1 => [
            'title' => 'Title 1',
            'slug' => lcfirst(str_replace(' ', '-', strtolower('Title 1'))),
        ],
        2 => [
            'title' => 'Title 2',
            'slug' => lcfirst(str_replace(' ', '-', strtolower('Title 2'))),
        ],
        3 => [
            'title' => 'Title 3',
            'slug' => lcfirst(str_replace(' ', '-', strtolower('Title 3'))),
        ],
        4 => [
            'title' => 'Title 4',
            'slug' => lcfirst(str_replace(' ', '-', strtolower('Title 4'))),
        ],
        15=> [
            'title' => 'Title 5',
            'slug' => lcfirst(str_replace(' ', '-', strtolower('Title 5'))),
        ]

    ];

    require VIEWS . '/index.tpl.php';


