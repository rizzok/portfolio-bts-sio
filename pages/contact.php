<?php
$page_title = "Contact - Portfolio de Kévin RIZZO | BTS SIO option SLAM";
$page_description = "Contact - Kévin RIZZO, étudiant en BTS SIO SLAM";
$navbar_section = 'contact';

require '../inc/header.php';

// TEST DB QUERY
$req = $db->prepare('SELECT * FROM contact');
$req->execute();


?>

<div id="page-top-section" class="p-3 p-md-5 text-center">
            <h1 class="display-4 font-weight-normal text-white">Contact</h1>
        </div>

        <div class="breadcrumb-container d-none d-sm-block">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-item-unactive">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>

		<div class="container">
			<div class="row">
				<div class="col-lg-9 m-auto">

				<table class="table">
                    <tr>
                        <th>ID</th>
                        <th>testvarchar</th>
                        <th>testint</th>
                    </tr>


            <?php
            // affichage des données dans un tableau html
            while ($donnees = $req->fetch()) {
                echo '<tr>
                        <td>'.$donnees['id'].'</td>
                        <td>'.$donnees['testvarchar'].'</td>
                        <td>'.$donnees['testint'].'</td>
                    </tr>';
            }
            ?>


                </table>

                </div>
            </div>
        </div>

<?php require '../inc/footer.php';?>