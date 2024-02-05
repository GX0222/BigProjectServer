<%@ page import="java.util.ArrayList" %>
<%@ page import="java.util.List" %>
<%@ page import ="com.web.store.model.EventsBean" %>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/functions" prefix="fn"%>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的收藏</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- SimpleBar-->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <!-- NavBar -->
    <link rel="stylesheet" href="/static/Tools/NavBar_2.css">
    <!-- Css -->
    <link rel="stylesheet" href="/static/Tools/Membe.css">
    <link rel="stylesheet" href="/static/Tools/Love.css">
    <link rel="stylesheet" href="/static/Tools/footer.css">
    <!-- Color -->
    <link rel="stylesheet" href="/static/Tools/Color.css">
	<!-- Select Event -->
	<script src="/static/Tools/selectEvent.js" defer></script>
	<style>
	a {
		text-decoration: none; /* 移除底線 */
	}
	</style>



</head>

<body>
    <!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	<div class="bgCon">
        <!-- HomeLeft -->
        <%@ include file="Shared/HomeLeft.jsp" %>

        <div class="homeRight">
            <div class="infoCon">
                <div class="dataRow m-0 p-0">


<%-- 					<c:if test="${not empty eventDataList}"> --%>
					
<%-- 					 <c:forEach var="eventData" items="${eventDataList}"> --%>
						<%List<Object> out2 = (List<Object>) request.getAttribute("eventDataList");
	
						// 获取eventDataList和imgstr
						List<EventsBean> eventData = (List<EventsBean>) out2.get(0);
						List<String> imgstr = (List<String>) out2.get(1);
						for (int i = 0; i < eventData.size(); i++) {
							%>

							<div class="dataCon selectEvent" data-event="<%=eventData.get(i).getId()%>">
<!-- 								<div class="material-symbols-outlined">favorite</div> -->
								<div class="imgCon">
<%-- 									<img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
									<img src="<%=imgstr.get(i) %>" >
<%-- 									<img src="${EventImg}"> --%>
								</div>
<%-- 						<c:if test="${not empty eventData.get(i).getEventTitle()}"> --%>
						<% if(eventData.get(i).getEventTitle()!=null){
							String trimmedInfo;
							if(eventData.get(i).getEventTitle().length() >14){
								trimmedInfo=eventData.get(i).getEventTitle().substring(0,14);
							}else{
								trimmedInfo=eventData.get(i).getEventTitle();
							}
							%>
<%-- 							<c:set  var="trimmedInfo" --%>
<%-- 								value="${fn:substring(eventData.get(i).getEventTitle(), 0, 14)}" /> --%>
<%-- 								value="${fn:substring(eventData.get(i).getEventTitle(), 0, 14)}" /> --%>
<%-- 							${trimmedInfo} --%>
								<div class="dataTitle ">
<%-- 									${trimmedInfo} --%>
									<%=trimmedInfo%>
								</div>
<%-- 								<c:if test="${fn:length(eventData.get(i).getEventTitle()) > 14}"> --%>

<%-- 						    </c:if> --%>
<%-- 						</c:if> --%>
						<%} %>
<%-- 							<div class="dataTitle">${eventData.getEventTitle()}</div> --%>

<%-- 								<div class="dataTime">${eventData.get(i).getEventTime()}</div> --%>
								<div class="dataTime"><%=eventData.get(i).getEventTime()%></div>
<%-- 								<div class="dataPosi">${eventData.get(i).getLocation()}</div> --%>
								<div class="dataPosi"><%=eventData.get(i).getLocation()%></div>
							</div>

<%-- 					</c:forEach> --%>
						<%} %>
<%-- 					</c:if> --%>
					
					
					
<!--                     <div class="dataCon"> -->
<!--                         <div class="material-symbols-outlined"> -->
<!--                             favorite -->
<!--                         </div> -->
<!--                         <div class="imgCon"> -->
<%--                             <img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
<!--                         </div> -->
<!--                         <div class="dataTitle BGC_Gray"> -->
<!--                             2023聖誕節 -->
<!--                         </div> -->
<!--                         <div class="dataTime BGC_Gray"> -->
<!--                             1月29日 ~ 2月31日 -->
<!--                         </div> -->
<!--                         <div class="dataPosi BGC_Gray"> -->
<!--                             地點：台中市西區健行路1049號金典綠園道商場三樓 -->
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="dataCon"> -->
<!--                         <span class="material-symbols-outlined"> -->
<!--                             favorite -->
<!--                         </span> -->
<!--                         <div class="imgCon"> -->
<%--                             <img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
<!--                         </div> -->
<!--                         <div class="dataTitle BGC_Gray"> -->
<!--                             2023聖誕節 -->
<!--                         </div> -->
<!--                         <div class="dataTime BGC_Gray"> -->
<!--                             1月29日 ~ 2月31日 -->
<!--                         </div> -->
<!--                         <div class="dataPosi BGC_Gray"> -->
<!--                             地點：台中市西區健行路1049號金典綠園道商場三樓 -->
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="dataCon"> -->
<!--                         <span class="material-symbols-outlined"> -->
<!--                             favorite -->
<!--                         </span> -->
<!--                         <div class="imgCon"> -->
<%--                             <img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
<!--                         </div> -->
<!--                         <div class="dataTitle BGC_Gray"> -->
<!--                             2023聖誕節 -->
<!--                         </div> -->
<!--                         <div class="dataTime BGC_Gray"> -->
<!--                             1月29日 ~ 2月31日 -->
<!--                         </div> -->
<!--                         <div class="dataPosi BGC_Gray"> -->
<!--                             地點：台中市西區健行路1049號金典綠園道商場三樓 -->
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="dataCon"> -->
<!--                         <span class="material-symbols-outlined"> -->
<!--                             favorite -->
<!--                         </span> -->
<!--                         <div class="imgCon"> -->
<%--                             <img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
<!--                         </div> -->
<!--                         <div class="dataTitle BGC_Gray"> -->
<!--                             2023聖誕節 -->
<!--                         </div> -->
<!--                         <div class="dataTime BGC_Gray"> -->
<!--                             1月29日 ~ 2月31日 -->
<!--                         </div> -->
<!--                         <div class="dataPosi BGC_Gray"> -->
<!--                             地點：台中市西區健行路1049號金典綠園道商場三樓 -->
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="dataCon"> -->
<!--                         <span class="material-symbols-outlined"> -->
<!--                             favorite -->
<!--                         </span> -->
<!--                         <div class="imgCon"> -->
<%--                             <img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
<!--                         </div> -->
<!--                         <div class="dataTitle BGC_Gray"> -->
<!--                             2023聖誕節 -->
<!--                         </div> -->
<!--                         <div class="dataTime BGC_Gray"> -->
<!--                             1月29日 ~ 2月31日 -->
<!--                         </div> -->
<!--                         <div class="dataPosi BGC_Gray"> -->
<!--                             地點：台中市西區健行路1049號金典綠園道商場三樓 -->
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="dataCon"> -->
<!--                         <span class="material-symbols-outlined"> -->
<!--                             favorite -->
<!--                         </span> -->
<!--                         <div class="imgCon"> -->
<%--                             <img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
<!--                         </div> -->
<!--                         <div class="dataTitle BGC_Gray"> -->
<!--                             2023聖誕節 -->
<!--                         </div> -->
<!--                         <div class="dataTime BGC_Gray"> -->
<!--                             1月29日 ~ 2月31日 -->
<!--                         </div> -->
<!--                         <div class="dataPosi BGC_Gray"> -->
<!--                             地點：台中市西區健行路1049號金典綠園道商場三樓 -->
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="dataCon"> -->
<!--                         <span class="material-symbols-outlined"> -->
<!--                             favorite -->
<!--                         </span> -->
<!--                         <div class="imgCon"> -->
<%--                             <img src="<c:url value='/static/image/2023聖誕節.jpg' />"> --%>
<!--                         </div> -->
<!--                         <div class="dataTitle BGC_Gray"> -->
<!--                             2023聖誕節 -->
<!--                         </div> -->
<!--                         <div class="dataTime BGC_Gray"> -->
<!--                             1月29日 ~ 2月31日 -->
<!--                         </div> -->
<!--                         <div class="dataPosi BGC_Gray"> -->
<!--                             地點：台中市西區健行路1049號金典綠園道商場三樓 -->
<!--                         </div> -->
<!--                     </div> -->
                </div>
                <div class="text-center p-3">
                    <small class="text-muted">沒有更多摟~</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
	<%@ include file="../Shared/Footer.jsp" %>

    <script>
        $(document).ready(function () {




        });
    </script>

</body>

</html>