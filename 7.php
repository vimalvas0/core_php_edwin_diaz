<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


<form action="" method="POST">
	<label for="name">Enter student name : </label>
	<input type="text" name="name" placeholder="Your Name?">
	<br>
	<label for="sec">Enter student section : </label>
	<input type="text" name="sec" placeholder="Choose A, B or C.">
	<br>
	<input type="submit" name="student_submit">
</form>


	
	
	
<?php  

	/*  Step 1 - Create a database in PHPmyadmin



		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

		// Connect to the database
		$connection = mysqli_connect('localhost', 'vimal', 'unme4ever', 'practicedb');

		// Using table students
		if(isset($_POST['student_submit']))
		{

			$s_name = $_POST['name'];
			$s_section = $_POST['sec'];
			$query = "INSERT INTO students (student_name, student_section) ";
			$query .= "VALUES ('$s_name', '$s_section')";

			$add_student = mysqli_query($connection, $query);

			if($add_student)
			{
				echo "<h3>Student Successfully Added</h3>";
			}
		}

?>




	<?php 

		$query = "SELECT * FROM students";
		$get_all_students = mysqli_query($connection, $query);

		echo "<div class='post_response'>";
		echo "<h2 style='border-bottom : 3px solid black; padding-bottom : 10px;'>Student Details</h2>";

		if(mysqli_num_rows($get_all_students) == 0)
		{
			$error = true;
			echo "<p><i>No results found.</i></p>";
		}
		else{
			$error = false;
		}

		if(!$error)
		{
			while($row = mysqli_fetch_assoc($get_all_students))
			{
				$name = $row['student_name'];
				$sec = $row['student_section'];


	?>


		<p><b>Name : </b><?php echo $name; ?></p>
		<p><b>Section : </b><?php echo $sec; ?></p>
		<hr>

		<?php 

			}
		}

		?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
