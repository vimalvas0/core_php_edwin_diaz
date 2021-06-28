<?php
    const NAME_MODULE = "Inbuilt Function";
    const KEY_MODULE = 5;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Module</title>
    <link rel="stylesheet" href="./css/self_style.css">
</head>
<body>
    <div class="main--header">
        <h2><?php echo "Test Module : " . NAME_MODULE . " " . KEY_MODULE; ?></h2>
    </div>

    <div class="main--body">


        <h2 class="main--body--heading">Results of your code below : </h2>

        <?php


        // Learning about cookies ....


        // Setting a cookie and getting a cookie : 
        setcookie('yourName', 'Vimal', time() + 60 * 60 * 24 * 7);

        if(isset($_COOKIE['yourName']))
        {
            echo "Your Cookie was set : " . $_COOKIE['yourName'];
        }



        

        ?>

    </div>
</body>
</html>