<?php


abstract class Customer extends \Exception
{
    protected string $cusRating;
    const PREMIER  = 1;
    const VALUED  = 2;
    const DEADBEAT  = 3;

    /**
     * @return string
     */
    public function __construct($message = "This Class not exist", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function getCusRating(): string
    {
        return $this->cusRating;
    }

    /**
     * @param string $cusRating
     */
    public function setCusRating(string $cusRating): void
    {
        $this->cusRating = $cusRating;
    }


}

class Premier extends Customer {

    /**
     * Premier constructor.
     */
    public function __construct()
    {
        $this->setCusRating("Premier Customer");
    }
}
class Valued extends Customer {

    /**
     * Premier constructor.
     */
    public function __construct()
    {
        $this->setCusRating("Valued Customer");
    }
}
class Deadbeat extends Customer {

    /**
     * Premier constructor.
     */
    public function __construct()
    {
        $this->setCusRating("Deadbeat Customer");
    }
}

class CusFactory {

    //get a customer class with out any connection statements
    public static function getCustomer(string $cotRate):Exception{
        try{
            return new $cotRate();
        }catch(\Exception $e){
            echo $e->getMessage();
            return $e;
        }
    }
}

var_dump(CusFactory::getCustomer("Valued")->getCusRating());