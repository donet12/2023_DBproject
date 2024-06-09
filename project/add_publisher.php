
<html>
	
    <head>
        <title>출판사정보 추가</title>
    </head>
    <body>
        <h1>출판사정보 추가</h1>
        <form method="POST" action="add_publisher_action.php">
        <p>
        	
            출판사코드 : 
            <input type="text" name="p_id"/>
        <p>
         <p>
            출판사이름 : 
            <input type="text" name="p_name" />
        <p>
         <p>
            대표전화 : 
            <input type="text" name="p_phone" />
        <p>
       
        	<input type="submit" value="추가"></p>
        </form>
        <form method="POST" action="main.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>