<?php


namespace app\ReplaceConditionsWithCommand;


class WomanOver60 implements BillPayer
{

    public function calculateBill(float $amountDue): void
    {
        echo "Bill Amount for Woman Over 60 " . ($amountDue - $amountDue*.1) . "$";
    }
}