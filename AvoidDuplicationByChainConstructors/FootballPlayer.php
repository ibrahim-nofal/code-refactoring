<?php

namespace app\AvoidDuplicationByChainConstructors;

/*
 *  ************Avoid duplication using chain constructor************
 *  => More constructors, More problems
 *  => General purpose constructor save the day
 */
class FootballPlayer
{
    private float $passerRating;
    private int $rushingYards;
    private int $receivingYards;
    private int $totalTackles;
    private int $interception;


    /***************THE PROBLEM*****************/

    /*
        //the first const is initialize all attributes
        public function __construct1(float $passerRating,
            int $rushingYards,
            int $receivingYards,
            int $totalTackles,
            int $interception
            )
        {
            $this->passerRating = $passerRating;
            $this->rushingYards = $rushingYards;
            $this->receivingYards = $receivingYards;
            $this->totalTackles = $totalTackles;
            $this->interception = $interception;
        }


        //the first const is initialize all attributes expect (interception)
        public function __construct2(float $passerRating,
            int $rushingYards, int $receivingYards,
            int $totalTackles
            )
        {
            $this->passerRating = $passerRating;
            $this->rushingYards = $rushingYards;
            $this->receivingYards = $receivingYards;
            $this->totalTackles = $totalTackles;
        }


    //the first const is initialize all attributes expect (totalTackles)
        public function __construct2(float $passerRating,
            int $rushingYards, int $receivingYards,
            int $interception
            )
        {
            $this->passerRating = $passerRating;
            $this->rushingYards = $rushingYards;
            $this->receivingYards = $receivingYards;
            $this->interception = $interception;
        }

     */


    /***************THE SOLUTION*****************/

    public function __construct(float $passerRating,
                                 int $rushingYards,
                                 int $receivingYards,
                                 int $totalTackles,
                                 int $interception
    ){
        $this->passerRating = $passerRating;
        $this->rushingYards = $rushingYards;
        $this->receivingYards = $receivingYards;
        $this->totalTackles = $totalTackles;
        $this->interception = $interception;
    }

    public static function construct2(float $passerRating,
                                 int $rushingYards,
                                 int $receivingYards,
                                 int $totalTackles
    ): FootballPlayer
    {
        return new self($passerRating , $rushingYards , $receivingYards , $totalTackles , 0);
    }

    public static function construct3(float $passerRating,
                                 int $rushingYards,
                                 int $receivingYards,
                                 int $interception
    ): FootballPlayer
    {
        return new self($passerRating , $rushingYards , $receivingYards , 0 , $interception);
    }
}