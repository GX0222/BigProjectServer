<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>會員中心</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
	crossorigin="anonymous">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
	crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"
	integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
	crossorigin="anonymous"></script>

<!-- Google Icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!-- SimpleBar-->
<link rel="stylesheet"
	href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
<!-- NavBar -->
<link rel="stylesheet" href="/static/Tools/NavBar_2.css">
<!-- Css -->
<link rel="stylesheet" href="/static/Tools/Membe.css">
<link rel="stylesheet" href="/static/Tools/Member.css">
<link rel="stylesheet" href="/static/Tools/footer.css">
<!-- Color -->
<link rel="stylesheet" href="/static/Tools/Color.css">
<style>
</style>
</head>

<body>
	<!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	<div class="bgCon">
        <!-- HomeLeft -->
        <%@ include file="Shared/HomeLeft.jsp" %>

		<div class="homeRight">
			<div class="m-0 p-0 infoCon">
				<div class="memberInfo">
					<div class="memberImg">
						<img class="rounded-circle img-fluid" src="<c:url value='/static/image/IMG_0987.JPG' />"
							alt="">
					</div>
					<div class="memberLV"></div>
				</div>
				<div class="memberForm">
					<form>
						<div class="mb-3">
							<label for="name" class="form-label">姓名/暱稱/名稱：</label> <input
								type="text" class="form-control" id="name">
						</div>
						<div class="mb-3">
							<label for="mail" class="form-label">Mail：</label> <input
								type="email" class="form-control" id="mail">
						</div>
						<div class="mb-3">
							<label for="tel" class="form-label">電話：</label> <input type="tel"
								class="form-control" id="tel">
						</div>
						<div class="mb-3">
							<label for="birth" class="form-label">生日：</label> <input
								type="date" class="form-control" id="birth">
						</div>
						<fieldset class="mb-3">
							<legend class="form-label">興趣：</legend>
							<div class="d-inline-flex likeCheck">
								<div class="m-0 form-check">
									<input type="checkbox" class="form-check-input" id="01">
									<label for="01" class="form-check-label">休閒旅遊</label>
								</div>
								<div class="m-0 form-check">
									<input type="checkbox" class="form-check-input" id="02">
									<label for="02" class="form-check-label">藝文活動</label>
								</div>
								<div class="m-0 form-check">
									<input type="checkbox" class="form-check-input" id="03">
									<label for="03" class="form-check-label">親子</label>
								</div>
							</div>
							<br>
							<div class="d-inline-flex likeCheck">
								<div class="m-0 form-check">
									<input type="checkbox" class="form-check-input" id="04">
									<label for="04" class="form-check-label">文創/市集</label>
								</div>
								<div class="m-0 form-check">
									<input type="checkbox" class="form-check-input" id="05">
									<label for="05" class="form-check-label">博物館/美術館</label>
								</div>
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary">提交</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<%@ include file="../Shared/Footer.jsp" %>

	<script>
		$(document).ready(function() {

		});
	</script>

</body>

</html>