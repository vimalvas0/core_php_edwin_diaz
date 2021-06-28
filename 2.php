<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out


			

			 */


		  // Solution according to me


		  // Step 1 : 
		  $number1 = 10;
		  $number2 = 20;


		  // Step 2 : 
		  $sum = $number1 + $number2;
		  // or echo $number1 + $number2;
		  
		  echo "Sum of number1 and number2 is $sum <br>";

		  // Step 3 : 

		  // Normal Array : 
		  /// format with square brackets []
		  $arrayNormal = [$number1, $number2];


		  // Associative Array : 
		  // format with array()
		  $arrayAssoc = array(
		  	'number1' => $number1,
		  	'number2' => $number2
		  );


		  echo "number1 in arrayAssoc : " . $arrayAssoc['number1'] . "<br>";
		  echo "number2 in arrayAssoc : " . $arrayAssoc['number2'] . "<br>";


		  // Step 4 : 

		  define("LANG", "PHP");

		  echo LANG;



		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>