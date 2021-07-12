<?php


class Animals
{
    protected string $sound = "";

    /**
     * Animals constructor.
     * @param string $sound
     */
    public function __construct(string $sound)
    {
        $this->sound = $sound;
    }
    /**
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

    /**
     * @param string $sound
     */
    public function setSound(string $sound): void
    {
        $this->sound = $sound;

    }

}

class Dog extends Animals {

    public function __construct(string $sound)
    {
        parent::__construct($sound);
    }
}

class Cat extends Animals {

    public function __construct(string $sound)
    {
        parent::__construct($sound);
    }
}


//Here we will use the switch statements
$animal = "Dog";

switch($animal){
    case "Dog":
        echo "Say hooooo\n";
        break;
    case "Cat":
        echo "Say Meau\n";
        break;
    default:
        echo "Sound of animal\n";
}

//Here we will use the polymorphism

$cat = new Cat("Meau");
$dog = new Dog("Hoooo");

echo $cat->getSound() . PHP_EOL;
echo $dog->getSound();

