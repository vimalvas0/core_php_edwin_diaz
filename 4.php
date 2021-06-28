<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */


	// Step 1 : 

	function calculate($number1, $number2, $operator)
	{

		$ans = 0;
		$error = false;
		switch($operator)
		{
			case '+':
				$ans = $number1 + $number2;
				break;
			case '-':
				$ans = $number1 - $number2;
				break;
			case 'x': 
				$ans = $number1 * $number2;
				break;
			case '/': 
				$ans = $number1 / $number2;
				break;
			default :
				$error = true;
				break;
		}

		if(!$error)
		{
			echo "Your Answer = " . $ans . "<br>";
		}else{
			echo "There was some error. Check if operator was one of +, -, x, / only. <br>";
		}
	}



	calculate(2, 4, '+'); 
	calculate(15, 5, 'x');
	calculate(10, 2, '/');
	calculate(4, 2, '-');
	calculate(4, 2, '^');  // Shows error message.
	calculate(3, 5, 'x');



	echo "<br> -----------------------  <br>";

	// Step 2 : 


	function greet($name = "")
	{	
		$to_greet = $name == "" ? "Sir/Mam" : $name;
		echo "Hello, " . $to_greet . "<br>";
	}


	greet(); //Using default parameter values
	greet("Vimal");
	greet("Aamir");
	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>