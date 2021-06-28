<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */



	// Step 1 : 

	echo "Using Math pow function to perform 2^4 here : \n";
	echo pow(2, 4);

	echo "<br> ------ <br>";


	// Step2 : 

	$email = "vimalvas03@gmail.com";
	$atNeedle = strpos($email, "@");

	$username = substr($email, 0, $atNeedle);

	echo "This is username retrieved is {$username}. <br>";


	echo "<br> ---------- <br>";



	// Step3 : 
	$pets = ['panda', 'cat', 'dog'];

	$new_pet = 'parrot';


	if(in_array($new_pet, $pets))
	{
		echo "You already have this pet. <br>";
	}else
	{
		echo "You don't have this pet. Seems cute, buy this. <br>";
	}


	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>