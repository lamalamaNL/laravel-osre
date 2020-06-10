<?php

namespace LamaLama\Osre;

use LamaLama\Osre\Dossiers;
use LamaLama\Osre\InterestRequests;

class Osre
{
    private $prod = 'https://relet.relet.prd.osre.eu/api/v1';
    private $test = 'https://relet.relet.tst.osre.eu/api/v1';

    /**
     * Dossiers.
     *
     * @return void
     */
    public function dossiers()
    {
        return new Dossiers();
    }

    /**
     * InterestRequests.
     *
     * @return void
     */
    public function interestRequests()
    {
        return new InterestRequests();
    }
}
