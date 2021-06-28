
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 


<form action="" method="POST">
	<label for="name">Enter your name : </label>
	<input type="text" name="name" placeholder="Your Name?">
	<input type="submit" name="test_name_submit">
</form>


<?php  

/*  Step1: Make a form that submits one value to POST super global

 */

//Getting the post supervariable here : 
if(isset($_POST['test_name_submit']))
{
	echo "<div class='post_response'>";
	$name = $_POST['name'];
	echo "You have entered : " . "<b>$name</b>" . "<br>";
	echo "</div>";
}

?>







</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>