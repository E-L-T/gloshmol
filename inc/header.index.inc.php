<!-- <div class="section group">
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
        <div class="col span_1_of_12"></div>
    </div> -->
    
    <div class="conteneur">
        <div id="iconeMenu"><a href="#"><img src="img/burger.png" /></a></div>
        <div id="iconeCroix"><a href="#"><img src="img/cross.png" /></a></div>
        <header>
            <div id="logo"><a href="<?= RACINE_SITE ?>index.php" id="lienLogo">Bertrand Segers</a></div> 
        </header>

        <section>
            <aside> 
                <nav>
                    <div id="menuRealisations">
                        <a href="<?= RACINE_SITE ?>index.php" class="menu <?= $realisations_active ?>">Réalisations</a>
                    </div>
                    
                    <div id="imagier"><a href="<?= RACINE_SITE ?>imagier.php" class="menu <?= $imagier_active ?>">Imagier</a></div> 

                    <div id="achat"><a href="<?= RACINE_SITE ?>achat.php" class="menu <?= $achat_active ?>">Achat</a></div>
                    
                    <div id="menuAPropos">
                        <a href="<?= RACINE_SITE ?>apropos.php" class="menu <?= $a_propos_active ?>">A propos</a>
                    </div>

                    <div><a href="<?= RACINE_SITE ?>contact.php" class="menu <?= $contact_active ?>">Contact</a></div>    
                </nav>
            </aside>
            