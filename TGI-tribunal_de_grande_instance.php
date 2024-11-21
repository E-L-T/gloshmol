<?php
require_once('inc/init.inc.php');
$page= 'TGI, tribunal de grande instance';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'TGI-dessins_livrets-191017-w.jpg', 'horizontal', "3 livrets", ''],
    [ 'TGI-dessins_livrets-191017-29-w.jpg', 'horizontal', ''],
    [ 'TGI-dessins_livrets-191017-20-w.jpg', 'horizontal', '']
]
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>TGI, tribunal de grande instance. Dessins d'audience.</h2>
                <p>J'ai commencé à aller dessiner au TGI quand j'étais étudiant et j'ai continué en y emmenant des étudiants, en y dessinant avec eux. Le dessin au TGI revêt un caractère particulier, dans ce lieu où on n'a pas le droit de photographier. L'expérience peut être douloureuse, pour ceux qui sont convoqués et pour nous spectateurs qui nous projetons. Les étudiants sous souvent bouleversés par cette expérience. Pour moi dessiner au TGI est un apprentissage unique tant du point de vue du dessin que de la justice et de son humanité fragile.<br /> 

                <h3>Edition, 3 livres</h3>
                <p>3 volumes racontent ce regard, cet apprentissage, ces découvertes. Les dessins y sont reproduits à l'échelle 1. Exemplaires numérotés, brochés, aux éditions 18x24, 18x24 cm, imprimés et façonnés à l'atelier, Aubervilliers<br><br> - Volume I, 32 pages<br>ISBN 978-2-494939-17-2<br><br> - Volume II, 32 pages<br>ISBN 978-2-494939-18-9<br><br> - Volume III 40 pages<br>ISBN 978-2-494939-19-6<br><br />30 € les 3 volumes + fdp</p>


            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
