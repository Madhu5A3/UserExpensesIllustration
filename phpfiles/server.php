<?php include_once("server.php") ?>
<?php 


	$errors = array();
	//connect to the database
	$db = mysqli_connect('localhost','root','');
	//if the register button is clicked
	mysqli_select_db($db,'db_spending');
	
?>
