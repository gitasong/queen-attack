<?php

    class QueenAttack
    {
        function attackOpponent($queen_x, $queen_y, $other_x, $other_y)
        {
            $x_plus = $queen_x + 1;
            $y_plus = $queen_y + 1;
            $x_minus = $queen_x - 1;
            $y_minus = $queen_y - 1;

            if (($other_x == $queen_x) ||
            ($other_y == $queen_y) ||
            (abs($queen_x - $other_x) == abs($queen_y - $other_y)) ||
            (($other_x == $x_minus) && ($other_y == $y_plus)) ||
            (($other_x == $x_plus) && ($other_y == $y_minus))) {
                return "can attack";
            } else {
                return "you're safe for now";
            }
        }
    }
?>
