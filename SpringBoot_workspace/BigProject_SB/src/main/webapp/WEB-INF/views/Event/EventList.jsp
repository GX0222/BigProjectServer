<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring"%>


<%@ page import="java.util.List" %>
<%@ page import="java.util.ArrayList" %>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>活動資訊</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- SimpleBar-->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <!-- NavBar -->
    <link rel="stylesheet" href="/static/Tools/NavBar_2.css">
    <!-- Css -->
    <link rel="stylesheet" href="/static/Tools/EventList.css">
    <!-- Color -->
    <link rel="stylesheet" href="/static/Tools/Color.css">
    <!-- footer -->
    <link rel="stylesheet" href="/static/Tools/footer.css">
 
</head>

<body>
    <!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	
    <div class="center">
        <div class="pageTitle">
            <h3>休閒旅遊</h3>
        </div>
        <div>
            <ul id="infoUlbar" class="nav nav-pills infoUlbar">
                <li class="ulName">
                    <a class="nav-link active" aria-current="page" href="#">休閒旅遊</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">藝文活動</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">親子</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">文創/市集</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">博物館/美術館</a>
                </li>
            </ul>
            <ul id="countyBar" class="nav nav-pills infoUlbar">
                <li class="ulName">
                    <a class="nav-link active" aria-current="page" href="#">台北市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">新北市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">桃園市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">台中市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">台南市</a>
                </li>
                <h4 class="noSelect">|</h4>
                <li class="ulName">
                    <a class="nav-link" aria-current="page" href="#">高雄市</a>
                </li>
            </ul>
        
            <div class="info">
                <ul>
                	<c:forEach items="${eventPageBean.items}" var="event">
                	
                    <li class="dataList">
                        <div class="dataDay">${event.getStartTime() }</div>
                        <a href="/Event">
                            <div class="dataImg">
                                <img src="/static/image/2023聖誕節.jpg">
                            </div>
                            
                            <!-- 使用一個普通的按鈕，點擊時呼叫JavaScript函數 -->
				            <button onclick="checkLoginAndSubmit(${event.getId()})" class="favoriteButton">收藏</button>
				
				            <!-- 表單用來提交收藏 -->
				            <form id="loveForm" action="Love.jsp" method="post">
				                <input type="hidden" id="eventIdInput" name="eventId" value="">
				            </form>
                            
                            <div class="dataText">
                                <div class="dataCounty">
                                    ${event.getCounty() }
                                </div>
                                <div class="dataInfo">
                                    ${event.getEventInfo() }
                                </div>
                            </div>
                        </a>
                    </li>
                    
                    </c:forEach>
                    
                </ul>

    <!-- Footer -->
	<%@ include file="../Shared/Footer.jsp" %>
	<!--footer end-->
	
    <!-- script -->
	<script src="EventListToLove.js"></script>
	<!-- script end -->
	
</body>

</html>