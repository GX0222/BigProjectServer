<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring"%>
<%@ page import="java.util.List"%>
<%@ page import="java.util.ArrayList"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>

<div>
			<ul id="infoUlbar" class="nav nav-pills infoUlbar">
				<li class="ulName"><a class="nav-link active"
					aria-current="page" href="#"
					onclick="loadCategoryData('all', this)">全部</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCategoryData(1, this)">休閒旅遊</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCategoryData(2, this)">藝文活動</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCategoryData(3, this)">親子</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCategoryData(4, this)">文創/市集</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCategoryData(5, this)">博物館/美術館</a></li>
			</ul>
			<ul id="countyBar" class="nav nav-pills infoUlbar">
				<!--                 <li class="ulName"> -->
				<!--                     <a class="nav-link active" aria-current="page" href="#">全部</a> -->
				<!--                 </li> -->
				<!--                 <h4 class="noSelect">|</h4> -->
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData('台北市')">台北市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData('新北市')">新北市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData('桃園市')">桃園市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData('台中市')">台中市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData('台南市')">台南市</a></li>
				<h4 class="noSelect">|</h4>
				<li class="ulName"><a class="nav-link" aria-current="page"
					href="#" onclick="loadCountyData('高雄市')">高雄市</a></li>
			</ul>
			<div class="info">
				<ul id="showEvents">
					
					<c:forEach items="${eventList}" var="event" varStatus="loop">
							<li class="dataList">
								<button type="button" onclick="checkLoginAndSubmit(${event.getId()})"
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
							 data-page="${page}">
								${page} </a></li>
					</c:forEach>
					<li class="page-item"><a class="page-link" href="#"
						aria-label="Next"> <span aria-hidden="true">&raquo;</span>
					</a></li>
				</ul>
			</nav>
		</div>