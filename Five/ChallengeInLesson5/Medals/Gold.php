<?php


namespace app\Five\ChallengeInLesson5\Medals;


use app\Five\ChallengeInLesson5\Athlete;


class Gold
{
    private Athlete $athlete;
    private static ?Gold $gold = null;
    private function __construct(Athlete $athlete){
        $this->athlete = $athlete;
    }

    public static function getInstance(Athlete $athlete):Gold{
        if(!self::$gold){
            self::$gold =  new Gold($athlete);
        }
        return self::$gold;
    }

    public function getAthlete():Athlete{
        return $this->athlete;
    }
}
class Silver
{
    private Athlete $athlete;
    private static ?Silver $Silver = null;
    private function __construct(Athlete $athlete){
        $this->athlete = $athlete;
    }

    public static function getInstance(Athlete $athlete):Silver{
        if(!self::$Silver){
            self::$Silver =  new Silver($athlete);
        }
        return self::$Silver;
    }

    public function getAthlete():Athlete{
        return $this->athlete;
    }
}
class Bronze
{
    private Athlete $athlete;
    private static ?Bronze $Bronze = null;
    private function __construct(Athlete $athlete){
        $this->athlete = $athlete;
    }

    public static function getInstance(Athlete $athlete):Bronze{
        if(!self::$Bronze){
            self::$Bronze =  new Bronze($athlete);
        }
        return self::$Bronze;
    }

    public function getAthlete():Athlete{
        return $this->athlete;
    }
}

class MedalsFactory {

    public function createMedal($className, $athlete)
    {
        return $className::getInstance($athlete);
    }
}