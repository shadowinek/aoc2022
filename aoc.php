<?php

//ini_set("memory_limit", "-1");
//set_time_limit(0);

include('vendor/autoload.php');

use Shadowinek\Aoc2022\AoC;

if ($argc > 3) {
    $aoc = new AoC();
    $aoc->execute((int) $argv[1], (int) $argv[2], (bool) $argv[3]);
} else {
    echo 'Too few arguments!' . PHP_EOL;
}