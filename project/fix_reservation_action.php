<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$re_id =$_POST['re_id'];
	$id = $_POST['id'];
	$b_id = $_POST['b_id'];
	$re_date = $_POST['re_date'];
	
	$redate = DateTime::createFromFormat('Y-m-d', $re_date);
	$dateString1 = $redate->format('Y-m-d');
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "UPDATE 예약 SET 고객번호 = '$id', 도서번호 = '$b_id', 예약일자 ='$dateString1' WHERE 예약번호='$re_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>