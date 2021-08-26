<?php

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

fscanf(
    STDIN,
    "%d %d %d %d",
    $lightX, // the X position of the light of power
    $lightY, // the Y position of the light of power
    $initialTX, // Thor's starting X position
    $initialTY // Thor's starting Y position
);

$thorX = $initialTX;
$thorY = $initialTY;

// game loop
while (TRUE) {
    fscanf(
        STDIN,
        "%d",
        $remainingTurns
    );

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    //echo("SE\n"); // A single line providing the move to be made: N NE E SE S SW W or NW
    $directionX = '';
    $directionY = '';

    if ($thorX > $lightX) {
        $directionX = 'W';
        $thorX -= 1;
    } elseif ($thorX < $lightX) {
        $thorX += 1;
        $directionX = 'E';
    }

    if ($thorY > $lightY) {
        $thorY -= 1;
        $directionY = 'N';
    } elseif ($thorY < $lightY) {
        $thorY += 1;
        $directionY = 'S';
    }

    echo ($directionY . $directionX . "\n");
}
