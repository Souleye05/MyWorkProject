<style>

                /*------------------------ presences ------------------------*/
  .home-section {
    position: relative;
    margin: 5px .7rem 2px 40rem;
    padding: 0;
    top: 80px;
    right: 10px;
  
  }
   .title {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: var(--light-bg);
        padding: 2rem 0rem;
        color: var(--black);
        font-size: 2rem;
    }
    
    /* Définition des styles pour la partie gauche du titre dans la section principale */
    .title .left {
        font-weight: bold;
        color: black;
    }
    
    /* Définition des styles pour la partie droite du titre dans la section principale */
    .title .right {
        font-size: 1.5rem;
        text-align: end;
        }
            section .liste-presences{
            height: 55vh;
            width: 75%;
            background-color: white;
            position: relative;
            top: 7%;
            left: 0%;
            display: flex;
            border-radius: 0.5em;
            flex-wrap: wrap;
            justify-content: center;
            overflow: hidden;
        }

        .zone1 {
            height: 10%;
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
            top: 1.5%;
            left: 0.5%;
        }
        #statut {
            height: 75%;
            width: 8%;
            border-radius: 0.5em;
            position: absolute;
            left: 1%;
            background-color: white;
        }

        #ref {
            height: 75%;
            width: 15%;
            border-radius: 0.5em;
            position: absolute;
            left: 10%;
            background-color: white;
        }
        #datechoice {
            height: 75%;
            width: 15%;
            border-radius: 0.5em;
            position: absolute;
            left: 26%;
            border: 1px solid gray;
            background-color: white;
            color: black;
            font-size: 0.8rem;
            padding: 1em;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        #refresh {
            height: 75%;
            width: 10%;
            border-radius: 0.5em;
            position: absolute;
            left: 43%;
            border: none;
            background-color: rgb(0, 173, 179);
            color: white;
            font-size: 0.8rem;
            font-weight: 700;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            cursor: pointer;
        }

        .tableau {
            position: absolute;
            top: 27%;
            height: 75%;
            width: 97%;
            font-size: 12px;
            border-radius: 0.7em;
        }

        .footer-pres {
            height: 10%;
            width: 97%;
            display: flex;
            align-items: center;
            position: absolute;
            top: 91%;
            flex-direction: row;
            font-size: .7em;
        }

        #itemsperpage {
            border: none;
            background-color: transparent;
            font-size: 1rem;
            position: relative;
            left: 1%;
            flex-wrap: wrap;
            overflow: hidden;
        }
        .navigation {
            
            background-color: transparent;
            font-size: 1rem;
            position: relative;
            display: flex;
            left: 55%;
            height: 100%;
            width: 33%;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
            font-size: 1em;
        }
        .navigation>button {
            height: 1.1rem;
            width: 1.1rem;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .navigation> i {
            height: .7em;
            width: .7em;
            font-weight: 100;
        }

        table {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 12px;
            border-collapse: collapse;
        }

        table tr:nth-child(1) {
            height: 3em;
            background-color: #f7faff;
            border-radius: 0.9em;
        }

        table tr {
        
            border-bottom: .1em solid rgba(128, 128, 128, 0.103);
        }

        tr th:nth-child(7) {
            width: 10%;
            text-align: center;
        }

        tr td:nth-child(1) {
            
            height: 2.4rem;
            width: 18%;
            text-align: center;
            
        }

        tr td:nth-child(2) {
            text-align: center;
            height: 2.4rem;
            width: 10%;
            
        }

        tr td:nth-child(3) {
            text-align: center;
            height: 2.4rem;
            width: 19%;
            
        }

        tr td:nth-child(4) {
            text-align: center;
            height: 2.4rem;
            width: 10%;
            
        }

        tr td:nth-child(5) {
            text-align: center;
            height: 2.4rem;
            width: 10%;
            
        }

        tr td:nth-child(6) {
            text-align: center;
            height: 2.4rem;
            width: 10%;
            
        }

        tr td:nth-child(7) {
            color: rgb(87, 172, 8);
            height: 2.4rem;
            width: 100%;
            border-radius: 0.3em;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        tr td p {
            background-color: rgb(230, 230, 230);
            height: 60%;
            width: 7em;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 0.3em;
        }
    </style>
</head>
<body>
<section class="home-section"> <!-- Cette ligne crée la section principale de la page web. -->
            <div class="title"> <!-- Cette ligne crée une division qui contient le titre de la section principale. -->
                <div class="left">Promotions</div> <!-- Cette ligne affiche le titre de la section principale. -->
                <div class="right">Promos - List</div> <!-- Cette ligne affiche le sous-titre de la section principale. -->
            </div>
         <section class="liste-presences">
        <div class="zone1">
            <form action="" method="post">
            <input type="hidden" name="recherche" value="filter">
            <select name="status" id="status">
            <option value="status">Statut</option>
            <option value="Present" <?php if(isset($_POST['status']) && $_POST['status'] === 'Present') echo 'selected'; ?>>Présent</option>
            <option value="Absent" <?php if(isset($_POST['status']) && $_POST['status'] === 'Absent') echo 'selected'; ?>>Absent</option>
            </select>

            <input type="hidden" name="page" value="1">
            <select name="referentiel" id="ref">
            <option value="">Tous les référentiels</option>
            <option value="Dev Web/Mobile" <?php if(isset($_POST['referentiel']) && $_POST['referentiel'] === 'Dev Web/Mobile') echo 'selected'; ?>>Dev Web/Mobile</option>
            <option value="Ref Dig" <?php if(isset($_POST['referentiel']) && $_POST['referentiel'] === 'Ref Dig') echo 'selected'; ?>>Ref Dig</option>
            <option value="Dev Data" <?php if(isset($_POST['referentiel']) && $_POST['referentiel'] === 'Dev Data') echo 'selected'; ?>>Dev Data</option>
            </select>

            <input style="font-size: 1.5em; color: teal" type="text" id="datechoice" name="date" value="<?=date("Y-m-d");?>">
            <button id="refresh" type="submit">Rafraîchir</button>
            <button id="reset" type="reset" name="" value="">Reset</button>
            </form>
        </div>
    <div class="tableau">
      <?php
      // Affichage des étudiants paginés
      echo "<table>";
      echo "<tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Téléphone</th><th>Référentiel</th><th>Heure d'arrivée</th><th>Status</th></tr>";
      foreach ($paginated_students as $student) {
          echo "<tr>";
          echo "<td>" . $student['matricule'] . "</td>";
          echo "<td>" . $student['nom'] . "</td>";
          echo "<td>" . $student['prenom'] . "</td>";
          echo "<td>" . $student['telephone'] . "</td>";
          echo "<td>" . $student['referentiel'] . "</td>";
          echo "<td>" . $student['Heurearrivée'] . "</td>";
          echo "<td>" . $student['status'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";
  
      // Liens de pagination
      echo "<div class='pagination'>";
      for ($i = 1; $i <= $total_pages; $i++) {
          echo "<a href='index.php?page=Présences&numeroPage=$i'>$i</a> ";
      }
      echo "</div>";
      ?>
    </div>
</section>


    <div class="footer-pres">
        <span style="font-weight: 100; color: rgb(54, 54, 54); position: relative; left: 0.1%;">Items per page: </span>
        <select name="itemsperpage" id="itemsperpage">
            <option value="1">10</option>
            <option value="2">20</option?page=>
            <option value="3">30</option>
        </select>

        <div class="navigation">
            <button><a href="index.php?page=Présences&numeroPage="><i class="fa-solid fa-chevron-left"></i></a></button>
            <button><a href="index.php?page=Présences&numeroPage=<?php echo $current_page - 1; ?>"><i class="fa-solid fa-chevron-left"></i></a></button>
            <button><a href="index.php?page=Présences&numeroPage=<?php echo $current_page + 1; ?>"><i class="fa-solid fa-chevron-right"></i></a></button>
            <button><a href="?page=<?php echo $total_pages; ?>"><i class="fa-solid fa-chevron-right"></i></a></button>
        </div>
    </div>
        </section>
    </section>
</body>
</html>

