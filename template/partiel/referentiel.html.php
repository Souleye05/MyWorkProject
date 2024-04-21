<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Referentiel.css">
    <title>Document</title>
</head>
<body>
    
     <section class="home-section">
        <div class="title"> <!-- Cette ligne crée une division qui contient le titre de la section principale. -->
            <div class="left">Référentiel</div> <!-- Cette ligne affiche le titre de la section principale. -->
            <div class="right">Promos - List</div> <!-- Cette ligne affiche le sous-titre de la section principale. -->
        </div>
        <div class="my-content">
            <div class="images-wrapper">
            <?php  
                    $path = "/var/www/html/projet/data/Referentiel.csv";
                    $students = lireAllFileCsvRef($path, $_SESSION ['promo_active']);
                    ?>
                    <?php foreach ($students as $Referentiel):
                        ?>
                <div class="ref1">                    
                        
                    <span>...</span>
                    <img src="../public/images/classe.jpeg" alt="photo">
                    <p><?=$Referentiel['referentiel']?></p>
                    <h6><a href="/var/www/html/projet/template/partiel/list-apprenant.html.php"><?=$Referentiel['status']?></a></h6>
                </div>
                <?php endforeach ?>
            </div>
            <div class="formulaire">
                <form action="">
                    <h5>Nouveau Réferentiel</h5>
                    <div class="group">
                        <div>
                            <p>libelle</p>
                            <input type="text" placeholder="Entrer le libelle">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div>
                            <p>Description</p>
                            <input type="text" name="" id="" placeholder="Entrer la description">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div> 
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </div>

     </section>


</body>
</html>