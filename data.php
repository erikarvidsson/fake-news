<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.

// Author array

$authors = [
['name' => 'Erik Arvidsson', 'id' => 1, 'img' => 'img/prof1.jpg', 'quote' => 'It was all a dream But it was so nice I had a nice house And such a loving wife'],
['name' => 'Arvid Eriksson', 'id' => 2, 'img' => 'img/prof2.jpg', 'quote' => 'We had a little dog Such a little dog That it reminded me of a large dog Just in miniature size'],
['name' => 'Vida Arvidsson', 'id' => 3, 'img' => 'img/prof3.jpg', 'quote' => 'Without upset family members It was so clear I still remember I’d rise up from the fiery embers Risen from the fiery embers'],
['name' => 'Erik Eriksson', 'id' => 4, 'img' => 'img/prof4.jpg', 'quote' => 'I want to thank you For all the love and support I never made it Not, my father never made me do sports'],
['name' => 'Elin Eriksson', 'id' => 5, 'img' => 'img/prof5.jpg', 'quote' => 'Thank God I didn’t go to school Thank God I didn’t end up Just like you
'],
];



// Arrticle array

$articles =[
    ['title' => 'Första artikeln', 'content' => file_get_contents(__DIR__.'/content/article1.txt'),
    'date' => '2018-10-15', 'author' => 'Erik Arvidsson', 'id' => '1', 'img' => 'img/1.jpg', 'like' => 900],
    ['title' => 'Andra artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-15', 'author' => 'Arvid Eriksson', 'id' => '2', 'img' => 'img/2.jpg', 'like' => 900],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-15', 'author' => 'Arvid Arvidsson', 'id' => '3', 'img' => 'img/3.jpg', 'like' => 900],
    ['title' => 'Fjäred artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-13', 'author' => 'Erik Arvidsson', 'id' => '4', 'img' => 'img/4.jpg', 'like' => 900],
    ['title' => 'Femte artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-15', 'author' => 'Arvid Eriksson', 'id' => '5', 'img' => 'img/5.jpg', 'like' => 900],
    ['title' => 'Sjunde artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-08-15', 'author' => 'Erik Arvidsson', 'id' => '6', 'img' => 'img/6.jpg', 'like' => 900],
    ['title' => 'Åttonde artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-12', 'author' => 'Erik Eriksson', 'id' => '7', 'img' => 'img/7.jpg', 'like' => 900],
    ['title' => 'Nionde artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-15', 'author' => 'Erik Arvidsson', 'id' => '8', 'img' => 'img/8.jpg', 'like' => 900],
    ['title' => 'Nionde artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-11-15', 'author' => 'Elin Eriksson', 'id' => '9', 'img' => 'img/9.jpg', 'like' => 900],
    ['title' => 'Nionde artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-05-15', 'author' => 'Vida Arvidsson', 'id' => '10', 'img' => 'img/8.jpg', 'like' => 900],
    ['title' => 'Nionde artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-13', 'author' => 'Elin Arvidsson', 'id' => '11', 'img' => 'img/8.jpg', 'like' => 900],
];
