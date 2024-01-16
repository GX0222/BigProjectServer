<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring"%>

<!DOCTYPE html>
<div class="weatherDiv" id="weatherTool">
	<div class="row p-0 m-0">
		<div class="weatherColTop col-6 col-xxl-4">
			<div class="weatherBlock">台南市<br>將軍區</div>
		</div>
		<div class="weatherColTop col-6 col-xxl-4">
			<div class="weatherBlock">${temp }℃</div>
		</div>
		<div class="weatherColSm col-12">
			<div class="weatherBlock">台南市 將軍區<br>${temp }℃</div>
		</div>
		<div class="weatherCol col col-xxl-4">
			<div class="weatherBlock">${weather }</div>
		</div>
	</div>
</div>

<div id="wtSelect">
	<div id="countyDivID" class="simplebar-content-wrapper countyDiv" data-simplebar>
		<div  style="width: 200px; padding: 0px;">
			<c:forEach items="${countys }" var="county">
				<div class="countyRow"><a class="countyLink" data-county="${county}">${county }</a></div>
			</c:forEach>               
		</div>
    </div>
	<div id="townDivID" class="simplebar-content-wrapper townDiv" data-simplebar>
		<div  style="width: 200px; padding: 0px;">
		</div>
	</div>
</div>

