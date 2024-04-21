<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présences</title>
    <link rel="stylesheet" href="css/list-promos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
    </style>
</head>
<body>

<section class="home-section"> <!-- Cette ligne crée la section principale de la page web. -->
            <div class="title"> <!-- Cette ligne crée une division qui contient le titre de la section principale. -->
                <div class="left">Promotions</div> <!-- Cette ligne affiche le titre de la section principale. -->
                <div class="right">Promos - List</div> <!-- Cette ligne affiche le sous-titre de la section principale. -->
            </div>
    <section class="sect1">
        <div class="container">
            <div class="titre">
                <p>Liste des Promotions <span style="color: #009087; font-size: 20px"></span></p>
                <input type="search" id="searchbar" placeholder="Rechercher ici...">
                <i class="fasearch fa-solid fa-magnifying-glass fa-xs" style="color: #009087;"></i>
                <button class="nouvelle">+ Nouvelle</button>
            </div>
            <div style="width: 100%";>
    <div class="tabpromos">
        <table>
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
        
            // Appel de la fonction lirePromosCSV
                $promos = lireAllFileCsv($path, $Id);
                $_SESSION ['promo_active'] = $_POST['promo'] ?? $_SESSION ['promo_active'];
                foreach ($promos as $promo): 
                    // Vérifiez si la promotion est actuellement active
                    //$is_active = $promo['promo_id'] === $promo_actif; 
                    
                ?>
                    <tr>
                        <td style="display: flex; align-items: center; justify-content: center;">
                            <img style="height: 45%; width: 10%;" src="./images/image-removebg-preview.png" alt="">
                            <?php echo htmlspecialchars($promo['libelle']); ?>
                        </td>
                        <td style="text-align: center;"><?php echo htmlspecialchars($promo['debut']); ?></td>
                        <td style="text-align: center;"><?php echo htmlspecialchars($promo['fin']); ?></td>
                        <td style="text-align: center;"><?php if($promo['promo_id']==$_SESSION['promo_active']){echo 'activé';}else{echo 'desactivé';} ?></td>

                        <td>
                            <form action="" method="post">
                                <input type="checkbox" name="promo" value="<?=$promo['promo_id']?>" <?php if($promo['promo_id']==$_SESSION['promo_active']){echo 'checked';} ?>>
                                <!-- Input de type radio pour activer/désactiver la promotion -->
                                <input type="submit" name="promo" value="<?=$promo['promo_id']?>"
                                style="background: transparent;position:absolute; left: 127.5rem; border:none; cursor:pointer;font-size: 30px; color: transparent;                                        ">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

                
            
        
        </div>
    </section>
    </section>
</body>
</html>