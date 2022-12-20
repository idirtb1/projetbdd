<?php  

$connexion=mysqli_connect("localhost", "root", "root");
mysqli_select_db($connexion,"projet");


if (!$connexion) {
	echo "Erreur";
	exit();
}
?>