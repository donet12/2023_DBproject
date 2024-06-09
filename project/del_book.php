

<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$b_id = $_GET['b_id'];
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "DELETE FROM 도서 WHERE 도서번호 = '$b_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("ERROR!");
	}
	header('location: main.php');
	exit();
?>