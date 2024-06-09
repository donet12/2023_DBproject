<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$l_id =$_POST['l_id'];
	$id = $_POST['id'];
	$b_id = $_POST['b_id'];
	$l_date = $_POST['l_date'];
	$r_date = $_POST['r_date'];
	
	$ldate = DateTime::createFromFormat('Y-m-d', $l_date);
	$dateString1 = $ldate->format('Y-m-d');
	$rdate = DateTime::createFromFormat('Y-m-d', $r_date);
	$dateString2 = $rdate->format('Y-m-d');
	
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	$query = "UPDATE 대출 SET 고객번호 = '$id', 도서번호 = '$b_id', 대출일자='$dateString1', 반납일자 ='$dateString2' WHERE 대출번호='$l_id'";
	$r = mysqli_query($conn, $query);
	if ($r == false) {
		msg("잘못된 입력");
	}
	header('location: main.php');
	exit();
?>