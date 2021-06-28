<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>



<form action="" method="POST">
	<label for="name">Enter your name : </label>
	<small>(We use cookies though....)</small>
	<input type="text" name="name" placeholder="Your Name?">
	<input type="submit" name="test_name_submit">
</form>


<?php  


session_start();

/*  Step1: Make a form that submits one value to POST super global

 */

//Getting the post supervariable here : 
if(isset($_POST['test_name_submit']))
{

	$name = $_POST['name'];

	setcookie('user_name', $name, time() + 60 * 60 * 24 * 7);
	$_SESSION['current_user'] = $name;


	echo "<div class='post_response'>";
	echo "We stored your cookie, " . "<b>$name</b>" . "<br>";
	echo "</div>";

	echo "<div class='post_response_two'>";

	echo "<i>A session was started with user_name as " . "<b>$name</b></i>" . "<br>";
	echo "</div>";
}

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>