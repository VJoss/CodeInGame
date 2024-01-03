<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $W: width of the building.
// $H: height of the building.
fscanf(STDIN, "%d %d", $W, $H);
// $N: maximum number of turns before game over.
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d %d", $X0, $Y0);
// game loop

// Initialiser les variables pour stocker la direction précédente et la position actuelle de Batman
$maxX = $W;
$maxY = $H;
$minX = 0;
$minY = 0;

// Boucle de jeu
while (TRUE) {
    // Lire la direction de la bombe
    fscanf(STDIN, "%s", $bombDir);

    // Ajuster la position de Batman en fonction de la direction
    switch ($bombDir) {
        case "U":
            $maxY = $Y0;
            $Y0 = floor(($minY + $maxY) / 2);
            break;
        case "UR":
            $maxY = $Y0;
            $minX = $X0;
            $Y0 = floor(($minY + $maxY) / 2);
            $X0 = floor(($minX + $maxX) / 2);
            break;
        case "R":
            $minX = $X0;
            $X0 = floor(($minX + $maxX) / 2);
            break;
        case "DR":
            $minY = $Y0;
            $minX = $X0;
            $Y0 = floor(($minY + $maxY) / 2);
            $X0 = floor(($minX + $maxX) / 2);
            break;
        case "D":
            $minY = $Y0;
            $Y0 = floor(($minY + $maxY) / 2);
            break;
        case "DL":
            $minY = $Y0;
            $maxX = $X0;
            $Y0 = floor(($minY + $maxY) / 2);
            $X0 = floor(($minX + $maxX) / 2);
            break;
        case "L":
            $maxX = $X0;
            $X0 = floor(($minX + $maxX) / 2);
            break;
        case "UL":
            $maxY = $Y0;
            $maxX = $X0;
            $Y0 = floor(($minY + $maxY) / 2);
            $X0 = floor(($minX + $maxX) / 2);
            break;
    }

    // Afficher la nouvelle position de Batman
    echo("$X0 $Y0\n");
}
