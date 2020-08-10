<?php

namespace Task\Condition;

class ConditionHateeho  extends ConditionCombined
{
    protected const CONDITIONS = [
        ConditionHatee::class,
        ConditionHo::class
    ];
}
