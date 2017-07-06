<?php
    class MakeChange
    {
        function convertCoin($input)
        {
            $coins_array = ['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 0];

            $nickels = intval($input / 5);
            $pennies = intval($input - ($nickels * 5));

            $coins_array['nickels'] = $nickels;
            $coins_array['pennies'] = $pennies;

            return $coins_array;
        }
    }
?>
