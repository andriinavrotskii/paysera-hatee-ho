<?php

namespace Task\Condition;

class ConditionJofftchoff extends ConditionCombined
{
    protected const CONDITIONS = [
        ConditionJoff::class,
        ConditionTchoff::class
    ];
}
