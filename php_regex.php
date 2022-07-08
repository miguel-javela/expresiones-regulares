<?php

$file = fopen("results.csv","r")

$match = 0;
$nomatch = 0;

while(!feof($file)){
    $line = fgets($file);
    echo $line;
    if(preg_match(
        '/^2018\-01\-(\d\d),.*$/',
        $line,
        $m
    )){
        print_r($m);
    } else {
        $nomatch++;
    }
}

fclose($file)

printf("\n\nmatch: %d\nno match: %d\n", $match,$nomatch)