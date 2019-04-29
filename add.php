/**
* Created by PhpStorm.
* User: julien
* Date: 2019-04-17
* Time: 12:06
*/
<?php
    session_start();
	if (empty($_SESSION['name'])){
	header('location:/login.php');
}else {
	    $_SESSION['panier'][]=[$_GET['add_to_cart']];
	    header('location:/cart.php');
	    }
	
?>