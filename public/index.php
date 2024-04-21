
<?php

session_start();
include('/var/www/html/projet/model/function_csv.php');
require_once '../template/partiel/header.php'; // Inclure le headers
// Contenu dynamique en fonction de la page demandée
$page = isset($_GET['page']) ? $_GET['page'] : '';
switch ($page) {
    case 'Promos':
        $path = "/var/www/html/projet/data/promos.csv";
        $promos = lireAllFileCsv($path,$_SESSION ['promo_active']);
    require_once '/var/www/html/projet/template/partiel/listPromos.html.php';
        break;
    case 'Réferenciels':
        require_once '/var/www/html/projet/template/partiel/referentiel.html.php';
        break;
    case 'Présences':
        $path = "/var/www/html/projet/data/presence.csv";        
        // Récupération de la liste des étudiants
        $students = lireAllFileCsvPre($path, $_SESSION ['promo_active']);

        if(isset($_REQUEST["referentiel"]) && isset($_REQUEST["status"]) && isset($_REQUEST['date'])){
            // Récupérer les valeurs soumises pour le référentiel et le status
             $referentiel = $_POST['referentiel'];
             $status = $_POST['status']; 
             $date = $_POST['date'];
             include '/var/www/html/projet/model/filtre_model.php';
             $students = filtrerEtudiants1($students, $referentiel, $status, $date);
        }
            

        // Pagination
        $per_page = 5;
        $total_students = count($students);
        $total_pages = ceil($total_students / $per_page);
        $current_page = isset($_GET['numeroPage']) ? $_GET['numeroPage'] : 1;
        $offset = ($current_page - 1) * $per_page;
        $paginated_students = array_slice($students, $offset, $per_page);
    
        require_once '../template/partiel/presence.html.php';
        break;
        case 'Utilisateurs':
            $path = "/var/www/html/projet/data/apprenant.csv";
            $apprenants = ReadFileCsvApp($path, $_SESSION ['promo_active']);
                    // Filtrage par barre de recherche
            if (isset($_POST['search_box']) && $_POST['search_box'] !== '') {
                $search_box = $_POST['search_box'];
                $apprenants = array_filter($apprenants, function($apprenant) use ($search_box) {
                    // Filtrer par nom, prénom, email, téléphone ou tout autre champ pertinent
                    return stripos($apprenant['Nom'], $search_box) !== false ||
                    stripos($apprenant['Prenom'], $search_box) !== false ||
                    stripos($apprenant['Email'], $search_box) !== false ||
                    stripos($apprenant['Genre'], $search_box) !== false ||
                    stripos($apprenant['Téléphone'], $search_box) !== false;
                });
            }
             // Pagination
            $per_page = 5;
            $total_apprenants = count($apprenants);
            $total_pages = ceil($total_apprenants / $per_page);
            $current_page = isset($_GET['numeroPage']) ? $_GET['numeroPage'] : 1;
            $offset = ($current_page - 1) * $per_page;
            $paginated_apprenants = array_slice($apprenants, $offset, $per_page);

                require_once '../template/partiel/list-apprenant.html.php';
                break;
    default:
    echo'page non trouvé';
}

require_once '../template/partiel/footer.php'; // Inclure le footer

?>


