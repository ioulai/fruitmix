<?php
   	include_once('class/autoload.php');

  	$pageAdminProduit = new admin_produit();
    $pageAdminProduit->barre_verticale();
    $pageAdminProduit->entete();
  	$pageAdminProduit->affiche_page();
?>
