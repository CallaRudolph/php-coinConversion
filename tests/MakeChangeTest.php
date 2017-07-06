<?php
    require_once 'src/MakeChange.php';

    class MakeChangeTest extends PHPUnit_Framework_TestCase
    {
        function testMakeChangePennies()
        {
            //Arrange
            $test_MakeChange = new MakeChange;
            $input = '4';

            //Act
            $result = $test_MakeChange->convertCoin($input);

            //Assert
            $this->assertEquals(['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 4], $result);
        }

        function testMakeChangeNickels()
        {
            //Arrange
            $test_MakeChange = new MakeChange;
            $input = '8';

            //Act
            $result = $test_MakeChange->convertCoin($input);

            //Assert
            $this->assertEquals(['quarters' => 0, 'dimes' => 0, 'nickels' => 1, 'pennies' => 3], $result);
        }

        function testMakeChangeDimes()
        {
            //Arrange
            $test_MakeChange = new MakeChange;
            $input = '16';

            //Act
            $result = $test_MakeChange->convertCoin($input);

            //Assert
            $this->assertEquals(['quarters' => 0, 'dimes' => 1, 'nickels' => 1, 'pennies' => 1], $result);
        }
    }

?>
