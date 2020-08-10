<?php

namespace Task\Service;

use Task\Condition\ConditionInterface;

class Service
{
    /**
     * @param array|ConditionInterface $conditions
     * @param int $number
     * @return \Traversable
     */
    public function execute(array $conditions, int $number): \Traversable
    {
        /** @var ConditionInterface $condition */
        foreach ($conditions as $condition) {
            $result = $condition::apply($number);
            if ($result !== null) {
                yield $result;
            }
        }

    }
}