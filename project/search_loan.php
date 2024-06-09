<?php
session_start();
	$id=$_SESSION['id'];
	$name=$_SESSION['name'];
?>


<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>대출번호</th>
            <th>고객번호</th>
            <th>도서번호</th>
            <th>대출일자</th>
            <th>반납일자</th>
            <th>제목</th>
            <th>저자</th>
            <th>출판사이름</th>
       
        </tr>
    <?

	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
    
    if($id=="admin"){
    	$query = "SELECT 대출번호, 고객번호, 도서번호, 대출일자, 반납일자, 제목, 저자, 출판사이름FROM 대출 NATURAL JOIN 도서 NATURAL JOIN 출판사";
    }
    else{
    	$query = "SELECT 대출번호, 고객번호, 도서번호, 대출일자, 반납일자, 제목, 저자, 출판사이름 FROM 대출 NATURAL JOIN 도서 NATURAL JOIN 출판사 WHERE 고객번호='$id'";
	}
	$result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td>$row[6]</td>";
        echo "<td>$row[7]</td></tr>";
    }
    
    ?>
    </table>
    <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    
</div>