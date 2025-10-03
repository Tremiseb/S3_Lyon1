
<?php require_once "header.php";?>

<h1>Bienvenue dans le jeu du pendu</h1>

<div>
	<?php 
		for($i = 0 ; $i<5 ; $i++ ){
			if($i % 2 == 0){
				echo '<p>Victoire</p>';

			}else{
					echo '<p>Défaite</p>';
			}
		}
	?>

</div>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$nomJoueur1 =  ($_POST['nom1']) ;
	$nomJoueur2 =  ($_POST['nom2']) ;

	if(!empty($nomJoueur1) && !empty($nomJoueur2) ) {
		$_SESSION['nom1'] = $nomJoueur1;
        $_SESSION['nom2'] = $nomJoueur2;

		header('Location: newPartie.php');
		exit();
	}

}
?>


<form method ="post" action = ''>
	
	<h2>Nom du joueur 1 :</h2>
	<input name="nom1" value="<?php echo (!empty($_GET['nom1']) ? $_GET['nom1'] : 'Seb'); ?>" type="text"/>

	<br>
	<br>

	<h2>Nom du joueur 2 :</h2>
	<input name="nom2" value="<?php echo (!empty($_GET['nom2']) ? $_GET['nom2'] : 'Alexa'); ?>" type="text"/>
	
	<br>
	<br>
	
	<?php 

	echo var_dump($nomJoueur1);
	echo var_dump($nomJoueur2);

	?>

	<button type="submit">
	Nouvelle partie !
	</button>


</form>


<?php require_once "footer.php";?>