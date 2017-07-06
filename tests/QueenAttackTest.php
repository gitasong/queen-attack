<?php
    require_once 'src/QueenAttack.php';

    class QueenAttackTest extends PHPUnit_Framework_TestCase
    {
        function testQueenAttackAdjacent()
        {
            // Arrange
            $test_queenAttack = new QueenAttack;
            $queen_x = 3;
            $queen_y = 4;
            $other_x = 4;
            $other_y = 5;

            // Act
            $result = $test_queenAttack->attackAdjacent($queen_x, $queen_y, $other_x, $other_y);

            // Assert
            $this->assertEquals("can attack", $result);
        }

        function testQueenAttackHorizontal()
        {
            // Arrange
            $test_queenAttack = new QueenAttack;
            $queen_x = 3;
            $queen_y = 4;
            $other_x = 3;
            $other_y = 8;

            // Act
            $result = $test_queenAttack->attackAdjacent($queen_x, $queen_y, $other_x, $other_y);

            // Assert
            $this->assertEquals("can attack", $result);
        }

        function testQueenAttackVertical()
        {
            // Arrange
            $test_queenAttack = new QueenAttack;
            $queen_x = 3;
            $queen_y = 4;
            $other_x = 7;
            $other_y = 4;

            // Act
            $result = $test_queenAttack->attackAdjacent($queen_x, $queen_y, $other_x, $other_y);

            // Assert
            $this->assertEquals("can attack", $result);
        }
    }

?>
