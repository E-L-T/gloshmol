<?php
require_once('inc/init.inc.php');
$page= 'Contact';
require_once('inc/haut.inc.php');
require_once('inc/header.realisation.inc.php');	

?>

            <div id ="identificationContenu">
                <h2>Contact</h2>
                <h4>bs@gloshmol.com</h4>
                <h4>06-06-06-06-06</h4>
                <h4><a href="http://eepurl.com/mrZfT">Inscription à la newsletter</a></h4>
                <h4><a href="https://www.facebook.com/pg/BertrandSegersGloshmol/" target="_blank">Facebook</a></h4>
                <h4><a href="https://vimeo.com/user71683044" target="_blank">Vimeo</a></h4>
                <form method="get" action="#" enctype="multipart/form-data">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" required /><br><br>

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required /><br><br>

                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Votre email" required /><br><br>

                    <label for="message">Message</label><br><br>
                    <textarea id="message" name="message" rows="10" cols="30" placeholder="Votre message" required></textarea><br><br>

                    <input type="submit" value="Envoyer" name="Envoyer" />




                </form>
            </div>
        </section>
    </div>
<?php
    require_once('inc/footer.realisation.inc.php');	
?>