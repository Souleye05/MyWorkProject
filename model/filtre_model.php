<?php
// Fonction pour filtrer les étudiants
function filtrerEtudiants($students, $referentiel, $status, $date) {
    return array_filter($students, function($student) use ($referentiel, $status, $date) {
        $filtreReferentiel = false;  // Par défaut, filtrer par référentiel est true
        $filtreStatus = false;       // Par défaut, filtrer par status est true
        // Si une valeur de référentiel est soumise, vérifiez que l'étudiant correspond à ce référentiel
        if ($referentiel !== '') {
            $filtreReferentiel = $student['referentiel'] === $referentiel && $student['date'] == $date;
            if($status == ""){
                $filtreStatus = true;
            }
        }
        
        // Si une valeur de status est soumise, vérifiez que l'étudiant correspond à ce status
        if ($status !== '') {
            $filtreStatus = $student['status'] === $status && $student['date'] == $date;
            if($referentiel == ""){
                $filtreReferentiel = true;
            }
        }
        if($status == "" && $referentiel == ""){
            $filtreReferentiel = true;
            $filtreStatus = true;
        }
        
        // Retourne true si l'étudiant correspond aux conditions de filtrage
        return $filtreReferentiel && $filtreStatus;
    });
}



function filtrerEtudiants1($students, $referentiel, $status){
    return array_filter($students, function($student) use ($referentiel, $status) {
        if($referentiel == "" && $status == ""){
            return true;
        } 
        elseif($referentiel != "" && $status == ""){
            return $referentiel == $student["referentiel"];
        }
        elseif($referentiel == "" && $status != ""){
            return $status == $student["status"];
        }else{
            return ($status == $student["status"]) && ($referentiel == $student["referentiel"]);
        }
    });
}

// Fonction pour filtrer les étudiants
function filtrerEtudiants2($students, $referentiel, $status, $date) {
    return array_filter($students, function($student) use ($referentiel, $status, $date) {
        $filtreReferentiel = true; // Par défaut, inclure tous les étudiants
        $filtreStatus = true;      // Par défaut, inclure tous les étudiants
        $filtreDate = true;        // Par défaut, inclure tous les étudiants
        
        // Vérifie si le filtrage par référentiel est activé et correspond à l'étudiant
        if (!empty($referentiel)) {
            $filtreReferentiel = $student['referentiel'] === $referentiel;
        }
        
        // Vérifie si le filtrage par statut est activé et correspond à l'étudiant
        if (!empty($status)) {
            $filtreStatus = $student['status'] === $status;
        }
        
        // Vérifie si le filtrage par date est activé et correspond à l'étudiant
        if (!empty($date)) {
            $filtreDate = $student['date'] === $date;
        }
        
        // Retourne true si l'étudiant correspond à tous les critères de filtrage
        return $filtreReferentiel && $filtreStatus && $filtreDate;
    });
}



?>