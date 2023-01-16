<?php
class Employe
{
    private $nom;
    private $prenom;
    private $age;

    public function_contruct($nom, $prenom, $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age= (int)$age;
    }
    public function direBonjour(){
        echo "-Bonjour, je m'appelle $this->prenom  $this->nom";
    }
    public fuction getNom(){
        return $this->nom; 
    } 
}
 
public function setNom(nom){
    if(!is_string($nom)){
        die();
    }
    $this->nom=$nom;
}

public fuction getPrenom(){
    return $this->prenom; 
} 

public function setPrenom(prenom){
if(!is_string($Prenom)){
    die();
}
$this->prenom=$Prenom;
}
public fuction getAge(){
    return $this->age; 
} 
}

public function setAge(age){
if(!is_string($Age)){
    die();
}
$this->age=$Age;
}