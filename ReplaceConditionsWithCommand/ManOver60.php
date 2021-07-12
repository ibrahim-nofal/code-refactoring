<?php


namespace app\ReplaceConditionsWithCommand;


class ManOver60 implements BillPayer
{
    public function calculateBill(float $amountDue): void
    {
        echo "Bill Amount for Man Over 60 " . ($amountDue - $amountDue*.05) . "$";
    }
}