

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$b_id = $_POST['b_id'];
	$b_name = $_POST['b_name'];
	$a_name = $_POST['a_name'];
	$year = $_POST['year'];
	$genre = $_POST['genre'];
	$p_id = $_POST['p_id'];


	$yearInput = DateTime::createFromFormat('Y-m-d', $year);


if ($yearInput instanceof DateTime) {
   
    $formattedDate = $yearInput->format('Y-m-d');
  
} else {
	
    msg("잘못된입력");
}
	$date = DateTime::createFromFormat('Y-m-d', $year);
	$dateString = $date->format('Y-m-d');
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	
	$query = "INSERT INTO 도서(도서번호, 제목, 저자, 출판년도, 장르 ,출판사코드) VALUES('$b_id', '$b_name', '$a_name', '$dateString','$genre', '$p_id')";
	
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