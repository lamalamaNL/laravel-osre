<?php

namespace LamaLama\Osre;

use LamaLama\Osre\Dossiers;
use LamaLama\Osre\InterestRequests;

class Osre
{
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
