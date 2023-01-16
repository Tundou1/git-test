<?php
require_once("./Employe.php");
require_once("./idirecteur.php");

class Manager extends Employe implements Directeur
{
    public $client;

    public function_contruct($nom,$prenom,$age)
    {
        $this->client=null;
        parent::_construct($nom,$prenom,$age);
    }
    public function enregistrerRDV($client)
    {
        $this->client=$client;
    }
    public function afficherRDV()
    {
        echo "Renez-vous de $this->nom,$this->$prenom:$this->client";
    }
}
