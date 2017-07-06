<?php
    class MakeChange
    {
        function convertCoin($input)
        {
            $coins_array = ['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 0];

            $quarters = intval($input / 25);
            $dimes = intval(($input - ($quarters * 25)) / 10);
            $nickels = intval(($input - ($quarters * 25) - ($dimes * 10)) / 5);
            $pennies = intval($input - ($quarters * 25) - ($dimes * 10) - ($nickels * 5));

            $coins_array['quarters'] = $quarters;
            $coins_array['dimes'] = $dimes;
            $coins_array['nickels'] = $nickels;
            $coins_array['pennies'] = $pennies;

            return $coins_array;
        }
    }
?>
