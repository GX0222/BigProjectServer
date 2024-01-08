<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>活動列表</title>
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
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- SimpleBar-->
<link rel="stylesheet"
	href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
<!-- NavBar -->
<link rel="stylesheet" href="./Tools/NavBar_2.css">
<!-- Css -->
<link rel="stylesheet" href="./Tools/Membe.css">
<link rel="stylesheet" href="./Tools/List.css">
<link rel="stylesheet" href="./Tools/footer.css">
<!-- Color -->
<link rel="stylesheet" href="./Tools/Color.css">

<style>


/* =========== */
</style>

</head>

<body>
	<!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	<div class="bgCon">
        <!-- HomeLeft -->
        <%@ include file="Shared/HomeLeft.jsp" %>

		<div class="homeRight">
			<div class="infoCon table-responsive">
				<h3>活動列表</h3>
				<br>
				<table class="dataTable" style="text-align: center;">

					<tr
						style="background-color: rgba(194, 150, 107, 0.178); height: 3rem;">
						<th>活動快照</th>
						<th>活動名稱</th>
						<th>活動時間</th>
						<th>活動地點</th>
						<th>活動介紹</th>
						<th></th>
					</tr>
					<tr>
						<td><img src="./image/2023聖誕節.jpg" alt=""></td>
						<td>
							<p>聖誕嘉年華</p>
						</td>
						<td>
							<p>2023.12.25</p>
						</td>
						<td>
							<p>台北統一時代百貨</p>
						</td>
						<td>
							<p>我是內容我是內容我是內容我是內容我是內容我是內容我是內容</p>
						</td>


						<td><span style="margin: 2rem;"> <a
								href="./Activity_edit.html"
								class="btn btn-outline-primary btn-sm">編輯</a> | <a href=""
								class="btn btn-outline-danger btn-sm">刪除</a>
						</span></td>

					</tr>
					<tr>
						<td><img src="./image/2023聖誕節.jpg" alt=""></td>
						<td>
							<p>新北耶誕城</p>
						</td>
						<td>
							<p>2023.12.25-2024.01.01</p>
						</td>
						<td>
							<p>新北市</p>
						</td>
						<td>
							<p>我是內容我是內容我是內容我是內容我是內容我是內容我是內容</p>
						</td>
						<td><span style="margin: 2rem;"> <a
								href="./Activity_edit.html"
								class="btn btn-outline-primary btn-sm">編輯</a> | <a href=""
								class="btn btn-outline-danger btn-sm">刪除</a>
						</span></td>
					</tr>
				</table>

				<div class="text-center p-3">
					<small class="text-muted">沒有更多摟~</small>
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