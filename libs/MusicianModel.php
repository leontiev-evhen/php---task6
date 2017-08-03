<?php

/**
 * User: yevhen
 * Date: 01.08.17
 * Time: 11:16
 */
class MusicianModel implements iMusician
{
    private $arrayInstrument = [];
    private $musicianType;
    private $musicianName;

    public function __construct ($musicianName, $musicianType)
    {
        $this->musicianName = $musicianName;
        $this->musicianType = $musicianType;
    }

    public function addInstrument (iInstrument $obj)
    {
        $this->arrayInstrument[] = $obj;
    }
    
    public function getInstrument ()
    {
        return $this->arrayInstrument;
    }
    
    public function assingToBand (iBand $nameBand)
    {
        return $nameBand->addMusician($this);
    }
    
    public function getMusicianType ()
    {
        return $this->musicianType;
    }

    public function getMusicianName ()
    {
        return $this->musicianName;
    }
}