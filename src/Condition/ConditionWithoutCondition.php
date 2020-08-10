<?php

namespace Task\Condition;

class ConditionWithoutCondition implements ConditionInterface
{
    /**
     * @param int $number
     * @return string
     */
    public static function apply(int $number): string
    {
        return $number;
    }
}
