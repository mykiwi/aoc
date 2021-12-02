<?php

$raw = \file_get_contents('./input');
$lines = \explode("\n", $raw);

$depth = 0;
$horizontal = 0;
$aim = 0;

foreach ($lines as $line) {
    if (\str_starts_with($line, 'forward ')) {
        $horizontal += $x = \intval(\substr($line, 8));
        $depth += $aim * $x;
    } elseif (\str_starts_with($line, 'down ')) {
        $aim += \intval(\substr($line, 5));
    } elseif  (\str_starts_with($line, 'up ')) {
        $aim -= \intval(\substr($line, 3));
    }
}

echo $depth * $horizontal;
