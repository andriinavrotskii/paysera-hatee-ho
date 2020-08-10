<?php

namespace Task\Condition;

interface ConditionInterface
{
    /**
     * @param int $number
     * @return string|null
     */
    public static function apply(int $number): ?string;
}
