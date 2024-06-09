
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
	$b_id = $_POST['b_id'];
	$b_name = $_POST['b_name'];
	$conn = mysqli_connect("localhost", "db2021320174", "qwe7105c@korea.ac.kr", "db2021320174");
    
    $query = "SELECT 도서번호, 제목, 저자, 출판년도, 장르, 출판사이름 FROM 도서 NATURAL JOIN 출판사 WHERE 도서번호='$b_id' AND 제목='$b_name' ";
	
	$result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td></tr>";
    }
    
    ?>
    </table>
      <form method="POST" action="search_book.php">
         <button type="submit">뒤로가기</button>
        </form>
    