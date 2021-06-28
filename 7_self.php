<?php
    const NAME_MODULE = "Security";
    const KEY_MODULE = 7;
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

           // For the security of the strings entered into the forms :
             $name = mysqli_real_escape_string(); // Takes two parameters, first connection , then variable name itself

            // 








        ?>

    </div>
</body>
</html>