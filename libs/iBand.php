<?php

/**
 * User: yevhen
 * Date: 01.08.17
 * Time: 11:12
 */
interface iBand
{
    public function getName();
    public function getGenre();
    public function addMusician(iMusician $obj);
    public function getMusician();
}