<?php

namespace Task\Condition;

class ConditionJoff implements ConditionInterface
{
    private const VALUE = 'joff';

    /**
     * @param int $number
     * @return string|null
     */
    public static function apply(int $number): ?string
    {
        $exceptedNumbers = [1, 4, 9];

        if (\in_array($number, $exceptedNumbers)) {
            return self::VALUE;
        }

        return null;
    }
}
