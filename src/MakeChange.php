<?php
    class MakeChange
    {
        function convertCoin($input)
        {
          $coins_array = ['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 0];

          $pennies = intval($input);

          $coins_array['pennies'] = $pennies;

          return $coins_array;
        }
    }
?>
