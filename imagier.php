<?php
session_start();
require_once('inc/init.inc.php');
$page = 'Imagier';
require_once('inc/haut.inc.php');
$imagier_active = 'active';
require_once('inc/header.index.inc.php');


?>
    
            <div id="realisations">
                
                <div class="realisation">
                    <form action="imagierTraitement.php" method="post">
                        <input type="search" placeholder="Entrez un mot-clef" name="the_search">
                        <input type="submit" value="Envoyer" />

                    </form>
                </div>

                <div class="realisation">
                </div>

                <div class="realisation"></div>

                <?php 
                    if($_SESSION){
                        $resultatImages = $_SESSION['resultatImages'];

                        foreach ($resultatImages as $resultatImage) {
                            echo "<div class='realisation'><img src='imagier/$resultatImage'/>
                            </div> ";
                        }
                        var_dump($_SESSION['resultatImages']);
                        
                    }
                ?>
                
                

            </div>    
        </section>
    </div>
<?php
require_once('inc/footer.index.inc.php');
?>