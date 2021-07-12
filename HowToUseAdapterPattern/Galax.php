<?php


namespace app\HowToUseAdapterPattern;


class Galax implements Enemy
{
    private int $attackPower = 5;
    private int $spacesMovedPerTurn = 2;

    public function moveShip(): void
    {
        echo "Galax moves " , $this->spacesMovedPerTurn . " spaces\n";
    }

    public function makeShipAttack(): void
    {
        echo "Galax does " . $this->attackPower . " damage\n";
    }
}