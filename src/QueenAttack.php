<?php

    class QueenAttack
    {
        function attackAdjacent($queen_x, $queen_y, $other_x, $other_y)
        {
            if (($other_x == ($queen_x + 1 || $queen_x - 1)) ||
            (($other_y) == ($queen_y + 1 || $queen_y - 1)) ||
            (($other_x == $queen_x - 1) && ($other_y == $queen_y - 1)) ||
            (($other_x == $queen_x + 1) && ($other_y == $queen_y + 1)) ||
            (($other_x == $queen_x - 1) && ($other_y == $queen_y + 1)) ||
            (($other_x == $queen_x + 1) && ($other_y == $queen_y - 1))) {
                return "can attack";
            } else {
                return "you're safe for now";
            }
        }
    }
?>
