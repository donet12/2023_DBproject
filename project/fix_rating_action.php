

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
	
	
	$radate = DateTime::createFromFormat('Y-m-d', $ra_date);
	$dateString1 = $radate->format('Y-m-d');
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "UPDATE  평가 SET 평가내용 = '$r_input', 평가점수 = '$int_r_score', 평가날짜 ='$dateString1' WHERE 고객번호='$id' AND 도서번호 ='$b_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>
?>