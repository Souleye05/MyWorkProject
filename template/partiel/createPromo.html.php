
        <style>
            
        
        </style>
    </head>
    <body>
    <section class="home-section"> <!-- Cette ligne crée la section principale de la page web. -->

            <div class="title"> <!-- Cette ligne crée une division qui contient le titre de la section principale. -->
                <div class="left">Promotions</div> <!-- Cette ligne affiche le titre de la section principale. -->
                <div class="right">Promos - List</div> <!-- Cette ligne affiche le sous-titre de la section principale. -->
            </div>
        <section id="section">
            <div class="container">
        <form action="../template/partiel/createPromo.html.php" method="POST">
    <div class="input-box">
        <h5>Libelle</h5>
        <input type="text" placeholder="Entrer le Libelle*" required> 
    </div>
    <div class="box">
        <div class="input-box2">
           <h5>Date Début</h5>
            <input type="datetime" placeholder="MM/DD/YYYY*" required>
            <i class="fa-solid fa-calendar-day"></i>
        </div>
        <div class="input-box1">
            <h5> Date Fin</h5>
            <input type="datetime" placeholder="MM/DD/YYYY*" required>
            <i class="fa-solid fa-calendar-day"></i> 
        </div>           
    </div>
    <div class="btn">
        <button class="btn1" type="submit">Ajouter Référentiel(s)</button>
        <button class="btn2" type="submit">Créer Promotion</button>
    </div>
    </form>
                <div class="footer-pres">
                    <span style="font-weight: 100; color: rgb(54, 54, 54); position: relative; left: 0.1%;">Items per page: </span>
                        <select name="itemsperpage" id="itemsperpage">
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">30</option>
                        </select>

                        <div class="navigation">
                            <span id="numview">1 - 10 of 100</span>
                            <button>I<i class="fa-solid fa-chevron-left"></i></button>
                            <button><i class="fa-solid fa-chevron-left"></i></button>

                            <button><i class="fa-solid fa-chevron-right"></i></button>
                            <button><i class="fa-solid fa-chevron-right"></i>I</button>
                        </div>
                </div>
            </div>
        </section>
        </section>
    </body>
    </html>