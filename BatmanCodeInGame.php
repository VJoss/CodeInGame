<?php
/**
 * Code In Game Shadows Of the Knight Ep1 
 **/

// $W: width of the building.
// $H: height of the building.
fscanf(STDIN, "%d %d", $W, $H);
// $N: maximum number of turns before game over.
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d %d", $X0, $Y0);
// game loop

// Initialiser les variables pour stocker la direction précédente et la position actuelle de Batman

$currentHeight = floor($Y0 / 2);
$currentWidth = floor($X0 / 2);

$lastPositionX = null;
$lastPositionY = null;
// Boucle de jeu
while (TRUE) {
    // Lire la direction de la bombe
    fscanf(STDIN, "%s", $bombDir);
    $lastPositionX = &$X0;
    $lastPositionY = &$XY;
    // Ajuster la position de Batman en fonction de la direction
    switch ($bombDir) {
        case "U":
            $Y0 = floor(abs($H - $Y0)/2)*-1;
            break;
        case "UR":
            $Y0 = floor(abs($H - $Y0)/2)*-1;
            $X0 = floor(abs($W - $X0)/2);
            break;
        case "R":
            $X0 = floor(abs($W - $X0)/2);
            break;
        case "DR":
            $Y0 = floor(abs($H - $Y0)/2);
            $X0 = floor(abs($W - $X0)/2);
            break;
        case "D":
            $Y0 = floor(abs($H - $Y0)/2);
            break;
        case "DL":
            $Y0 = floor(abs($H - $Y0)/2);
            $X0 = floor(abs($W - $X0)/2)*-1;
            break;
        case "L":
            $X0 = floor(abs($W - $X0)/2)*-1;
            break;
        case "UL":
            $Y0 = floor(abs($H - $Y0)/2)*-1;
            $X0 = floor(abs($W - $X0)/2)*-1;
            break;
    }


    // Afficher la nouvelle position de Batman
    echo("$currentWidth $currentHeight\n");
}
