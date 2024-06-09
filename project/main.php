


<!DOCTYPE html>
<html>
    <head>
        <title>korea library system</title>
    </head>
    <body>
        <h1>korea 도서관에 오신 것을 환영합니다</h1>
        <table border = "1">
        	<th>검색</th>
        	<th>등록</th>
        	<th>수정 및 삭제</th>
        	<tr>
        		<td><a href='search_customer.php'>고객정보 검색</a></td>
        		<td></td>
        		<td><a href='fix_customer.php'>고객 수정/삭제</a></td>
        	</tr>
        	<tr>
        		<td><a href='search_book.php'>도서정보 검색 </a></td>
        		<td><a href='add_book.php'>도서 등록</a></td>
        		<td><a href='fix_book.php'>도서 수정/삭제</a></td>
        	</tr>
        	<tr>
        		<td><a href='search_publisher.php'>출판사정보 검색</a></td>
        		<td><a href='add_publisher.php'>출판사 등록</a></td>
        		<td><a href='fix_publisher.php'>출판사 수정/삭제</a></td>
 
        	</tr>
        	<tr>
            	<td><a href='search_loan_return.php'>대출/반납/예약정보 검색 </a></td>
        		<td><a href='add_loan_return.php'>대출/반납/예약 등록</a></td>
        		<td><a href='fix_loan_return.php'>대출/반납/예약 수정/삭제</a></td>
        	</tr>
        		<tr>
            	<td><a href='search_rating.php'>평가정보 검색 </a></td>
        		<td><a href='add_rating.php'>평가 등록</a></td>
        		<td><a href='fix_rating.php'>평가 수정/삭제</a></td>
        	</tr>
        </table>
        <form method="POST" action="start_login.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>