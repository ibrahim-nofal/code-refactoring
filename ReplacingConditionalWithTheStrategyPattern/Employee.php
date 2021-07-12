<?php

namespace  app\ReplacingConditionalWithTheStrategyPattern;


class Employee{
    private bool $bons = false;
	private float $salary = 0.0;

	// now if we want to change the bons we will change the class and this action is not good
    // we can do it with strategy pattern by adding a method isbons() or something like that
	public function __construct(bool $bons , float $salary) {
		$this->bons = $bons;
		$this->salary = $salary;
	}

	public function isBons():bool {
		return $this->bons;
	}
	public function setBons(bool $bons) {
    $this->bons = $bons;
}
	public function getSalary() {
		if($this->bons) {
            return $this->salary + (0.15 * $this->salary);
        }
		return $this->salary;
	}
	public function setSalary(float $salary) {
        $this->salary = $salary;
    }

}
