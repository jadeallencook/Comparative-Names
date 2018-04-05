<?php
$handle = fopen('90s-last-names.txt', 'r');
$output = '[';
while ($line = fgets($handle)) {
    $parts = preg_split('/\s+/', $line);
    $object = '{ "name": "' . $parts[0] . '", "frequency": ' . $parts[1] . ', "cumulative": ' . $parts[2] . ', "rank": ' . $parts[3] . ' },';
    $output = $output . $object;
}
$output = $output . ']';
$myfile = fopen('90s-last-names.json', 'w') or die('Unable to open file!');
fwrite($myfile, $output);
fclose($myfile);
