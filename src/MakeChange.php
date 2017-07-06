<?php
    class MakeChange
    {
        function convertCoin($input)
        {
            $coins_array = ['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 0];

            $dimes = intval($input / 10);
            $nickels = intval(($input - ($dimes * 10)) / 5);
            $pennies = intval($input - ($dimes * 10) - ($nickels * 5));

            $coins_array['dimes'] = $dimes;
            $coins_array['nickels'] = $nickels;
            $coins_array['pennies'] = $pennies;

            return $coins_array;
        }
    }
?>
