<?php
class Utilisateur {
    protected $nom;
    protected $prenom;
    protected $type_utilisateur;

    public function __construct($nom, $prenom, $type_utilisateur) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type_utilisateur = $type_utilisateur;
    }

    public function afficherNomComplet() {
        return "{$this->prenom} {$this->nom}";
    }

    public function changerNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    public function changerPrenom($nouveauPrenom) {
        $this->prenom = $nouveauPrenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getTypeUtilisateur() {
        return $this->type_utilisateur;
    }
}
