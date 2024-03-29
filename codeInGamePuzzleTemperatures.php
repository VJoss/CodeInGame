<?php
/**
 * Auto-generated code below aims at helping you parse 
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
$closeToZero = null;
for ($i = 0; $i < $n ; $i++)
{
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
    $difference = abs($t - 0);

    if ($closeToZero === null || $difference < abs($closeToZero - 0) || ($difference === abs($closeToZero - 0) && $t>0)){
            $closeToZero = $t;
        }
    }

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

if ($closeToZero !== null) {
    echo("$closeToZero\n");
} else {
    echo("0\n");
}
?>