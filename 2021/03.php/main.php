<?php

$raw = \file_get_contents('./input');
$bits = \array_map(
    'str_split',
    \explode("\n", $raw)
);

$gamma = '';
$epsilon = '';

$max = \count($bits);
$results = [];
foreach ($bits[0] as $i => $bit) {
    $positive = \array_sum(\array_column($bits, $i));
    $gamma   .= $max - $positive > $positive ? 1 : 0;
    $epsilon .= $max - $positive > $positive ? 0 : 1;
}

echo \bindec($gamma) * \bindec($epsilon);
