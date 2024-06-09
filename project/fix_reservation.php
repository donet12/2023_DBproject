<?php
session_start();
	$id=$_SESSION['id'];
?>

<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>예약번호</th>
            <th>고객번호</th>
            <th>도서번호</th>
            <th>예약일자</th>
            
        </tr>
    <?
    $conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
    
    if($id=="admin"){
    	$query = "SELECT 예약번호, 고객번호, 도서번호, 예약일자 FROM 예약 ";
    }
    else{
    	$query = "SELECT 예약번호, 고객번호, 도서번호, 예약일자 FROM 예약 WHERE 고객번호='$id'";
	}
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td><a href='fix_info_reservation.php?re_id={$row[0]}'>수정</td>";
        echo "<td><a href='del_reservation.php?re_id={$row[0]}'>삭제</td></tr>";
    }
    ?>
    </table>
      <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    
</div>