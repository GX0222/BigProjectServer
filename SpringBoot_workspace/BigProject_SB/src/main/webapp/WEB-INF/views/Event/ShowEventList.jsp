<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring"%>
<%@ page import="java.util.List"%>
<%@ page import="java.util.ArrayList"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>

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