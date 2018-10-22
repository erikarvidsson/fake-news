<?php
declare(strict_types=1);
// This is the file where you can keep your data arrays such as articles and
// authors.


$authors = [
['name' => 'Erik', 'id' => 1],
['name' => 'author2', 'id' => 2],
['name' => 'Author3', 'id' => 3],
['name' => 'author4', 'id' => 4],
['name' => 'author5', 'id' => 5],
['name' => 'author6', 'id' => 6],
['name' => 'author7', 'id' => 7],
['name' => 'author8', 'id' => 8]
];





// get arrticle

$articles =[
    ['title' => 'Första artikeln', 'content' => file_get_contents(__DIR__.'/content/article1.txt'), 'date' => '2018-10-15', 'author' => 'Erik'],
    ['title' => 'Andra artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-15', 'author' => 'Author2'],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-15', 'author' => 'Author3'],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-15', 'author' => 'Author3'],
];

$name = $authors[2]['name'];

  foreach ($articles as $article) :
    if ($article['author'] === $name) :?>
    <br>
    <a class="t-0" href="" style="color: black; text-decoration: none;">
    <h2 > <?= $article['title']; ?> </h2>
    <h6> <?= $article['content']; ?> </h6>
    </a>
    <a class="t-0" href="" style="color: black; text-decoration: none;">
    <p> <?= $article['author'].'  '.$article['date']; ?> </p> </a>



<?php endif; endforeach; ?>
