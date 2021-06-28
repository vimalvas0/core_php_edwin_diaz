<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">


	<form action="" method="POST">
	<label for="string">Enter a string to crypt : </label>
	<input type="text" name="string" placeholder="Anything?">
	<input type="submit" name="test_string_submit">
	</form>

	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value



		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/


		//Getting the post supervariable here : 
		if(isset($_POST['test_string_submit']))
		{

			$string = $_POST['string'];

			$hashType = '$2y$10$';

			// salt must be 22 in length for BLOWFISH
			$salt = 'iapplyacrazystring2021';

			// Crypt uses a hashType and salt to encrypt using blowfish algorithm...
			$hashed_password = crypt($string, $hashType.$salt);

			echo "<div class='post_response'>";
			echo "Encrypted string : " . "<b>$hashed_password</b>" . "<br>";
			echo "</div>";
		}
	
	?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>