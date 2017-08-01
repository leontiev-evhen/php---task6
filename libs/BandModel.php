<?php

/**
 * User: yevhen
 * Date: 01.08.17
 * Time: 11:16
 */
class BandModel implements iBand
{
    private $nameBand;
    private $genreBand;
    private $arrayMusician = [];

    public function __construct ($nameBand, $genreBand)
    {
        $this->nameBand     = $nameBand;
        $this->genreBand    = $genreBand;
    }

    public function getName ()
    {
        return $this->nameBand;
    }

    public function getGenre ()
    {
        return $this->genreBand;
    }

    public function addMusician (iMusician $obj)
    {
        $this->arrayMusician[] = $obj;
    }

    public function getMusician () 
    {
        return $this->arrayMusician;
    }
}