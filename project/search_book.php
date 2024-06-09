
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
    
    $query = "SELECT 도서번호, 제목, 저자, 출판년도, 장르, 출판사이름 FROM 도서 NATURAL JOIN 출판사 ";
	
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
    <form method="POST" action="search_book_correct.php">
        <p>
            도서번호 : 
            <input type="text" name="b_id"/>
        <p>
         <p>
            제목 : 
            <input type="text" name="b_name" />
        <p>
         <button type="submit">검색</button>
        </form>
    <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    
</div>