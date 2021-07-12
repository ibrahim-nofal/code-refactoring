<?php


namespace app\ReplaceConditionsWithCommand;



interface Command{
    public function executeCalculateBill(float $amountDue);
}