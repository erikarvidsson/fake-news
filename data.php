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
    ['title' => '‘Global deal’ urgently needed to save nature, says WWF as it reveals wildlife has declined 60% in 40 years', 'content' => file_get_contents(__DIR__.'/content/article1.txt'),
    'date' => '2018-10-15', 'author' => 'Erik Arvidsson', 'id' => '1', 'img' => 'img/1.jpg', 'like' => 900],
    ['title' => 'Exclusive: This $99 Drone Is The Most Incredible Invention of 2018', 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
    'date' => '2018-10-15', 'author' => 'Arvid Eriksson', 'id' => '2', 'img' => 'img/2.jpg', 'like' => 900],
    ['title' => 'Mike Leigh interview: \'Intelligent, working people voted for Brexit', 'content' => file_get_contents(__DIR__.'/content/article3.txt'),
    'date' => '2018-10-15', 'author' => 'Arvid Eriksson', 'id' => '3', 'img' => 'img/3.jpg', 'like' => 900],
    ['title' => 'Once in a lifetime\' video captures moment meteor explodes in night sky above Clun Castle', 'content' => file_get_contents(__DIR__.'/content/article4.txt'),
    'date' => '2018-10-13', 'author' => 'Erik Arvidsson', 'id' => '4', 'img' => 'img/4.jpg', 'like' => 900],
    ['title' => 'Rare Chinese mountain cats captured on video for first time', 'content' => file_get_contents(__DIR__.'/content/article6.txt'),
    'date' => '2018-10-15', 'author' => 'Erik Eriksson', 'id' => '5', 'img' => 'img/13.jpg', 'like' => 900],
    ['title' => 'David Schwimmer comically proves he was in New York at time of alcohol theft after police search for doppelganger', 'content' => file_get_contents(__DIR__.'/content/article5.txt'),
    'date' => '2018-08-15', 'author' => 'Vida Arvidsson', 'id' => '6', 'img' => 'img/6.jpg', 'like' => 900],
    ['title' => 'ENGLISH AND WELSH COUPLES COULD SOON BE ALLOWED TO GET MARRIED OUTSIDE', 'content' => file_get_contents(__DIR__.'/content/article7.txt'),
    'date' => '2018-10-12', 'author' => 'Erik Eriksson', 'id' => '7', 'img' => 'img/7.jpg', 'like' => 900],
    ['title' => 'BITCOIN PRICE: CRYPTOCURRENCY\'S 10TH BIRTHDAY COULD SEE FIRST YEAR-ON-YEAR LOSS OF 2018', 'content' => file_get_contents(__DIR__.'/content/article8.txt'),
    'date' => '2018-10-15', 'author' => 'Vida Arvidsson', 'id' => '8', 'img' => 'img/8.jpg', 'like' => 900],
    ['title' => 'VEGAN COUPLE LIVED FOR A MONTH ON FOOD WASTE', 'content' => file_get_contents(__DIR__.'/content/article9.txt'),
    'date' => '2018-11-15', 'author' => 'Elin Eriksson', 'id' => '9', 'img' => 'img/9.jpg', 'like' => 900],
    ['title' => 'Protect Yourself From Sweden\'s Most Deadly Animal, Without Using Harmful Chemicals...', 'content' => file_get_contents(__DIR__.'/content/article10.txt'),
    'date' => '2018-05-15', 'author' => 'Elin Eriksson', 'id' => '10', 'img' => 'img/10.jpg', 'like' => 900],
    ['title' => 'What will the end of the world look like? Will it be nuclear weapons or fast food that kills us?', 'content' => file_get_contents(__DIR__.'/content/article11.txt'),
    'date' => '2018-10-13', 'author' => 'Vida Arvidsson', 'id' => '11', 'img' => 'img/11.jpg', 'like' => 900],
    ['title' => 'Russia’s only aircraft carrier damaged while undergoing repairs as floating dry dock sinks', 'content' => file_get_contents(__DIR__.'/content/article12.txt'),
    'date' => '2018-10-01', 'author' => 'Elin Eriksson', 'id' => '12', 'img' => 'img/12.jpg', 'like' => 900],
];
