<?php

$handle = \fopen('./input', 'r');

$sum = 0;
$previous = null;
while (($current = fgets($handle, 4096)) !== false) {
    $current = \intval($current);
    if ($previous && $previous < $current) {
        $sum++;
    }
    echo "// $previous < $current # $sum".PHP_EOL;
    $previous = $current;
}

fclose($handle);
echo $sum;