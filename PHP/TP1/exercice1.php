<html>
<body>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>IUT Lyon1</title>
</head>

<?php

header('x-iut-data:Bienvenue');
$nom = ($_GET['nom']);
$nombre = ($_GET['nombre']);
$cesar = ($_GET['cesar']);
$lesupernom = toCesar($cesar);

echo '<h1>Bonjour ' . strtoupper($nom).  '</h1>';
echo "<h2> Voici le mot chiffré : $lesupernom </h2>";

?>

<ul>
<?php

if($nombre<10){
    for($i = 1 ; $i <= $nombre ; $i++){
        
            echo'<li>' .$i. '</li>';
        }

    } else {
        echo 'ya trop de ligne à afficher trop';
    };

?>
</ul>

<form>
<input name="nom" value="<?php echo (!empty($_GET['nom']) ? $_GET['nom'] : Seb); ?>" type="text"/>
<button type="submit">
Envoyer
</button>
<br>
<br>
<input name="nombre" value="<?php echo (!empty($_GET['nombre']) ? $_GET['nombre'] : 3); ?>" type="int"/>
<button type="submit">
Envoyer
</button>
<br>
<br>
<input name="cesar" value="<?php echo (!empty($_GET['cesar']) ? $_GET['cesar'] : lemot); ?>" type="text"/>
<button type="submit">
Envoyer
</button>

<?php
function toCesar($cesar){
    $res;

    for ($i=0;$i<strlen($cesar);$i++) {

        $ascii = ord($cesar[$i]);
        if($ascii == 90) { //uppercase bound
            $ascii = 65; //reset back to 'A' 
            } 
        else if($ascii == 122) { //lowercase bound
            $ascii = 97; //reset back to 'a' 
            } 
        else {
            $ascii+=3;
        }
        $res =  $res . $newstring[$i] = chr($ascii);
        
    }
    return $res;
};
?>

</body>
</html>