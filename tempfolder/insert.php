<?php
$server = "classmysql.engr.oregonstate.edu";
$username = "cs290_hudkinsn";
$password = "7957";
$dbname = "workouts";

$conn = mysqli_connet($server, $username, $password, $dbname);

if (isset($_POST['submit'])){

if(!empty($_POST['name']) && !empty($_POST['weight']) && !empty($_POST['reps']) && !empty($_POST['date'] && !empty($_POST['llbs'])){

		$name = $_POST['name'];
		$weight = $_POST['weight'];
		$reps = $_POST['reps'];
		$date = $_POST['date'];
		$llbs = $_POST['llbs'];

		$query = "INSERT INTO workouts(name, weight, reps, 'date', llbs) VALUES($name, $weight, $reps, $date, $llbs)"

		$run = mysqli_query($conn, $query) or die(mysqli_error());

}
else{
	echo "All fields required";
}


}




?>