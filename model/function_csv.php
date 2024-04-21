
 <?php
 function lireAllFileCsv($path,$ID){
  $table = [];
  if (file_exists($path)){
    $file = fopen($path, 'r');
    if ($file != null){
      $key = fgetcsv($file);

      while(($data = fgetcsv($file)) != false){
          $table[] = array_combine($key, $data);
          // var_dump($data);die();
        }
      }
    fclose($file);
  }
  return $table;
}

function lireAllFileCsvPre($path,$ID){
  $table = [];
  if (file_exists($path)){
    $file = fopen($path, 'r');
    if ($file != null){
      $key = fgetcsv($file);

      while(($data = fgetcsv($file)) != false){
        if($data[8]==$ID){
          $table[] = array_combine($key, $data);
        }
        

      }

    }
    fclose($file);
  }
  return $table;
}
function lireAllFileCsvRef($path,$ID){
  $table = [];
  if (file_exists($path)){
    $file = fopen($path, 'r');
    if ($file != null){
      $key = fgetcsv($file);
      while(($data = fgetcsv($file)) != false){
        if($data[0]==$ID){
          $table[] = array_combine($key, $data);
        }
      }
    }
    fclose($file);
  }
  return $table;
}

function ReadFileCsvApp($path,$ID){
  $table = [];
  if (file_exists($path)){
    $file = fopen($path, 'r');
    if ($file != null){
      $key = fgetcsv($file);

      while(($data = fgetcsv($file)) != false){
        if($data[5]==$ID){
          $table[] = array_combine($key, $data);
        }
      } 
    }
    fclose($file);
  }
  return $table;
}

function filterAll($data, $option){
  $resultat = [];
  if($option == '' || count($option) == 0)
    return  $data;
  
  foreach($data as $dt){
    $nb = 0;
    foreach($option as $k => $v){
      if(array_key_exists($k, $dt) && $dt[$k] == $v){
        $nb++;
      }
    }
    if($nb == count($option)){
      $resultat[] = $dt;
    }
  }

  return $resultat;
}
/* 
$etudiants = [
  [
      'Nom' => 'Dupont',
      'Prénom' => 'Jean',
      'Email' => 'jean.dupont@example.com',
      'Matricule' => 'E12345',
      'Age' => 10
  ],
  [
      'Nom' => 'Durand',
      'Prénom' => 'Marie',
      'Email' => 'marie.durand@example.com',
      'Matricule' => 'E12346',
      'Age' => 15
  ],
  [
      'Nom' => 'Martin',
      'Prénom' => 'Pierre',
      'Email' => 'pierre.martin@example.com',
      'Matricule' => 'E12347',
      'Age' => 19
  ],
  [
      'Nom' => 'Leroy',
      'Prénom' => 'Sophie',
      'Email' => 'sophie.leroy@example.com',
      'Matricule' => 'E12348',
      'Age' => 19
  ],
  [
      'Nom' => 'Moreau',
      'Prénom' => 'Paul',
      'Email' => 'paul.moreau@example.com',
      'Matricule' => 'E12349',
      'Age' => 17
  ],
  [
      'Nom' => 'Garcia',
      'Prénom' => 'Ana',
      'Email' => 'ana.garcia@example.com',
      'Matricule' => 'E12350',
      'Age' => 18
  ],
  [
      'Nom' => 'Bernard',
      'Prénom' => 'Luc',
      'Email' => 'luc.bernard@example.com',
      'Matricule' => 'E12351',
      'Age' => 20
  ],
  [
      'Nom' => 'Rousseau',
      'Prénom' => 'Émilie',
      'Email' => 'emilie.rousseau@example.com',
      'Matricule' => 'E12352',
      'Age' => 16
  ],
  [
      'Nom' => 'Petit',
      'Prénom' => 'François',
      'Email' => 'francois.petit@example.com',
      'Matricule' => 'E12353',
      'Age' => 19
  ],
  [
      'Nom' => 'Benoit',
      'Prénom' => 'Isabelle',
      'Email' => 'isabelle.benoit@example.com',
      'Matricule' => 'E12354',
      'Age' => 14
  ],
];
 */

?>