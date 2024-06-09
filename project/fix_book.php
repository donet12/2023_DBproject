<?php
session_start();
	$id=$_SESSION['id'];
	$name=$_SESSION['name'];
?>

<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>도서번호</th>
            <th>제목</th>
            <th>저자</th>
            <th>출판년도</th>
            <th>장르</th>
            <th>출판사이름</th>
        </tr>
    <?
    $conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
    
    if($id=="admin"){
    	$query = "SELECT 도서번호, 제목, 저자, 출판년도, 장르, 출판사이름 FROM 도서 NATURAL JOIN 출판사";
    
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td><a href='fix_info_book.php?b_id={$row[0]}&p_name={$row[4]}'>수정</td>";
        echo "<td><a href='del_book.php?b_id={$row[0]}'>삭제</td></tr>";
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