<?php

namespace Task\Condition;

class ConditionTchoff implements ConditionInterface
{
    private const VALUE = 'tchoff';

    /**
     * @param int $number
     * @return string|null
     */
    public static function apply(int $number): ?string
    {
        if ($number > 5) {
            return self::VALUE;
        }

        return null;
    }
}
