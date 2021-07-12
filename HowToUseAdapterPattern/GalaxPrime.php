<?php


namespace app\HowToUseAdapterPattern;


class GalaxPrime
{
    protected string $name = "Galaxian Prime";
    private int $attackPower = 15;
    protected int $spacesMovedPerTurn = 4;

    public function turnOnForceField():void{
        echo $this->name . " Turn on force field\n";
    }

    public function warpToSpace():void{
        echo $this->name . " warps " . $this->spacesMovedPerTurn . " spaces\n";
    }

    public function chargePhases():void{
        echo $this->name . " charge phasers\n";
    }
    public function firePhasers():void{
        echo $this->name . " fires phiasers for " . $this->attackPower . "\n";
    }
}