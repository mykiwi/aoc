<?php

$raw = \file_get_contents('./input');
$depth = 0;

preg_match_all('#down (\d+)#', $raw, $down);
preg_match_all('#up (\d+)#', $raw, $up);
preg_match_all('#forward (\d+)#', $raw, $forward);
$depth += \array_sum($down[1]);
$depth -= \array_sum($up[1]);
$horizontal = \array_sum($forward[1]);

echo $depth * $horizontal;
