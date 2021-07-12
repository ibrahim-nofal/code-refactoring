<?php

    require_once "../vendor/autoload.php";

    use app\ReplacingConditionalWithTheStrategyPattern\Employee;
    use app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy\Employees;
    use app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy\Get20Per;
    use app\ReplacingConditionalWithTheStrategyPattern\ApplingStrategy\GetBons;
    //$emp = new Employee(false, 1500.0);

    //echo $emp->getSalary();

    $emp = new Employees(1500.0);
    $emp->setPay(new GetBons());
    echo $emp->getSalary() . PHP_EOL;
