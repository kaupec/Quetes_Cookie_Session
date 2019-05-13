<?php require 'inc/head.php';
if (!(isset($_SESSION['name']))){
    header('location:../login.php');
}elseif ( empty($_SESSION['panier'])) {
	echo 'Votre Panier est vide';
}else {
	?>
    <section class="cookies container-fluid">
        <div class="row">
            Hello <?= $_SESSION['name'] ?>
            Panier :
			<?php foreach ($_SESSION['panier'] as $panier) { ?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/img/product-<?= $panier[0] ?>.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
			<?php } ?>
        </div>
    </section>
	<?php require 'inc/foot.php';
}?>
