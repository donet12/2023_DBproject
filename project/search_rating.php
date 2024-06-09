<?php
session_start();
	$id=$_SESSION['id'];
	$name=$_SESSION['name'];
?>


<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <th>이름</th>
            <th>평가날짜</th>
            <th>평가내용</th>
            <th>평가점수</th>
            <th>도서번호</th>
            <th>제목</th>
            <th>저자</th>
            <th>장르</th>
           
       
        </tr>
    <?

	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
    
    $query = "SELECT 이름, 평가날짜, 평가내용, 평가점수, 도서번호, 제목, 저자, 장르 FROM 평가 NATURAL JOIN 고객 NATURAL JOIN 도서";
    
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