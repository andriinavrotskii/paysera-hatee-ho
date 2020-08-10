<?php

namespace Task\Condition;

class ConditionDivider implements ConditionInterface
{
    protected const VALUE = '';
    protected const DIVIDER = 1;

    /**
     * @param int $number
     * @return string|null
     */
    public static function apply(int $number): ?string
    {
        if ($number % static::DIVIDER === 0) {
            return static::VALUE;
        }

        return null;
    }
}