

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$l_id = $_GET['l_id'];
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "DELETE FROM 대출 WHERE 대출번호 = '$l_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("ERROR!");
	}
	header('location: main.php');
	exit();
?>