<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>休閒旅遊</title>
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
    <link rel="stylesheet" href="/static/Tools/Even.css">
    <!-- Color -->
    <link rel="stylesheet" href="/static/Tools/Color.css">
    <!-- footer -->
    <link rel="stylesheet" href="/static/Tools/footer.css">
    <!-- 收藏的愛心 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<!-- 收藏的js -->
	<script src="/static/Tools/eventFavor.js" defer></script>
</head>

<body>
    <!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	
	
	
	

	
<%-- 	<c:if test="${empty eventFavorBean}"> --%>
<!-- 		<p>No Event Favor Data</p> -->
<%-- 	</c:if> --%>
	
	<div class="info">
        <div class="center">
            <div class="eTitle">
                <h1>${eventData.getEventTitle()}</h1>
            </div>
        </div>
        <div class="eImgCon">
<!--             <img src="/static/image/2023聖誕節.jpg" alt=""> -->
            <img src="${EventImg}" alt="">
        </div>
        <br><br><br>
        <div>
        <button class ="eventFavor ${efbID == '有收藏' ? 'hasfavor' : ''}" data-event="${eventData.getId()}" data-member="${memberData.getMemberId() }">
				<span   class="material-symbols-outlined"> favorite收藏</span></button>
        </div>
        <div class="eInfo">
            <table class="table" style="text-align: center;">    <!-- 加入 style="text-align: center;" -->
                <thead class="thead-light">
                    <tr>
                        <th>活動時間</th>
                        <th>活動地點</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >${eventData.getEventTime()}</td>
                        <td >${eventData.getLocation()}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="eTextCon">
            <p>  ${eventData.getEventInfo()}</p>
        </div>
        <!-- Map -->
        <div class="eMapCon">
            <div class="eMapTitle">
                <h3>Google地圖</h3>
            </div>
            <iframe width="600" height="450" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=${eventData.getLocation()}&key=AIzaSyDCy0RwqQowmqnP461gmyRgD5hbhN5Uolg"
                allowfullscreen>
            </iframe>
        </div>
        <!-- ===== -->

        <!-- footer -->
        <div class="row footer" style="margin-top: 3%;">
            <div style="text-align: center;">
                <div class="ftinfo">
                    <h3>隱私權政策</h3>
                </div>
            </div>
            <div class="ftinfo">
                <h4>個人資料蒐集之目的與類別</h4>
                <p>為了提供電子商務服務、履行法定義務、保護當事人及相關利害關係人之權益、行銷、客戶管理與服務
                    ，依照各服務之性質，有可能會蒐集您的姓名、連絡方式(包括但不限於電話、E-MAIL及地址等)、
                    、IP位址、及其他得以直接或間接識別使用者身分之個人資料。
                    此外，為提升服務品質，周末跟我趣會依照所提供服務之性質，記錄使用者的IP位址、以及在周末跟
                    我趣相關網站的瀏覽活動(如，使用者所使用的軟硬體、所點選的網頁)等資料，但是這些資料僅供作
                    流量分析和網路行為調查，以便於改善周末跟我趣相關網站的服務品質，不會和特定個人相連繫。
                </p>
            </div>
            <div class="ftinfo">
                <h4>Cookie</h4>
                <p>為了便利使用者，周末跟我趣網站可能會讀取儲存在使用者電腦中的cookie資料。使用者可以經由
                    瀏覽器的設定，取消或限制此項功能，但可能因此無法使用部份網站功能。
                </p>
            </div>
            <div class="ftinfo">
                <h4>本隱私權政策修訂權利</h4>
                <p>周末跟我趣有權隨時修訂本隱私權聲明及相關告知事項，並得於修訂後公佈在周末跟我趣網站，
                    不另行個別通知，您可以隨時在周末跟我趣網站上詳閱修訂後的隱私權聲明及相關告知事項。
                </p>
            </div>

        </div>

        <div class="row st">
            <div>
                <p><small>&copy; 2023-2024 EEIT73結訓發表成果-周末跟我趣 </small></p>
            </div>
        </div>
    </div>
</body>

</html>