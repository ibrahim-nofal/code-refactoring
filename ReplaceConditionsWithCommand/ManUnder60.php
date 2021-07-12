<?php


namespace app\ReplaceConditionsWithCommand;


class ManUnder60 implements BillPayer
{
    public function calculateBill(float $amountDue): void
    {
        echo "Bill Amount for Man Under 60 " . ($amountDue) . "$";
    }
}