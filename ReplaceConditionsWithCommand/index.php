<?php

    require_once "../vendor/autoload.php";

    use app\ReplaceConditionsWithCommand\CustomerTypePiker;
    use app\ReplaceConditionsWithCommand\CashRegister;
    use app\ReplaceConditionsWithCommand\Waiter;


    $customerPiker = new CustomerTypePiker();
    $womanOver60 = $customerPiker->manOver60();
    $waiter = new Waiter($womanOver60);
    $cashRegister = new CashRegister(
        $waiter
    );

    $cashRegister->returnFinalBill(10.3);