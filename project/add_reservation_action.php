

<?php
function msg($message) {
    echo "<p style='color: red;'>$message</p>";
    echo "<a href='main.php'>돌아가기</a>";
    exit();
}
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	$re_id = rand(10000,99999 );
	$id = $_POST['id'];
	$b_id = $_POST['b_id'];
	$re_date = $_POST['re_date'];
	
	
	
	$redate = DateTime::createFromFormat('Y-m-d', $re_date);
	$dateString = $redate->format('Y-m-d');
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
	
	$qu="SELECT 대출일자, 반납일자 FROM 대출 WHERE 도서번호='$b_id'";
	$ro1='';
	$ro2='';
	$res = mysqli_query($conn, $qu);
	while ($ro = mysqli_fetch_array($res)) {
    
    $ro1 = $ro['대출일자'];
    $ro2 = $ro['반납일자'];

}
	
	$query = "SELECT COUNT(*) AS overlapping_loans
          FROM 대출
          WHERE 도서번호 = '$b_id'
            AND (
              (대출일자 <= '$ro2' AND 반납일자 >= '$ro1')
              OR (대출일자 <= '$ro1' AND 반납일자 >= '$ro1')
              OR (대출일자 >= '$ro1' AND 반납일자 <= '$ro2')
            )";
	$result = mysqli_query($conn, $query);
	if ($result) {
    $row = mysqli_fetch_assoc($result);
    $overlappingLoans = $row['overlapping_loans'];

    if ($overlappingLoans > 0) {
		echo "이미 해당 기간에 대출 중인 도서가 있습니다.";
		echo "예약하세요";
	   $query1 = "INSERT INTO 예약(예약번호, 예약일자, 고객번호, 도서번호) VALUES('$re_id', '$dateString', '$id','$b_id')";
	   $result1 = mysqli_query($conn, $query1);
	   $count = mysqli_num_rows($result1);
    } else {
        msg("예약 할 필요가없습니다.");
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