<!-- Mettons en application l’ensemble des concepts de la programmation orientée objet vus à ce jour en créant votre propre version du jeu Tic Tac Toe.
Dans ce jeu, deux joueurs s’affrontent. À tour de rôle, chacun désigne une case et y insère alternativement un signe X ou O à l’aide d’un formulaire. Le premier joueur qui parvient à aligner trois signes verticalement, horizontalement ou en diagonale gagne la partie. Si le plateau de jeu est rempli de signes sans qu’il y ait d’alignement de trois, alors la partie se termine par un match nul. -->


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

class Tour extends Joueur{

public $tourJoueur;

public function __construct(bool $tourJoueur, $joueur1, $joueur2){
    $this->tourJoueur = $tourJoueur;
    parent::__construct($joueur1, $joueur2);

}

public function tourJoueur(){


}

}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TicTacToe</title>
</head>
<body>
<h1>TicTacToe</h1>

<main>
    <article class="tictac">
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