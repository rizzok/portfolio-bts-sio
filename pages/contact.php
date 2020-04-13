<?php
session_start();

$page_title = "Contact - Portfolio de Kévin RIZZO | BTS SIO option SLAM";
$page_description = "Contact - Kévin RIZZO, étudiant en BTS SIO SLAM";
$navbar_section = 'contact';

require '../inc/header.php';
?>

		<div id="page-top-section" class="p-3 p-md-5 text-center">
            <h1 class="display-4 font-weight-normal text-white">Me contacter</h1>
        </div>

		<div class="container my-5">
			<div class="row">
				<div class="col-lg-9 m-auto">

					<?php if(isset($_SESSION['errors'])): ?>
						<div class="alert alert-danger text-center p-3">
							<?= implode('<br>', $_SESSION['errors']); ?>
						</div>
					<?php endif; ?>
					<?php if(isset($_SESSION['success'])): ?>
						<div class="alert alert-success text-center p-3">
							Votre message a bien été envoyé
						</div>
					<?php endif; ?>

					<form action="post_contact.php" method="POST">
						<div class="form-group">
							<input type="email" name="email" placeholder="Votre e-mail" class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" required/>
						</div>
						<div class="form-group">
							<input type="text" name="object" placeholder="Objet de votre demande" class="form-control" value="<?= isset($_SESSION['inputs']['object']) ? $_SESSION['inputs']['object'] : ''; ?>" required/>
						</div>
						<div class="form-group">
							<textarea name="message" placeholder="Votre demande" class="form-control" rows="3" required><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary">Envoyer</button>
						</div>
					</form>

                </div>
			</div>
			<div class="row my-5">
				<div class="col-lg-9 m-auto text-center">
					<p>Vous pouvez également me contacter directement par e-mail : <a href="mailto:contact@ostyl.fr">contact@ostyl.fr</a></p>
				</div>
			</div>
		</div>
		
<?php
require '../inc/footer.php';
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>