<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


	// Step 1 : 

	$user_fav_lang = "NOT JS AND JAVA";


	if($user_fav_lang == "JS")
	{
		echo "I love JS <br>";
	}
	elseif($user_fav_lang == "JAVA")
	{
		echo "I love JAVA";
	}
	else
	{
		echo "I LOVE PHP";
	}

	echo "<br> --------- <br>";



	// Step 2: 
	for($i = 1; $i <= 10; $i++)
	{
		echo "$i <br>";
	}


	echo "<br> ------------- <br>";

	// Step 3 :

	//Checking the admin


	$user_role = "Admin";

	Switch($user_role){
		case "Intern":
			echo "You don't have the access <br>";
			break;
		case "SW":
			echo "You don't have the access <br>";
			break;
		case "Accountant":
			echo "You don't have the access <br>";
			break;
		case "Manager":
			echo "You get the access <br>";
			break;
		case "Admin":
			echo "You get the access <br>";
			break;
		case "HR":
			echo "You get the access <br>";
			break;
	}



	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>