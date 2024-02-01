<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib uri="http://www.springframework.org/tags/form" prefix="form"%>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring"%>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>交通情報</title>

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
<!-- SockJS -->
<script
	src="https://cdn.jsdelivr.net/npm/sockjs-client@1/dist/sockjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@stomp/stompjs@5.0.0/bundles/stomp.umd.js"></script>

<!-- NavBar -->
<link rel="stylesheet" href="/static/Tools/NavBar_2.css">

<!-- Traffic_Info Css -->
<link rel="stylesheet" href="/static/Tools/Traffic_Info.css">
<!-- Tf_iframe Css -->
<link rel="stylesheet" href="/static/Tools/Tf_iframe.css">
<!-- Gruop_City.css -->
<link rel="stylesheet" href="/static/Tools/Gruop_City.css">
<!-- Group_News.css -->
<link rel="stylesheet" href="/static/Tools/Group_News.css">
<!-- Color -->
<link rel="stylesheet" href="/static/Tools/Color.css">
<!-- footer -->
<link rel="stylesheet" href="/static/Tools/footer.css">
<!-- JS -->
<script src="/static/Tools/WebSocket.js"></script>


</head>

<div id="tfIframeContainer" style="margin-top: 4rem;">
	<iframe id="tfYoutubeIframe" src="https://www.1968services.tw/map"
		frameborder="0"
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
		allowfullscreen> </iframe>
</div>
<hr />

<body onload="Start()">
	<!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp"%>
	<!-- NavBar End-->
	<div id="WSTest"></div>
	<div class="newsCon">
		<div class="newsImgCon">
			<img class="newsImg" src="/static/image/捷運.png" alt="">
		</div>
		<div class="newsTextCon">
			<div class="newsTextBgR">
				<div class="">
					<br> <br> <a id="TfIinfoText" style="display: block;"
						href="https://www.metro.taipei/" target="_blank">台北捷運</a><br>
					<a id="TfIinfoText" style="display: block;"
						href="https://www.tmrt.com.tw/" target="_blank">台中捷運</a><br>
					<a id="TfIinfoText" style="display: block;"
						href="https://www.krtc.com.tw//" target="_blank">高雄捷運</a>
				</div>
			</div>
		</div>
	</div>
	<div class="newsCon">
		<div class="newsTextCon">
			<div class="newsTextBgL">
				<br>
				<div class="newsText">
					<a id="TfIinfoText2"
						href="https://www.kingbus.com.tw/page.html?seq=3" target="_blank">國光客運</a>&nbsp;
					<a id="TfIinfoText2" href="https://www.ubus.com.tw/"
						target="_blank">統聯客運</a><br> <a id="TfIinfoText2"
						href="https://www.ebus.com.tw/" target="_blank">和欣客運</a>&nbsp; <a
						id="TfIinfoText2" href="http://www.howtai.com.tw/" target="_blank">豪泰客運</a><br>
					<a id="TfIinfoText2" href="https://www.solarbus.com.tw/"
						target="_blank">日統客運</a>&nbsp; <a id="TfIinfoText2"
						href="http://www.yalanbus.com.tw/" target="_blank">亞聯客運</a><br>
					<a id="TfIinfoText2" href="https://www.tcbus.com.tw//"
						target="_blank">台中客運</a>&nbsp; <a id="TfIinfoText2"
						href="http://www.airbus.com.tw/WebMaster/" target="_blank">大有巴士</a><br>
					<a id="TfIinfoText2" href="https://www.mtcbus.com.tw/"
						target="_blank">大都會客運</a><br> <a id="TfIinfoText2"
						href="https://www.kamalan.com.tw/index" target="_blank">葛瑪蘭客運</a><br>
				</div>
			</div>
		</div>
		<div class="newsImgCon">
			<img class="newsImg" src="/static/image/客運2.jpg" alt="">
		</div>
	</div>
	<div class="newsCon">
		<div class="newsImgCon">
			<img class="newsImg" src="/static/image/租車2.png" alt="">
		</div>
		<div class="newsTextCon">
			<div class="newsTextBgR">
				<div class="newsText">
					<br> <a id="TfIinfoText3" href="https://www.car-plus.com.tw/"
						target="_blank">格上租車</a><br> <a id="TfIinfoText3"
						href="https://www.easyrent.com.tw/index.html" target="_blank">和運租車</a><br>
					<a id="TfIinfoText3" href="https://www.rentalcar.com.tw/"
						target="_blank">中租租車</a><br> <a id="TfIinfoText3"
						href="https://www.ponyrent.com.tw/index.php" target="_blank">小馬租車</a><br>
					<a id="TfIinfoText3" href="https://www.avis-taiwan.com/index.php"
						target="_blank">艾維士租車</a><br> <a id="TfIinfoText3"
						href="https://www.iws.com.tw/index.html" target="_blank">艾旺租車</a>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<%@ include file="../Shared/Footer.jsp"%>
	<!--footer end-->


</body>

</html>

