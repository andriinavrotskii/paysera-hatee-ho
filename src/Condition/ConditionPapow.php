<?php

namespace Task\Condition;

class ConditionPapow extends ConditionCombined
{
    protected const CONDITIONS = [
        ConditionPa::class,
        ConditionPow::class
    ];
}
