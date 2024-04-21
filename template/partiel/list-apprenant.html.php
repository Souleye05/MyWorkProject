
<style>
        
   
      
        /*-------------------------------------------------*/
        .home-section {
           
    position: relative;
    margin: 5px .7rem 2px 40rem;
    padding: 0;
    top: 80px;
    right: 10px;
    
  
  }


        .list-app {
            height: 70vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            top: 15%;
        }

        .div1 {
            background-color: white;
            height: 8%;
            width: 100%;
            border-radius: .9em;
            position: relative;
            top: 6%;
            display: flex;
            align-items: center;
            font-weight: 400;
            font-size: .4em !important;
        }
        .div2 {
            background-color: white;
            height: 84%;
            width: 100%;
            border-radius: .5em;
            position: relative;
            top: 8%;
            display: flex;
            flex-direction: column;
        }

        .etape1 {
            z-index: 2;
            height: 7.5%;
            position: relative;
            top: 1.5%;
            margin-left: .9%;
            display: flex;
            align-items: center;

            span {
                padding: 1em;
                background-color: #009087;
                border-radius: 50%;
                height: 90%;
                width: 3.2%;
                text-align: center;
                color: white;
                font-size: .8em;
                font-weight: 700;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        }
    

        .bar {
            height: 92%;
            width: 0;
            border: .010em solid gray;
            position: absolute;
            left: 2.4%;
            top: 2%;
            z-index: 1;
        }
        .div3 {
            width: 95%;
            height: 85%;
            position: relative;
            left: 4%;
            top: 2%;
            display: flex;
            flex-direction: column;
        }
        .details {
            height: 12%;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .recherch-form {
  width: 100%;
  background-color: #eee;
  padding: 1rem 1.5rem;
  display: flex;
}

/* Définition des styles pour l'entrée de texte dans le formulaire de recherche */
 .recherch-form input {
  width: 100%;
  font-size: 1.8rem;
  color: black;
  background: none;
}

/* Définition des styles pour le bouton de soumission dans le formulaire de recherche */
.recherch-form button {
  background: none;
  font-size: 2rem;
  cursor: pointer;
  color: #008f89;
}

/* Définition des styles pour le bouton de soumission dans le formulaire de recherche lorsqu'il est survolé */
 .recherch-form button:hover {
  color: var(--main-color);
}
        .buttons {
            height: 80%;
            width: 40%;
            position: relative;
            left: 45.5%;
            display: flex;
            align-items: center;
            gap: .4em;
        }
        .buttons>a:nth-child(1) {
            background-color: #009087;
            height: 80%;
            width: 15%;
            border-radius: .4em;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: .6em;
            font-weight: 700;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }
        .buttons>a:nth-child(2) {
            background-color: #ff8700;
            height: 80%;
            width: 27%;
            border-radius: .4em;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: .6em;
            font-weight: 700;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }
        .buttons>a:nth-child(3) {
            background-color: #0180a9;
            height: 80%;
            width: 27%;
            border-radius: .4em;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: .6em;
            font-weight: 700;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }
        .buttons>a:nth-child(4) {
            background-color: #0f45a7;
            height: 80%;
            width: 27%;
            border-radius: .4em;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: .6em;
            font-weight: 700;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }

        .tab-app {
            width: 100%;
            height: 90%;
        }
        table {
            width: 100%;
            height: 100%;
            border-collapse: separate;
            font-size: 1.8em;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        thead>tr {
            background-color: aliceblue;
        }
        tr>th {
            height: 3em;
        }
        thead>tr:nth-child(1) {
            text-align: center;
        }
        #entete>th:nth-child(7) {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        td {
            text-align: center;
        }
        td>div>img {
            height: 2.5em;
            background-color: #009087;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    
               <!--  ======================= Contetenue à intégrér ======================= --> 
        <section class="home-section"> <!-- Cette ligne crée la section principale de la page web. -->
   
    <div class="list-app">
                <div class="div1">
                    <p style="font-size: 1rem; padding: 1em;">Promotion: <span style="color: #009087; font-size: 1.1rem;">Promotion 6</span></p>
                    <p style="font-size: 1rem; padding: 1em; position: relative; left: 60%;">Référentiel: 
                        <span>
                                <?php 
                                $ID = isset($_SESSION ['promo_active']) ? $_SESSION ['promo_active']: null; 
                                $path = "/var/www/html/projet/data/Referentiel.csv";
                                $Referentiel = lireAllFileCsvRef($path, $ID);
                                if($ID != null){
                                    $apprenants = ReadFileCsvApp($path, $ID);?>
                            <form action="" method="post">
                                <select name="referentiel" id="referentiel" onchange="this.form.submit()" style="color: #009087; font-size: 1.1rem;">
                                <!-- Utilisez l'attribut onchange pour soumettre le formulaire lorsque la sélection change -->
                                <?php foreach($Referentiel as $referentiel): 
                                    ?>
                                    <option value="<?= $referentiel['referentiel'] ?>" <?php if(isset($_POST['referentiel']) && $_POST['referentiel'] == $referentiel['referentiel']) echo 'selected'; ?>>
                                        <?= $referentiel['referentiel'] ?>
                                    </option>
                                <?php endforeach; ?>
                                </select>
                            </form>
                                <?php }?>
                            
                        </span>
                    </p>
                </div>
                <div class="div2">
                    <div class="etape1">
                        <Span>1</Span><p style=" padding: 1em; font-size: .9em; font-weight: 700; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Apprenants</p>
                    </div>
                    <div class="bar"></div>
                    <div class="div3">
                        <div class="details">
                            <span style="font-size: .85em; font-weight: 300; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Liste Des Apprenants <span style="color: #009087;">(50)</span></span>
                            <div class="buttons">
                                <a href="#">+ Nouveau</a>
                                <a href="#">Insertion en masse</a>
                                <a href="#">Fichier model</a>
                                <a href="#">Liste des exclus</a>
                            </div>
                        </div>
                        <form action="#" method="post" class="recherch-form"> 
                        <input type="hidden" name="pag" value="2"><!-- Cette ligne crée un formulaire de recherche. -->
                     <input type="text" name="search_box" required placeholder="Filtrer" maxlength="100"> <!-- Cette ligne crée une boîte de texte pour la recherche. -->
                     <button type="submit" class="fas fa-search"></button> <!-- Cette ligne crée un bouton de soumission pour le formulaire de recherche. -->
                </form>
        <div class="logo1" >
            <img src="../images/image.png" alt="logo">
        </div>
            <div class="tab-app">

        <?php                        
        $path = "/var/www/html/projet/data/apprenant.csv";
        $apprenants = ReadFileCsvApp($path, $_SESSION ['promo_active']);               
    // Affichage des apprenants paginés
    echo "<table>";
    echo "<tr><th>Image</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Genre</th><th>Téléphone</th><th>Action</th></tr>";
    foreach ($paginated_apprenants  as $apprenant) {
        echo "<tr>";
        echo "<td>" . $apprenant[''] . "</td>";
        echo "<td>" . $apprenant['Nom'] . "</td>";
        echo "<td>" . $apprenant['Prenom'] . "</td>";
        echo "<td>" . $apprenant['Email'] . "</td>";
        echo "<td>" . $apprenant['Genre'] . "</td>";
        echo "<td>" . $apprenant['Telephone'] . "</td>";
        echo "<td>" . $apprenant['Action'] . "</td>";
        echo "</tr>";
        
    }
    echo "</table>";

    // Liens de pagination
    echo "<div class='pagination'>";
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='index.php?page=Utilisateurs&numeroPage=$i'>$i</a>";
    }
    echo "</div>";
                        ?>
                      
            </div>
    </div>
        </section>

</body>
</html>