<?php


namespace app\HowToUseAdapterPattern;


interface Enemy
{
    public function moveShip():void;
    public function makeShipAttack():void;
}