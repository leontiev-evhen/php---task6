<?php

/**
 * User: yevhen
 * Date: 01.08.17
 * Time: 11:17
 */
class InstrumentModel implements iInstrument
{
    private $nameInstrument;
    private $categoryInstrument;

    public function __construct ($nameInstrument, $categoryInstrument)
    {
        $this->nameInstrument = $nameInstrument;
        $this->categoryInstrument = $categoryInstrument;
    }

    public function getName ()
    {
        return $this->nameInstrument;
    }

    public function getCategory ()
    {
        return $this->categoryInstrument;
    }
}