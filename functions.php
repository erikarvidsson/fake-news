<?php


// <!-- Gett all articels from specific author  or id -->



// function getArticle($a, $b) {
//       if($a == $b)
//         echo 'lalala';
//       elseif ($a == $articles['id']) {
//         echo 'hahaha';
// }};
//
//
//


function getRandomQuote($a)
{
  foreach ($a as $aricle) {
      $articel[] =  $article[(rand(0, count($article)-1))];
  }
  return $article;
}

echo getRandomQuote($articles);


$articles =[
    ['title' => 'Första artikeln', 'content' => file_get_contents(__DIR__.'/content/article1.txt'), 'date' => '2018-10-15', 'author' => 'Erik', 'id' => 1, 'img' => '' ],
    ['title' => 'Andra artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-13', 'author' => 'Author2', 'id' => 2],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-12', 'author' => 'Author3', 'id' => 3],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-05', 'author' => 'Author3', 'id' => 4],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-15', 'author' => 'Author3', 'id' => 5],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-25', 'author' => 'Author3', 'id' => 6],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-15', 'author' => 'Author3', 'id' => 7],
    ['title' => 'Tredje artikeln', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'date' => '2018-10-09', 'author' => 'Author3', 'id' => 8],
];










// function getArticleByDate($a, $b){
//       return strtotime($a) - strtotime($b);
//     }
//       $date = date("Y-m-d");
//     usort($date, 'getArticleByDate');
// print_r($articles);
//
//
//
//   echo $date;
//
//   getArticleByDate($articles['date'], $date);
//
//
//
//












// function getArticel($articles, $author) {
//             foreach ($articles as $article) {
//                 if ($article['author'] === $_GET['author']){
//
//                   return $article;
//
//                 }elseif ($article['id'] === $_GET['id']) {
//                   return $article;
//           }
//       }
// };


// PHP function to check for even elements in an array

//
// function articleByAuthor($articles, $name) {
//   $authorArticels = array_filter(($articles), function($article) use ($name) {
//     return ($article['author'] === $name);
// });
//   return $authorArticels;
// };
//




// {
//     // returns if the input integer is even
//     if($articles['author']== $_GET['author'])
//        return $articles;
//     else
//        return FALSE;
// }
//
//
//
// $array = array(12, 0, 0, 18, 27, 0, 46);
// print_r(array_filter($array, "Even"));
//
//











            // foreach ($articles as $article) :
            //     if ($article['author'] === $_GET['author'])
// whrite code for creating an new side for article
