
<?php 
    
    // variables 
    
    $num = 10;
    $string = "Hello world";
    $num_with_underscore = 24;
    $my_name = "Vimal";


    // concatenation : 
    echo "hello, " . $my_name;

    echo "<br>";


    /*

    We can assign html and images to the variable
    1. $html = '<h2> Hello world </h2>'
    2. $img = '<img src="./somePic.jpg">'

    */

    // Maths 
    echo 45 + 12;
    echo '<br>';
    echo 34 - 11;


    echo "<br> ============== <br>";

    // arrays 

    $friends = ['mrigank', 'sumit', 'aashish', 'kajal'];



    // Remember the foreach and for loop seperately
    foreach($friends as $friend)
    {
        echo "This is one of my friend : " . $friend . "<br>";
    }



    // Arrays : 
    $someArray = new array();



//  Constants are created using the const statement or the define function. The convention is to use UPPERCASE
//  letters for constant names.

    const PI = 3.14;

    define("APP_ENV", "dev");






?>