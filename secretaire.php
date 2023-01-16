<?php
require_once("./employe.php");

class Secretaire extends Employe
{
    public function_contruct($nom,$prenom,$age)
    {
        parent::_construct($nom,$prenom,$age);
    }
    public function prendRDV(Directeur $directeur;$client)
    {
       $directeur->enregistrerRDV($client); 
    }
}