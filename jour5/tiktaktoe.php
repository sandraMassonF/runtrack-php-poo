<?php
session_start();

$_SESSION['grille'] = array(
    "","","",
    "","","",
    "","","");

class Joueur{

    public $joueur1;
    public $joueur2;

    public function __construct(string $joueur1="X", string $joueur2="O"){
        $this->joueur1 = $joueur1;
        $this->joueur2 = $joueur2;
    }

}

class Tour{



}




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TiKTaKToE</title>
</head>
<body>
<h1>TiKTaKToE</h1>

<main>
    <article class="tiktak">
    <form class="form" method="post" action="">
        <input class="btn" type="submit" name="1" value="__">
        <input class="btn" type="submit" name="2" value="__">
        <input class="btn" type="submit" name="3" value="__">
        <input class="btn" type="submit" name="4" value="__">
        <input class="btn" type="submit" name="5" value="__">
        <input class="btn" type="submit" name="6" value="__">
        <input class="btn" type="submit" name="7" value="__">
        <input class="btn" type="submit" name="8" value="__">
        <input class="btn" type="submit" name="9" value="__">
    </form>
    </article>


</main>
</body>
</html>