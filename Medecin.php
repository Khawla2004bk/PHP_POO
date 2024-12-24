<?php
require_once 'Utilisateur.php';

class Medecin extends Utilisateur {
    private $specialite;
    private $patients = [];

    public function __construct($nom, $prenom, $specialite) {
        parent::__construct($nom, $prenom, 'Medecin');
        $this->specialite = $specialite;
    }

    public function consulterPatient(Patient $patient) {
        if (!in_array($patient, $this->patients)) {
            $this->patients[] = $patient;
        }
        
        return "Consultation de {$patient->afficherNomComplet()}";
    }

    public function getSpecialite() {
        return $this->specialite;
    }
}
