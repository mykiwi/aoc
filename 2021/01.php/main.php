<?php

$raw = \file_get_contents('./input');
$numbers = \array_map('intval', \explode("\n", $raw));

$sum = 0;
$previous = null;
foreach ($numbers AS $current) {
    if ($previous && $previous < $current) {
        $sum++;
    }
    $previous = $current;
}

echo $sum;
