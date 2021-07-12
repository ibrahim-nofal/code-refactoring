<?php

namespace app\Five\ChallengeInLesson5;
class Athlete
{
    private string $athleteName = '';

    /**
     * Athlete constructor.
     * @param string $athleteName
     */
    public function __construct(string $athleteName)
    {
        $this->athleteName = $athleteName;
    }

    /**
     * @return string
     */
    public function getAthleteName(): string
    {
        return $this->athleteName;
    }


}

