<!DOCTYPE html>

<html>
    <head>
        <title>korea 도서관 회원가입</title>
    </head>
    <body>
        <h1>korea 도서관 회원가입</h1>
        <form method="POST" action="register_action.php">
        <p>
            이름 : 
            <input type="text" name="name" />
        <p>
         <p>
            주민번호 : 
            <input type="text" name="ssd" />
        <p>
        <p>
            주소 : 
            <input type="text" name="address" />
        <p>
        	
        <p>
             <input type="text" id="phone" name="phone[]" required><br>
    
		<p>전화번호를 추가하려면 추가버튼을 누르세요</p>
    <button type="button" onclick="addPhoneNumber()">전화번호 추가</button>
	
    <br>
        <script>
    function addPhoneNumber() {
        
        const phoneNumberInput = document.createElement('input');
        phoneNumberInput.type = 'text';
        phoneNumberInput.name = 'phone[]'; 
        phoneNumberInput.required = true;

        
        document.querySelector('form').appendChild(phoneNumberInput);
    }
</script>
  <p>
        <p><input type="submit" value="회원가입"></p>
        </form>
         <form method="POST" action="start_login.php">
         <button type="submit">뒤로가기</button>
        </form>
    </body>
</html>