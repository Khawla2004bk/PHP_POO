<?php
require_once 'Utilisateur.php';

class Patient extends Utilisateur {
    private $rendez_Vous = [];

    public function __construct($nom, $prenom) {
        parent::__construct($nom, $prenom, 'Patient');
    }

    public function prendreRendezVous($date, $medecin) {
        $rendez_Vous = [
            'date' => $date,
            'medecin' => $medecin
        ];
        $this->rendez_Vous[] = $rendez_Vous;
        return "Rendez-vous pris le {$date} avec le Dr. {$medecin}";
    }
}
