<?php

$raw = \file_get_contents('./input');
$bits = \array_map(
    'str_split',
    \explode("\n", $raw)
);

$gamma = '';
$epsilon = '';

$inverse = $bits;
foreach ($bits[0] as $i => $bit) {
    $max = \count($bits);
    if ($max > 1) {
        $positive = \array_sum(\array_column($bits, $i));
        $keep = $positive >= $max - $positive ? 1 : 0;
        $bits = \array_filter($bits, fn($b) => $b[$i] == $keep);
    }

    $max = \count($inverse);
    if ($max > 1) {
        $positive = \array_sum(\array_column($inverse, $i));
        $keep = $positive >= $max - $positive ? 0 : 1;
        $inverse = \array_filter($inverse, fn($b) => $b[$i] == $keep);
    }
}
$oxygenGeneratorRating = \bindec(\implode(\current($bits)));
$co2ScrubberRating = \bindec(\implode(\current($inverse)));

echo $oxygenGeneratorRating * $co2ScrubberRating;
