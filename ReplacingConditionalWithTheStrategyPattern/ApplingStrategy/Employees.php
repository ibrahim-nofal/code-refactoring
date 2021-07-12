<?php


namespace app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy;


class Employees
{
    private float $salary;
    private Pay $pay;

    public function __construct(float $salary)
    {
        $this->pay = new NoBons();
        $this->salary = $salary;

    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->getPay()->getBons($this->salary);
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return NoBons|Pay
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * @param NoBons|Pay $pay
     */
    public function setPay($pay): void
    {
        $this->pay = $pay;
    }



}