<?php

namespace Task\Condition;

class ConditionStorage
{
    /**
     * @return string[]|ConditionInterface
     */
    public function getTask1Conditions(): array
    {
        return [
            ConditionPapow::class,
            ConditionPa::class,
            ConditionPow::class,
            ConditionWithoutCondition::class
        ];
    }

    /**
     * @return string[]|ConditionInterface
     */
    public function getTask2Conditions(): array
    {
        return [
            ConditionHateeho::class,
            ConditionHatee::class,
            ConditionHo::class,
            ConditionWithoutCondition::class
        ];
    }

    /**
     * @return string[]|ConditionInterface
     */
    public function getTask3Conditions(): array
    {
        return [
            ConditionJofftchoff::class,
            ConditionJoff::class,
            ConditionTchoff::class,
            ConditionWithoutCondition::class
        ];
    }
}
