<?php

namespace Task;

use Task\Condition\ConditionInterface;

class Logic
{
    public function run(array $configuration): void
    {
        $output = [];
        foreach ($configuration['range'] as $number) {
            /** @var ConditionInterface $condition */
            foreach ($configuration['conditions'] as $condition) {
                $result = $condition::apply($number);
                if ($result !== null) {
                    $output[] = $result;
                    break;
                }
            }
        }

        echo $configuration['name'];
        echo "\n";
        echo implode('-', $output);
        echo "\n";
    }
}