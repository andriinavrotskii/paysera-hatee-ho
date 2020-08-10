<?php

namespace Task\Condition;

class ConditionCombined implements ConditionInterface
{
    protected const CONDITIONS = [];

    /**
     * @param int $number
     * @return string|null
     */
    public static function apply(int $number): ?string
    {
        $results = [];
        /** @var ConditionInterface $condition */
        foreach (static::CONDITIONS as $condition) {
            $result = $condition::apply($number);
            if (\is_null($result)) {
                return null;
            }

            $results[] = $result;
        }

        return implode('', $results);
    }

}