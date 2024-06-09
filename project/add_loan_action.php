

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='add_book.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$l_id = rand(10000,99999 );
	$id = $_POST['id'];
	$b_id = $_POST['b_id'];
	$l_date = $_POST['l_date'];
	$r_date = $_POST['r_date'];
	
	
	
	$ldate = DateTime::createFromFormat('Y-m-d', $l_date);
	$dateString1 = $ldate->format('Y-m-d');
	$rdate = DateTime::createFromFormat('Y-m-d', $r_date);
	$dateString2 = $rdate->format('Y-m-d');
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	
	$query = "SELECT COUNT(*) AS overlapping_loans
          FROM 대출
          WHERE 도서번호 = '$b_id'
            AND (
              (대출일자 <= '$dateString2' AND 반납일자 >= '$dateString1')
              OR (대출일자 <= '$dateString1' AND 반납일자 >= '$dateString1')
              OR (대출일자 >= '$dateString1' AND 반납일자 <= '$dateString2')
            )";
	$result = mysqli_query($conn, $query);
	if ($result) {
    $row = mysqli_fetch_assoc($result);
    $overlappingLoans = $row['overlapping_loans'];

    if ($overlappingLoans > 0) {
		msg("이미 해당 기간에 대출 중인 도서가 있습니다.");
		exit();
    } else {
       $query1 = "INSERT INTO 대출(대출번호, 고객번호, 도서번호, 대출일자, 반납일자) VALUES('$l_id', '$id', '$b_id','$dateString1','$dateString2')";
	   $result1 = mysqli_query($conn, $query1);
	   $count = mysqli_num_rows($result1);
    }
} else {
    
    echo "대출 가능 여부를 확인하는 도중 오류가 발생했습니다.";
}
	
	
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