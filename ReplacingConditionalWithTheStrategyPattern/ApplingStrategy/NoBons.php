<?php

namespace app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy;

class NoBons implements Pay
{

    public function getBons(float $salary): float
    {
        return $salary;
    }
}