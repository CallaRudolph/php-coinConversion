<?php
    require_once 'src/MakeChange.php';

    class MakeChangeTest extends PHPUnit_Framework_TestCase
    {
        function testMakeChangeError()
        {
            //Arrange
            $test_MakeChange = new MakeChange;
            $input = '1.00';

            //Act
            $$result = $test_MakeChange->convertCoin($input);

            //Assert
            $this->assertEquals("Your number must be less than $1.00", $result);
        }
    }

?>
