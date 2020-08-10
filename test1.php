<?php

function logic(
    int $number,
    int $devider1,
    int $devider2,
    string $outputForBoth,
    string $outputFor1,
    string $outputFor2
) {
    $isDevides1 = $number % $devider1 === 0;
    $isDevides2 = $number % $devider2 === 0;

    if ($isDevides1 && $isDevides2) {
        $output = $outputForBoth;
    } elseif($isDevides1)  {
        $output = $outputFor1;
    } elseif ($isDevides2) {
        $output = $outputFor2;
    } else {
        $output = $number;
    }

    return $output;
};

$configuration = [
    [
        'name' => 'Task v1:',
        'delimiter' => ' ',
        'range' => range(1, 20),
        'devider1' => 3,
        'devider2' => 5,
        'outputForBoth' => 'papow',
        'outputFor1' => 'pa',
        'outputFor2' => 'pow'
    ],
    [
        'name' => 'Task v2:',
        'delimiter' => '-',
        'range' => range(1, 15),
        'devider1' => 2,
        'devider2' => 7,
        'outputForBoth' => 'hateeho',
        'outputFor1' => 'hatee',
        'outputFor2' => 'ho'
    ],
];

function myTraversable(array $taskConfig): \Traversable
{
    foreach ($taskConfig['range'] as $number) {
        yield logic(
            $number,
            $taskConfig['devider1'],
            $taskConfig['devider2'],
            $taskConfig['outputForBoth'],
            $taskConfig['outputFor1'],
            $taskConfig['outputFor2']
        );
    }
}

foreach ($configuration as $taskConfig) {
    $output = [];

    echo $taskConfig['name'] . "\n";

    $showDelimiter = false;
    foreach (myTraversable($taskConfig) as $output) {
        if ($showDelimiter === true) {
            echo $taskConfig['delimiter'];
        }
        $showDelimiter = true;

        echo $output;
    }

    echo "\n";
}

