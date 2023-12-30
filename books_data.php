<?php 
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Cien años de soledad',
            'author' => 'Gabriel García Márquez.',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'El señor de los anillos (Trilogía)',
            'author' => 'J',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => '1984',
            'author' => 'George Orwell',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'Un mundo feliz',
            'author' => 'Aldous Huxley',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'Orgullo y prejuicio',
            'author' => 'Jane Austen',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'Crimen y castigo',
            'author' => 'Fiódor Dostoyevski',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'Lolita',
            'author' => 'Vladimir Nabokov',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'Ulises',
            'author' => 'James Joyce',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'Madame Bovary',
            'author' => 'Gustave Flaubert',
            'purchaseurl' => 'http://example.com'
        ],
        [
            'name' => 'En busca del tiempo perdido',
            'author' => 'Marcel Proust',
            'purchaseurl' => 'http://example.com',
        ]
    ];

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($books);

 ?>