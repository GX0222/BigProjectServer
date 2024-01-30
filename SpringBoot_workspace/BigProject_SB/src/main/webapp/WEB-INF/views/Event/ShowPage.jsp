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
						<li class="page-item">
							<a class="page-link" data-page="${page}" id="p${page}">
								${page} 
							</a>
						</li>
					</c:forEach>
					<li class="page-item"><a class="page-link" href="#"
						aria-label="Next"> <span aria-hidden="true">&raquo;</span>
					</a></li>
				</ul>
			</nav>
		</div>