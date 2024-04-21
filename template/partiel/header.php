<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/list-promo.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/creer-promo.css">
    <link rel="stylesheet" href="css/createPromo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/d2ba3c872c.js" crossorigin="anonymous"></script>
</head>
<body>
    <input type="checkbox" id="menu_checkbox"> <!-- Cette ligne crée une case à cocher qui est utilisée pour contrôler l'état du menu latéral. -->
    <header class="header"> <!-- Cette ligne commence la section d'en-tête de la page web. -->
        <div class="flex-left"> <!-- Cette ligne crée une division qui contient les éléments situés à gauche de l'en-tête. -->
            <label for="menu_checkbox"> <!-- Cette ligne crée une étiquette pour la case à cocher "menu_checkbox". -->
                <div><i class="fa fa-bars" aria-hidden="true"></i></div> <!-- Cette ligne crée une icône de barres qui est utilisée comme bouton pour ouvrir le menu latéral. -->
                <div><i class="fa-solid fa-circle-arrow-right"></i></div> <!-- Cette ligne crée une icône de flèche qui est utilisée comme bouton pour fermer le menu latéral. -->
            </label>
            <div class="icons"> <!-- Cette ligne crée une division qui contient les icônes de l'en-tête. -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">...</svg> <!-- Cette ligne crée une icône de grille qui est utilisée pour ouvrir le menu de la grille. -->
                </div>
            </div>
            <form action="#" method="post" class="search-form"> <!-- Cette ligne crée un formulaire de recherche. -->
                <input type="text" name="search_box" required placeholder="Rechercher par matricule" maxlength="100"> <!-- Cette ligne crée une boîte de texte pour la recherche. -->
                <button type="submit" class="fas fa-search"></button> <!-- Cette ligne crée un bouton de soumission pour le formulaire de recherche. -->
            </form>
        </div>
        <div class="flex-right"> <!-- Cette ligne crée une division qui contient les éléments situés à droite de l'en-tête. -->
            <input type="date" name="dateofbirth" id="dateofbirth" value="<?=date("Y-m-d");?>"> <!-- Cette ligne crée une boîte de sélection de date. -->
            <div class="profil"> <!-- Cette ligne crée une division qui contient les informations de profil. -->
                <img src="../public/images/profile.jpeg" class="image" alt=""> <!-- Cette ligne affiche l'image de profil. -->
                <div class="info"> <!-- Cette ligne crée une division qui contient les informations de profil. -->
                    <p>Souleye Dieng</p> <!-- Cette ligne affiche le nom du profil. -->
                    <small>Admin <i class="fa fa-angle-down" aria-hidden="true"></i></small> <!-- Cette ligne affiche le rôle du profil et une icône de flèche vers le bas pour indiquer un menu déroulant. -->
                    <span>
                        <input type="submit" value="déconnecter" style="background: teal; color: white; width: 95px; font-size: 12px; border-radius: 5px">
                    </span>
                </div>
            </div>
        </div>
    </header>
    <div class="side-bar"> <!-- Cette ligne crée la barre latérale. -->
        <div class="profile"> <!-- Cette ligne crée une division qui contient le profil de la barre latérale. -->
            <img src="../public/images/sonatel.jpg" class="image" alt="sonatel's logo"> <!-- Cette ligne affiche l'image du profil. -->
            <h3 class="menu">- MENU</h3> <!-- Cette ligne affiche le titre du menu. -->
        </div>
        <nav class="navbar"> <!-- Cette ligne crée la navigation de la barre latérale. -->
            <a href="#"><i class="fa fa-align-right" aria-hidden="true"></i><span>Dashboard</span></a> <!-- Cette ligne crée un lien vers le tableau de bord. -->
            <a href="index.php?page=Promos"><i class="fa fa-list-alt" aria-hidden="true"></i></i><span>Promos</span></a> <!-- Cette ligne crée un lien vers la page des promotions. -->
            <a href="index.php?page=Réferenciels"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></i><span>Réferenciels</span></a> <!-- Cette ligne crée un lien vers la page des référentiels. -->
            <a href="index.php?page=Utilisateurs"><i class="fa fa-user-circle-o" aria-hidden="true"></i></i><span>Utilisateurs</span></a> <!-- Cette ligne crée un lien vers la page des utilisateurs. -->
            <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></i><span>Visiteurs</span></a> <!-- Cette ligne crée un lien vers la page des visiteurs. -->
            <a href="index.php?page=Présences"><i class="fa fa-user-circle-o" aria-hidden="true"></i></i><span>Présences</span></a> <!-- Cette ligne crée un lien vers la page des préférences. -->
            <a href="#"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></i><span>Evénements</span></a> <!-- Cette ligne crée un lien vers la page des événements. -->
        </nav>
    </div>



    </body>

    </html>