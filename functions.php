<?php

declare(strict_types=1);

/**
 * [sortByDate description]
 * @param  array  $a [description]
 * @param  array  $b [description]
 * @return [type]    [description]
 */
function sortByDate(array $a, array $b) : int {
 return strcmp($b['date'], $a['date']);
};

/**
 * [sortByLikes description]
 * @param  array $a [description]
 * @param  array $b [description]
 * @return bool     [description]
 */
function sortByLikes(array $a, array $b) : bool {
  return $a['like'] < $b['like'];
};
