<?php

$raw = \file_get_contents('./input');
$numbers = \array_map('intval', \explode("\n", $raw));

$sum = 0;
$previous = null;
foreach ($numbers AS $i => $number) {
    $current = \array_sum(\array_slice($numbers, $i, 3));

    if ($previous && $previous < $current) {
        $sum++;
    }
    $previous = $current;
}

echo $sum;
