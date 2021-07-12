<?php


namespace app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy;


class Get20Per implements Pay
{

    public function getBons(float $salary): float
    {
        return $salary + ($salary * 0.3);
    }
}