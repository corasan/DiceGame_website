<?php 
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
	if(isset($_GET["confirm"]) AND $_GET["confirm"] == "yes") 
	{
		echo "Your account has been succesfully created!\n"; 
		?>
		<a href='<?php $ROOT_PATH?>Game.php'>Go to the dice game!</a>
		<?php
	}
	else if (isset($_GET["confirm"]) AND $_GET["confirm"] = "no") {
		echo "Redirecting back to form!";
	}
	else {
		echo "Error in submitting your form\n";
	} 
} 
else 
{
	echo "Error in the GET method!";
}
?>