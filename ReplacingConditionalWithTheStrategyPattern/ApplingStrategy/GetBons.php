<?php


namespace app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy;


class GetBons implements Pay
{

    public function getBons(float $salary): float
    {
        return $salary + ($salary * .15);
    }
}