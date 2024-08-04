<?php

$title = 'My Blog :: About';
$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam asperiores commodi error
                        fugit in obcaecati odio sunt. Accusantium autem blanditiis earum expedita explicabo itaque,
                        perspiciatis quis? Maxime, nesciunt veniam!</p>
                    <p>A alias aspernatur assumenda debitis deleniti dolor, dolorem dolorum eligendi eveniet illum
                        laudantium molestiae mollitia nobis, odio perferendis, perspiciatis porro quaerat quasi
                        repudiandae suscipit tempora tenetur veniam voluptate voluptates voluptatum.</p>
                    <p>Beatae cupiditate earum eius, esse eveniet exercitationem impedit quasi sit! Atque dolores eum
                        impedit ipsam ipsum laudantium magni modi nam nihil nostrum pariatur placeat provident quos sit
                        soluta sunt, tempore?</p>';
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

    require_once VIEWS . '/about.tpl.php';


