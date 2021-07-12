<?php


namespace app\ReplaceConditionsWithCommand;


interface BillPayer
{
    public function calculateBill(float $amountDue):void;
}
