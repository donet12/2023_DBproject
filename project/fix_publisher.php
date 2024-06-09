<?php
session_start();
	$id=$_SESSION['id'];
	$name=$_SESSION['name'];
?>

<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>출판사코드</th>
            <th>출판사이름</th>
            <th>대표전화</th>
        </tr>
    <?
    $conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
    
    if($id=="admin"){
    	$query = "SELECT 출판사코드, 출판사이름, 대표전화 FROM 출판사 ";
    
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td><a href='fix_info_publisher.php?p_id={$row[0]}'>수정</td>";
        echo "<td><a href='del_publisher.php?p_id={$row[0]}'>삭제</td></tr>";
    }
    }
     else{
    	echo "관리자가아닙니다.";
	}
    ?>
    </table>
      <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    
</div>