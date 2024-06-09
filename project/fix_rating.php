<?php
session_start();
	$id=$_SESSION['id'];
?>

<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>평가내용</th>
            <th>평가점수</th>
            <th>도서번호</th>
            <th>평가날짜</th>
            <th>고객번호</th>
            <th>도서번호</th>
        </tr>
    <?
    $conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
    
    if($id=="admin"){
    	echo "관리자는 평가내용을 수정할수 없습니다.";
    }
    else{
    	$query = "SELECT 평가내용, 평가점수, 도서번호, 평가날짜, 고객번호, 도서번호 FROM 평가 WHERE 고객번호='$id'";
	
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td><a href='fix_info_rating.php?id={$row[4]}&b_id={$row[5]}'>수정</td>";
        echo "<td><a href='del_rating.php?id={$row[4]}&b_id={$row[5]}'>삭제</td></tr>";
    }
    }
    ?>
    </table>
      <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    
</div>