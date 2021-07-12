<?php

namespace app\CreationProblems;

/*
 * ****************** Creation Methods *****************
 * Creation Method
 *  Replace Constructor with creation methods
 *   => Which constructor should be call?
 *   => Wish constructor has descriptive names?
 *   => Constructors can't has the same attribute signatures
 */

class FootballPlayer
{
    private float $passerRating;
    private int $rushingYards;
    private int $receivingYards;
    private int $totalTackles;
    private int $interception;
    private int $fieldGold;
    private float $avgPunt;
    private float $avgKickOffReturn;
    private float $avgPuntReturn;

    /***************** THE PROBLEM ***********************/
    /*
        //php don't support multi constructors
        public function __construct1(){}
        public function __construct2(){}
        public function __construct3(){}

     */


    /***************** SOLVING ***********************/
    /**
     * FootballPlayer constructor.
     * @param float $passerRating
     * @param int $rushingYards
     * @param int $receivingYards
     * @param int $totalTackles
     * @param int $interception
     * @param int $fieldGold
     * @param float $avgPunt
     * @param float $avgKickOffReturn
     * @param float $avgPuntReturn
     */
    private function __construct(float $passerRating, int $rushingYards, int $receivingYards, int $totalTackles, int $interception, int $fieldGold, float $avgPunt, float $avgKickOffReturn, float $avgPuntReturn)
    {
        $this->passerRating = $passerRating;
        $this->rushingYards = $rushingYards;
        $this->receivingYards = $receivingYards;
        $this->totalTackles = $totalTackles;
        $this->interception = $interception;
        $this->fieldGold = $fieldGold;
        $this->avgPunt = $avgPunt;
        $this->avgKickOffReturn = $avgKickOffReturn;
        $this->avgPuntReturn = $avgPuntReturn;
    }

    public static function createPR(float $passRating , int $rushingYards):FootballPlayer{
        return new FootballPlayer($passRating , $rushingYards , 0 ,0 ,0 ,0 ,0 ,0 ,0);
    }

    public static function createRT(int $receivingYards , int $totalTackles): FootballPlayer
    {
        return new FootballPlayer(0 , 0 , $receivingYards ,$totalTackles ,0 ,0 ,0 ,0 ,0);
    }


}