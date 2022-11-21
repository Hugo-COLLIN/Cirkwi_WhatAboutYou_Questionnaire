<?php

class PasUnMoutonException extends Exception
{

    public function __construct()
    {
        parent::__construct("L'objet envoyé n'est pas un mouton !");
    }
}