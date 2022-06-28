<?php
$a_menu = [
    "main" => ["page" => "Главная", 'file' => "page1.html", 
        "vertical_menu" => []
    ], 
    "first" => ["page" => "Первый", 'file' => "page2.html", 
        "vertical_menu" => [
            "news" => ["page" => "Новости", "file" => "page2_11.html"], 
            "story" => ["page" => "Истории", "file" => "page2_2.html"], 
            "action" => ["page" => "Действия", "file" => "page2_3.html"], 
            "animals" => ["page" => "Животные", "file" => "page2_4.html"]
        ]
    ], 
    "second" => ["page" => "Второй", 'file' => "page3.html", 
        "vertical_menu" => [
            "news" => ["page" => "Кот", "file" => "page3_1.html"], 
            "dog" => ["page" => "Собака", "" => "page3_2.html"], 
            "mouse" => ["page" => "Мышь", "file" => ""], 
            "eagle" => ["page" => "Орёл", ]
        ]
    ], 
    "register" => ["page" => "Регистрация", 'file' => "page4.php", 
        "vertical_menu" => []
    ]
];
