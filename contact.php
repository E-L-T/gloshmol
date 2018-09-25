<?php
require_once('inc/init.inc.php');
$page= 'Contact';
require_once('inc/haut.inc.php');
$realisations_active = '';
$achat_active = '';
$a_propos_active = '';
$contact_active = 'active';
require_once('inc/header.realisation.inc.php');

if(isset($_POST['Envoyer'])){
    $to = "ericleroyterquem@yahoo.fr"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['prenom'];
    $last_name = $_POST['nom'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

            <div id ="identificationContenu">
                <h2>Contact</h2>
                <h4>bs@gloshmol.com</h4>
                <h4>06-06-06-06-06</h4>
                <h4><a href="http://eepurl.com/mrZfT">Inscription à la newsletter</a></h4>
                <h4><a href="https://www.facebook.com/pg/BertrandSegersGloshmol/" target="_blank">Facebook</a></h4>
                <h4><a href="https://vimeo.com/user71683044" target="_blank">Vimeo</a></h4>
                <form method="post" action="#" enctype="multipart/form-data">
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