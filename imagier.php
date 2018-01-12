<?php
require_once('inc/init.inc.php');
$page= 'Imagier';
require_once('inc/haut.inc.php');
$realisations_active = 'active'	;
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
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
                
                <div class="realisation">
                    Image1
                </div>

                <div class="realisation">
                    Image2
                </div>

                <div class="realisation">
                    Image3
                </div>

                <div class="realisation">
                    Image4
                </div>

                <div class="realisation">
                    Image5
                </div>

                <div class="realisation">
                    Image6
                </div>

            </div>    
        </section>
    </div>
<?php
require_once('inc/footer.index.inc.php');
?>