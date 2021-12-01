<?php

$raw = \file_get_contents('./input');
$numbers = \array_map('intval', \explode("\n", $raw));

$sum = 0;
$previous = null;
foreach ($numbers AS $i => $number) {
    $offset = $i - 2;
    $length = 3;
    while ($offset < 0) {
        $offset++;
        $length--;
    }
    $current = \array_sum(\array_slice($numbers, $offset, $length));

    if ($previous && $previous < $current) {
        $sum++;
    }
    $previous = $current;
}

echo $sum;