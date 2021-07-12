<?php

namespace app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy;
interface Pay
{
    public function getBons(float $salary):float;
}