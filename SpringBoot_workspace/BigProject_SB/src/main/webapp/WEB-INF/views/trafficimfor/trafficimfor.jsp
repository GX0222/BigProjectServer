<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib uri="http://www.springframework.org/tags/form" prefix="form" %>
<%@ taglib uri="http://www.springframework.org/tags" prefix="spring" %>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>交通情報</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    
    
 
</head>

<div id="tfIframeContainer" style="margin-top: 4rem;">
    <iframe id="tfYoutubeIframe" src="https://www.1968services.tw/map" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>
<hr />

<body onload="Start()">
    <!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	<!-- NavBar End-->

    <div class="newsCon">
        <div class="newsImgCon">
            <img class="newsImg" src="/static/image/捷運.png" alt="">
        </div>
        <div class="newsTextCon">
            <div class="newsTextBgR">
                <div class="">
                    <br><br>
                    <a id="TfIinfoText" style="display: block; " href="https://www.metro.taipei/"
                        target="_blank">台北捷運</a><br>
                    <a id="TfIinfoText" style="display: block; " href="https://www.tmrt.com.tw/"
                        target="_blank">台中捷運</a><br>
                    <a id="TfIinfoText" style="display: block; " href="https://www.krtc.com.tw//"
                        target="_blank">高雄捷運</a>
                </div>
            </div>
        </div>
    </div>
    <div class="newsCon">
        <div class="newsTextCon">
            <div class="newsTextBgL">
                <br>
                <div class="newsText">
                    <a id="TfIinfoText2" href="https://www.kingbus.com.tw/page.html?seq=3"
                        target="_blank">國光客運</a>&nbsp;
                    <a id="TfIinfoText2" href="https://www.ubus.com.tw/" target="_blank">統聯客運</a><br>
                    <a id="TfIinfoText2" href="https://www.ebus.com.tw/" target="_blank">和欣客運</a>&nbsp;
                    <a id="TfIinfoText2" href="http://www.howtai.com.tw/" target="_blank">豪泰客運</a><br>
                    <a id="TfIinfoText2" href="https://www.solarbus.com.tw/" target="_blank">日統客運</a>&nbsp;
                    <a id="TfIinfoText2" href="http://www.yalanbus.com.tw/" target="_blank">亞聯客運</a><br>
                    <a id="TfIinfoText2" href="https://www.tcbus.com.tw//" target="_blank">台中客運</a>&nbsp;
                    <a id="TfIinfoText2" href="http://www.airbus.com.tw/WebMaster/" target="_blank">大有巴士</a><br>
                    <a id="TfIinfoText2" href="https://www.mtcbus.com.tw/" target="_blank">大都會客運</a><br>
                    <a id="TfIinfoText2" href="https://www.kamalan.com.tw/index" target="_blank">葛瑪蘭客運</a><br>
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
                    <br>
                    <a id="TfIinfoText3" href="https://www.car-plus.com.tw/" target="_blank">格上租車</a><br>
                    <a id="TfIinfoText3" href="https://www.easyrent.com.tw/index.html"
                        target="_blank">和運租車</a><br>
                    <a id="TfIinfoText3" href="https://www.rentalcar.com.tw/" target="_blank">中租租車</a><br>
                    <a id="TfIinfoText3" href="https://www.ponyrent.com.tw/index.php"
                        target="_blank">小馬租車</a><br>
                    <a id="TfIinfoText3" href="https://www.avis-taiwan.com/index.php"
                        target="_blank">艾維士租車</a><br>
                    <a id="TfIinfoText3" href="https://www.iws.com.tw/index.html" target="_blank">艾旺租車</a>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
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
    <!--footer end-->


</body>

</html>

