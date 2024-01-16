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

<div id="wtSelect" class="wtSelect">
	123123
</div>