<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

function getArticelById($authors, $article) {
  $news = [];
  foreach ($article as $id) {
    $news[] =  $id['id'].'<br>';
  }
  return $news;
};

print_r(getArticelById($authors, $article));
