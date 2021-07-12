<?php


namespace app\ReplaceConditionsWithCommand;


class CashRegister
{
    private Command $command;

    /**
     * CashRegister constructor.
     * @param Command $command
     */
    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function returnFinalBill(float $amountDeu){
        $this->command->executeCalculateBill($amountDeu);
    }

}