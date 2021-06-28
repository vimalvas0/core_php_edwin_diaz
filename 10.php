<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll
	

		
	*/



/**
 * 
 */
	



// Let's define a class for dog : 
class Dog{
	public $name;
	public $eye_color ='black';
	public $fur_color = 'blonde';
	public $age;

	function __construct($name, $age)
	{

		echo "----------------------------------------------------------------<br>";
		echo "A new dog instance with name $name is formed. <br>";
		echo "----------------------------------------------------------------<br><br>";

		$this->name = $name;
		$this->age = $age;
		
	}

	public function showAll()
	{

		echo "-----------------------------------------------------------<br>";
		echo '<i>public ShowAll()</i> method was called : <br>';
		echo "-----------------------------------------------------------<br><br>";

		// print details : 
		echo "Name of Dog : " . $this->name . "<br>";
		$name = $this->name;
		echo "Eye Color : " . $this->eye_color . "<br>";
		echo "Fur Color : " . $this->fur_color . "<br>";
		echo "Age of $name : " . $this->age . "<br>";
	}
}
	
	


$pitbull = new Dog('Pitbull', 43);
$pitbull->showAll();



?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>