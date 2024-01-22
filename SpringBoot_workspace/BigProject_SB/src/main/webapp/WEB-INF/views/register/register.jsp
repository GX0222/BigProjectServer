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
    <title>註冊</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<!--     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <!-- css -->
<!--     <link rel="stylesheet" href="./Tools/Rigist.css"> -->
    <link href="/static/Tools/Rigist.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.error {
	color: red;
	display: inline-block;
	font-size: 10pt;
}
</style>
</head>

<body>

    <div class="left-side">
        <div>
            <p style="font-size: 40px; font-family: 'Concert One', sans-serif;">You can always make money,</p>
            <p style="font-size: 40px; font-family: 'Concert One', sans-serif;">you can’t always make memories.</p>
        </div>
    </div>
	
	    <div class="right-side">
        <form:form method="POST" modelAttribute="member2">
            <h2 style="align-items: center; display: flex; justify-content: center;">註冊</h2>
            <br>
            <label for="account">帳號:</label>
            <form:input path='account' id='account' name='account' />
            <form:errors path="account" cssClass="error" />
            
            <label for="username">使用者名稱:</label>
            <form:input path='username' id='username' name='username' />
            <form:errors path="username" cssClass="error" />
            
            
			<label for="phone">電話:</label>
			<form:input path='phone' id='phone' name='phone' />
			<form:errors path="phone" cssClass="error" />
			
            <label for="mail">電子郵件:</label>
            <form:input path='mail' id='mail' name='mail' />
			<form:errors path="mail" cssClass="error" />

			
            <label for="password">密碼:</label>
            <form:input path='password' id='password' name='password' />
			<form:errors path="password" cssClass="error" />
			
            <label for="password1">確認密碼:</label>
            <form:input path='password1' id='password1' name='password1' />
			<form:errors path="password1" cssClass="error" />
            
            
            
            <br><br><br><br>
            <button type="submit" onclick="redirectToHomePage()">註冊</button>
        </form:form>
    </div>
	
	
	
	
<!--     <div class="right-side"> -->
<%-- 		<form:form method="POST" modelAttribute="member2"> --%>
			<!--     	enctype='multipart/form-data' -->
<!-- 			<h2 -->
<!-- 				style="align-items: center; display: flex; justify-content: center;">註冊</h2> -->
<!-- 			<br> -->
<!-- 			<tr height="52"> -->
<!-- 				<td style="width: 90px;"><label class="fontSize">帳號：</label><br>&nbsp; -->
<!-- 				</td> -->
<%-- 				<td style="width: 290px;"><form:input path='account' --%>
<%-- 						class="fieldWidth" style="width: 200px;" /><br>&nbsp; <form:errors --%>
<%-- 						path="account" cssClass="error" /></td> --%>
<!-- 				<td><label class="fontSize">用戶名稱：</label><br>&nbsp;</td> -->
<%-- 				<td><form:input path='username' class="fieldWidth" --%>
<%-- 						style="width: 200px;" /><br>&nbsp; <form:errors --%>
<%-- 						path="username" cssClass="error" /></td> --%>
<!-- 			</tr> -->
<!-- 			<tr height="52"> -->
<!-- 				<td style="width: 90px;"><label class="fontSize">電話：</label><br>&nbsp; -->
<!-- 				</td> -->
<%-- 				<td style="width: 290px;"><form:input path='phone' --%>
<%-- 						class="fieldWidth" style="width: 200px;" /><br>&nbsp; <form:errors --%>
<%-- 						path="phone" cssClass="error" /></td> --%>
<!-- 				<td><label class="fontSize">電子郵件：</label><br>&nbsp;</td> -->
<%-- 				<td><form:input path='mail' class="fieldWidth" --%>
<%-- 						style="width: 200px;" /><br>&nbsp; <form:errors --%>
<%-- 						path="mail" cssClass="error" /></td> --%>
<!-- 				<td><label class="fontSize">生日：</label><br>&nbsp;</td> -->
<%-- 				<td><form:input path='birthday' class="fieldWidth" --%>
<%--  						style="width: 200px;" /><br>&nbsp; <form:errors path="birthday"  --%>
<%-- 						cssClass="error" /></td>  --%>
<!-- 			</tr> -->
			
<!-- 			<tr height="52"> -->
<!-- 				<td><label class="fontSize">密碼：</label><br>&nbsp;</td> -->
<%-- 				<td><form:input path='password' class="fieldWidth" --%>
<%-- 						style="width: 200px;" /><br>&nbsp; <form:errors --%>
<%-- 						path="password" cssClass="error" /></td> --%>
<!-- 				<td><label class="fontSize">密碼確認：</label><br>&nbsp;</td> -->
<%-- 				<td><form:input path='password1' class="fieldWidth" --%>
<%-- 						style="width: 200px;" /><br>&nbsp; <form:errors --%>
<%-- 						path="password1" cssClass="error" /></td> --%>

<!-- 			</tr> -->

<!-- 			            <label >帳號:</label> -->
<%-- 			            <form:input path='account' /><br> --%>
<%-- 			      		<form:errors path="account" cssClass="error" /> --%>

<!-- 			      		<label >用戶名稱:</label> -->
<%-- 			            <form:input path='username' /><br> --%>
<%-- 			      		<form:errors path="username" cssClass="error" /> --%>

<!-- 			      		<label >電話:</label> -->
<%-- 			            <form:input path='phone' /><br> --%>
<%-- 			      		<form:errors path="phone" cssClass="error" /> --%>

<!-- 			            <label >生日:</label> -->
<%-- 			            <form:input path='birthday' /><br> --%>
<%-- 			      		<form:errors path="birthday" cssClass="error" /> --%>

<!-- 			            <label >電子郵件:</label> -->
<%-- 			            <form:input path='mail' /><br> --%>
<%-- 			      		<form:errors path="mail" cssClass="error" /> --%>

<!-- 			            <label >密碼:</label> -->
<%-- 			            <form:input path='password' /><br> --%>
<%-- 			      		<form:errors path="password" cssClass="error" /> --%>

<!-- 			            <label >確認密碼:</label> -->
<%-- 			            <form:input path='password1' /><br> --%>
<%-- 			      		<form:errors path="password1" cssClass="error" /> --%>

<!-- 			<br> -->
<!-- 			<br> -->
<!-- 			<br> -->
<!-- 			<br> -->
<!-- 			<button type="submit" name="submit" id="submit">註冊</button> -->
<%-- 		</form:form> --%>

<!-- 	</div> -->
<!-- onclick="redirectToHomePage()" -->
    <script>
					//         function redirectToHomePage() {
					//             // 使用 window.location.href 導向到首頁的 URL
					//             window.location.href = './index.html';
					//         }
// 					<!--
<!-- 				</script> --> -->


</body>
</html>