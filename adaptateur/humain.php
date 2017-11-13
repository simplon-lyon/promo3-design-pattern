<?php

namespace adaptateur;

class Humain {
    private $nom;
    private $prenom;

    function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function allerSurYoutube() {
        echo "regarde Norman et se délecte de ses blagues";
    }

    public function raconterSaVie():string {
        return "je m'présente, je m'appelle ".$this->nom.
        " ".$this->prenom." j'aimerais bien réussir ma vie"
        ." être heureuuuuuux";
    }

    public function sePlainDeSonTravail():string {
        return "c'est difficile la formation";
    }

}