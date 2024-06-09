

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$id = $_POST['id'];
	$b_id = $_POST['b_id'];
	$r_input = $_POST['r_input'];
	$r_score = $_POST['r_score'];
	$ra_date = $_POST['ra_date'];
	
	$int_r_score = (int)$r_score;
	
	$date = DateTime::createFromFormat('Y-m-d', $ra_date);
	$dateString = $date->format('Y-m-d');
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	
	$query = "INSERT INTO 평가(평가내용, 평가점수, 평가날짜, 고객번호, 도서번호) VALUES('$r_input', '$int_r_score', '$dateString','$id', '$b_id')";
	
	$result = mysqli_query($conn, $query);
	$count = mysqli_num_rows($result);
	
	if ($count > 0){
		msg($dup);
		exit();
	}
	if ($result == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>