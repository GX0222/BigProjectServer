<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring"%>
<%@ page import="org.springframework.data.domain.Page"%>

<%@ page import="java.util.List"%>
<%@ page import="java.util.ArrayList"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>活動資訊</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
	crossorigin="anonymous">
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
	rel="stylesheet">
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
<link rel="stylesheet" href="/static/Tools/EventList.css">
<!-- Color -->
<link rel="stylesheet" href="/static/Tools/Color.css">
<!-- footer -->
<link rel="stylesheet" href="/static/Tools/footer.css">


<script src="/static/Tools/EventClass.js" defer></script>
<script src="/static/Tools/SelectEvent.js" defer></script>
<script src="/static/Tools/EventListPage.js" defer></script>


</head>

<body>
	<!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp"%>
	<!-- navBar End -->

	<div id="AAAA" class="center">
		<div>
			<ul id="infoUlbar" class="nav nav-pills infoUlbar">
				<li class="ulName"><a id="hall" class="nav-link active"
					aria-current="page" href="#"
					onclick="loadCountyData(this)">全部</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a id="h1" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">休閒旅遊</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a  id="h2" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">藝文活動</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a  id="h3" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">親子</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a  id="h4" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">文創/市集</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a  id="h5" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">博物館/美術館</a></li>
			</ul>
			<ul id="countyBar" class="nav nav-pills infoUlbar">
				<!--                 <li class="ulName"> -->
				<!--                     <a class="nav-link active" aria-current="page" href="#">全部</a> -->
				<!--                 </li> -->
				<!--                 <h4 class="noSelect">|</h4> -->
				<li class="ulName"><a id="c0" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">台北市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a id="c1" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">新北市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a id="c2" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">桃園市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a id="c3" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">台中市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a id="c4" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">台南市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a id="c5" class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData(this)">高雄市</a></li>
			</ul>
			<div class="info">
				<ul id="showEvents">
					<!-- 顯示前十筆資料 -->
					<c:forEach items="${eventList}" var="event" varStatus="loop">
						<c:if test="${(currentPage * pageSize) + loop.index < 10}">
							<li class="dataList">
								<button type="button"
									onclick="checkLoginAndSubmit(${event.getId()})"
									class="favoriteButton">收藏</button>
								<div class="dataDay">${event.getStartTime()}</div>
								<div class="dataCounty">${event.getCounty()}</div> <a
								class="eventLink selectEvent" data-event="${event.getId() }"
								data-track="false">
									<div class="dataInfo">
										<h4>${event.getEventTitle()}</h4>
										${fn:substring(event.getEventInfo(), 0, 100)}
										<c:if test="${fn:length(event.getEventInfo()) > 100}">...</c:if>
									</div>
							</a>
							</li>
						</c:if>
					</c:forEach>
				</ul>
			</div>

			<!-- 分頁元件 -->

			<nav id="" aria-label="Page navigation example" style="padding: 0, auto;">
				<ul class="pagination justify-content-center">
					<li class="page-item"><a class="page-link" href="#"
						aria-label="Previous"> <span aria-hidden="true">&laquo;</span>
					</a></li>
					<c:forEach var="page" begin="1" end="${totalPages}">
						<li class="page-item"><a class="page-link"
							href="<c:url value='/EventListPage' />" data-page="${page}">
								${page} </a></li>
					</c:forEach>
					<li class="page-item"><a class="page-link" href="#"
						aria-label="Next"> <span aria-hidden="true">&raquo;</span>
					</a></li>
				</ul>
			</nav>
		</div>





		<!-- Footer -->
		<%@ include file="../Shared/Footer.jsp"%>
		<!--footer end-->
</body>

</html>