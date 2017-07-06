# Coin Conversion
##### _Exercise in Behavior-Driven Development with PHP Testing, 07.05.17_

#### By Calla Rudolph (<callarudolph@gmail.com>)

## Description

This web application allows users to input a number and receive the proper American coin currency value. This is a practice in using Behavior Driven Development PHP with the Silex micro framework and twig templates. It was tested step by step using PHPUnit.

## Setup

* Open GitHub site on your browser: https://github.com/CallaRudolph/php-coinConversion
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
    * type 'cd desktop' and press enter
    * type 'git clone' then copy the repository link and press enter
    * type 'cd php-titleCaseGenerator' to access the document root (project folder) on your computer
    * type 'composer install' to download dependencies
    * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
* Open browser and type 'localhost:8000' to view app.
* Enter in a number, and you will see the coin conversion!
* Click the link on the results page to return home.

## Specifications
* It should inform the user to input an entry if the field is left blank.
    * Input: " "
    * Output: "Please fill out this field."
* It returns the input value in pennies.
    * Input: '3'
    * Output: 'pennies: 3'
* It returns the input value in nickels and pennies.
    * Input: '8'
    * Output: 'nickels: 1; pennies: 3'
* It returns the input value in dimes, nickels, and pennies.
    * Input: '16'
    * Output: 'dimes: 1; nickels: 1; pennies: 1'
* It returns the input value in quarters, dimes, nickels, and pennies.
    * Input: '41'
    * Output: 'quarters: 1; dimes: 1; nickels: 1; pennies: 1'

## Technologies Used

PHP, Silex, Twig, PHPUnit, CSS, HTML5

### License
This software is licensed under the MIT license.

Copyright &copy; 2017 **_Calla Rudolph_**
