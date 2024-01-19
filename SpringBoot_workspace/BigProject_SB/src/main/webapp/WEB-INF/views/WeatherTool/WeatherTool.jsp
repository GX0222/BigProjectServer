<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring"%>

<!DOCTYPE html>
<div class="weatherDiv" id="weatherTool">
	<div class="row p-0 m-0">
		<div class="weatherColTop col-6 col-xxl-4">
			<div class="weatherBlock">${county1st }<br>${town1st }</div>
		</div>
		<div class="weatherColTop col-6 col-xxl-4">
			<div class="weatherBlock">${temp1st }℃</div>
		</div>
		<div class="weatherColSm col-12">
			<div class="weatherBlock">${county1st } ${town1st }<br>${temp1st }℃</div>
		</div>
		<div class="weatherCol col col-xxl-4">
			<div class="weatherBlock">${weather1st }</div>
		</div>
	</div>
</div>

<div id="wtSelect">
	<div class="wtHead">
		<span id="wtClose" class="material-symbols-outlined">
			close
		</span>
	</div>
	<div class="simpleBarCon">
		<div id="countyDivID" class="simplebar-content-wrapper countyDiv" data-simplebar>
			<div>
				<c:forEach items="${countys }" var="county">
					<div class="countyRow"><div class="countyLink" data-county="${county}">${county }</div></div>
				</c:forEach>               
			</div>
		</div>
		<div id="townDivID" class="simplebar-content-wrapper townDiv" data-simplebar>
			<div>
			</div>
		</div>
	</div>
</div>

