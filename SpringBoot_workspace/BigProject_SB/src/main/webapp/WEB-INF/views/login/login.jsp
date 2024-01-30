<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib uri="http://www.springframework.org/tags/form" prefix="form" %>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="/static/Tools/Login.css">
    <style type="text/css">
    .error {
	color: red;
	display: inline-block;
	font-size: 10pt;
}
    
    </style>
</head>

<body>
<form:form method="POST" modelAttribute="loginBean">
    <div class="login-container">
        <h2>登入</h2>
        	<form:errors  path="invalidCredentials" cssClass="error" />
            <label for="account">帳號：</label>
			<form:input  path="account" id="account" name="account" />
			<form:errors  path="account" cssClass="error" />
			
            <label for="password">密碼：</label>
            <form:input  type="password" path="password" id="password" name="password" />
			<form:errors  path="password" cssClass="error" />

            <div class="remember-forgot">
                <span class="remember-me">
                    <form:checkbox path="rememberMe"  id="rememberMe" style="margin-left: -15px;"  />
                    <label for="rememberMe" style="width: 120px; margin-left: -20px;">記住我</label>
                </span>
                <span class="forgot-password">
                    <a href="#">忘記密碼？</a>
                </span>
            </div>

            <button type="submit" class="login-btn">登入</button>

            <div class="register-link">
                <p>還沒有帳號？<a href="/register/register">註冊</a></p>
            </div>
        

<!--         <div class="social-login"> -->
<!--             <p>或使用其他登入：</p> -->
<!--             <img id="test" src="./image/icon_google.png" alt="Google"> -->
<!--             <img id="line" src="./image/icon_line.png" alt="Line"> -->
<!--             <img id="fb" src="./image/icon_fb.png" alt="FB"> -->
<!--             <script src="./Tools/login.js" type="module"></script> -->
<!--         </div> -->
    </div>
</form:form>

</body>
</html>