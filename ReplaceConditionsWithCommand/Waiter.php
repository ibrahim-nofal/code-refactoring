<?php


namespace app\ReplaceConditionsWithCommand;


class Waiter implements Command
{
    private BillPayer $billPayer;

    /**
     * Waiter constructor.
     * @param BillPayer $billPayer
     */
    public function __construct(BillPayer $billPayer)
    {
        $this->billPayer = $billPayer;
    }


    public function executeCalculateBill(float $amountDue)
    {
        $this->billPayer->calculateBill($amountDue);
    }
}