<?php

/**
 * User: yevhen
 * Date: 01.08.17
 * Time: 11:13
 */
interface iMusician
{
    public function addInstrument(iInstrument $obj);
    public function getInstrument();
    public function assingToBand(iBand $nameBand);
    public function getMusicianType();
}