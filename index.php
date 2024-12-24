<?php
require_once 'Utilisateur.php';
require_once 'Patient.php';
require_once 'Medecin.php';

function systemeMedical() {
    $medecin = new Medecin("medecin", "prenomMedecin", "Cardiologie");
    echo "Médecin créé : " . $medecin->afficherNomComplet() . "\n";
    echo "Spécialité : " . $medecin->getSpecialite() . "\n\n";

    $patient1 = new Patient("patient1", "prenomPatient1");
    $patient2 = new Patient("patient2", "prenomPatient2");
    
    echo $patient1->prendreRendezVous("2024-01-15", $medecin->getNom()) . "\n";
    echo $patient2->prendreRendezVous("2024-01-25", $medecin->getNom()) . "\n\n";

    echo $medecin->consulterPatient($patient1) . "\n";
    echo $medecin->consulterPatient($patient2) . "\n\n";

}

systemeMedical();
?>
