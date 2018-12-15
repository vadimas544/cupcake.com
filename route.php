<?php 
	if($_GET['id'] == 'catalog'){
		require_once("inc/catalog.php");
	} elseif($_GET['id'] == 'gallery'){
		require_once("inc/gallery.php");
	} elseif ($_GET['id'] == 'delivery') {
		require_once("inc/delivery.php");
	} elseif ($_GET['id'] == 'payment'){
		require_once("inc/payment.php");
	}elseif ($_GET['id'] == 'contacts'){
		require_once("inc/contacts.php");
	}elseif ($_GET['id'] == 'cake'){
		require_once("inc/cake.php");
	}elseif ($_GET['id'] == 'cake_item'){
		require_once("inc/cake_item.php");
	}
?>