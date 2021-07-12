<?php


namespace app\ReplaceConditionsWithCommand;


class CustomerTypePiker
{
    public function womanOver60():BillPayer{
        return new WomanOver60();
    }
    public function manOver60():BillPayer{
        return new ManOver60();
    }
    public function manUnder60():BillPayer
    {
        return new ManUnder60();
    }

}