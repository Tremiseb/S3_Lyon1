<html>
<body>
<?php
header('x-iut-data:Bienvenue');
echo '<h1>Super titre</h1>';
if(isset($_GET['nombre']) && !empty($_GET['nombre'])){
echo "<ul>";
for($i = 0; $i < $_GET['nombre']; $i++){
?>
<li>Puce numéro <? ($i + 1) ?></li>
<?php
}
echo "</ul>";
} else {
?>
<p>
Aucun nombre renseigné en GET.
N'hésitez pas à ajouter la variable (int) dans l'URL.
</p>
<?php
}
?>
<form>
<input name="nombre" value="<?php echo (!empty($_GET['nombre']) ? $_GET['nombre'] : 2); ?>" type="text"/>
<button type="submit">
Envoyer
</button>
</form>
<h2>Contenu de la variable _GET</h2>
<blockquote>
<?php var_dump($_GET); ?>
</blockquote>
</body>
</html>