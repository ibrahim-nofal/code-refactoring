<?php


namespace app\HowToUseAdapterPattern;


class EnemyAdapter implements Enemy
{
    public GalaxPrime $galaxPrime;

    /**
     * EnemyAdapter constructor.
     * @param GalaxPrime $galaxPrime
     */
    public function __construct(GalaxPrime $galaxPrime)
    {
        $this->galaxPrime = $galaxPrime;
    }


    public function moveShip(): void
    {
        $this->galaxPrime->turnOnForceField();
        $this->galaxPrime->warpToSpace();
    }

    public function makeShipAttack(): void
    {
        $this->galaxPrime->chargePhases();
        $this->galaxPrime->firePhasers();
    }
}