<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>周末跟我趣</title>

    <!-- <link rel="stylesheet" href="Tools/info.css"> -->
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
    <!-- 背景影片css -->
    <link rel="stylesheet" href="Tools/Bg_YTiframe.css">
    <!-- 背景影片js -->
    <script src="https://www.youtube.com/iframe_api" defer></script>
    <script src="Tools/Bg_YTiframe.js" defer></script>
    <!-- Gruop_City.css -->
    <link rel="stylesheet" href="Tools/Gruop_City.css">
    <!-- Group_News.css -->
    <link rel="stylesheet" href="Tools/Group_News.css">
    <!-- NavBar.js -->
    <script src="Tools/NavBar.js" defer></script>
    <!-- NavBar.css -->
    <link rel="stylesheet" href="Tools/NavBar.css">
    <!-- SimpleBar -->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <!-- Color -->
    <link rel="stylesheet" href="./Tools/Color.css">
    <!-- Footer.css -->
    <link rel="stylesheet" href="./Tools/footer.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./Tools/index.css">

    <style>

    </style>
</head>
<div id="iframeContainer">
    <iframe id="youtubeIframe"
        src="https://www.youtube.com/embed/wIf-HN15URA?autoplay=1&controls=0&showinfo=0&rel=0&modestbranding=1&mute=1&loop=1&disablekb=1&enablejsapi=1"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>

<body>

    <div id="overlayDiv">
        <!-- navBar -->
        <nav id="myNavbar" class="navbar bg-none w-100 fixed-top m-0 p-0" style=" top: 0px;">
            <div class="container-fluid m-0 p-0 h-100">
                <div class="row m-0 p-0 h-100">
                    <div id="mynavbarCon" class="col-12 d-flex justify-content-between align-items-center">
                        <a href="<c:url value='/' />" class="navbar-brand" style="font-size:x-large;">
                            <img src="<c:url value='/image/logo1228.png' />" alt="logo" width="65" height="50">
                        </a>
                        <div class="memberConMd d-flex">
                            <div class="nameCon">
                                <a href="<c:url value='/Member' />">
                                    <img class="rounded-circle img-fluid" src="<c:url value='/image/IMG_0987.JPG' />" alt="">
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="collapseCon">
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a id="news" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="<c:url value='/Favor' />">活動資訊</a>
                                </li>
                                <li class="nav-item">
                                    <a id="trans" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="./trafficimfor/">交通情報</a>
                                </li>
                                <li class="nav-item">
                                    <a id="forum" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="#">旅遊論壇</a>
                                </li>
                                <li class="nav-item">
                                    <a id="aboutus" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                        href="#">關於我們</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input id="search_input" class="form-control me-2" type="search" placeholder="搜尋"
                                    aria-label="Search">
                                <button id="search_btn" class="btn btn-outline-success" type="submit">
                                    <span class="material-icons" style="vertical-align: middle;">
                                        search
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- ========== -->
    <div id="newBG" class="row justify-content-center">

        <!-- -----offcanvas----- -->
        <div id="myOffcanvas" class="fixedDiv">
            <a class="btn btn-primary OffcanBtn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <img src="<c:url value='/image/OffcanvasIcon.png"' /> class="img-fluid">
            </a>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="weatherDivOff">
                    <div class="row p-0 m-0">
                        <div class="weatherColOff col-4">
                            <div class="weatherBlock">台中市</div>
                        </div>
                        <div class="weatherColOff col-4">
                            <div class="weatherBlock">24C</div>
                        </div>
                        <div class="weatherColOff col-4">
                            <div class="weatherBlock">
                                降雨機率：20%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="couponGroup" data-simplebar>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                    <div class="couponCon">
                        晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                    </div>
                </div>
            </div>
        </div>
        <!-- -----pageInfo----- -->
        <div class="homeCenter col-12 col-md-9 order-2 order-md-1">
            <div class="row m-0 p-0 w-100">
                <div class="col m-0 p-0">
                    <a href="<c:url value='/Favor' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/image/a011.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="<c:url value='/Favor' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/image/a012.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="<c:url value='/Favor' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/image/a013.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="<c:url value='/Favor' />" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/image/a014.png' />">
                        </div>
                    </a>
                </div>
                <div class="col m-0 p-0">
                    <a href="../Ian/index.html" class="aa">
                        <div class="classIcon">
                            <img src="<c:url value='/image/a015.png' />">
                        </div>
                    </a>
                </div>
            </div>
            <!-- ---------- -->
            <div id="groupNews" class="">
                <div class="groupTitle">
                    <h3>最新消息</h3>
                </div>
                <a href="<c:url value='/Event.html' />" class="newsA">
                    <div id="news1" class="newsCon">
                        <div class="newsImgCon">
                            <img class="newsImg" src="<c:url value='/image/2023聖誕節.jpg' />" alt="">
                        </div>
                        <div class="newsTextCon">
                            <div class="newsTextBgR">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<c:url value='/Event' />" class="newsA">
                    <div id="news2" class="newsCon">
                        <div class="newsTextCon">
                            <div class="newsTextBgL">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                        <div class="newsImgCon">
                            <img class="newsImg" src="<c:url value='/image/2023聖誕節.jpg' />" alt="">
                        </div>
                    </div>
                </a>

            </div>
            <!-- ---------- -->
            <div id="groupCity" class="">
                <div class="groupTitle">
                    <h3>縣市踩點</h3>
                </div>
                <div class="row justify-content-center m-0 p-0">
                    <div class="col-12 col-lg-8 m-0 p-0">
                        <div class="row justify-content-center m-0 p-0">

                            <div class="cityCol col-6">
                                <a href="<c:url value='/Favor' />" class="newsA">
                                    <div class="cityDiv card">
                                        <img class="cityImg rounded card-img-top" src="<c:url value='/image/台北市.png' />">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">台北市</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="cityCol col-6">
                                <a href="<c:url value='/Favor' />" class="newsA">
                                    <div class="cityDiv card">
                                        <img class="cityImg rounded card-img-top" src="<c:url value='/image/新北市.png' />">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title">新北市</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cityCol col-0 col-lg-4">
                        <a href="<c:url value='/Favor' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImgV2 rounded card-img-top" src="<c:url value='/image/桃園市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">桃園市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="row justify-content-center m-0 p-0">
                    <div class="cityColV2 col-4">
                        <a href="<c:url value='/Favor' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImg rounded card-img-top" src="<c:url value='/image/台中市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">台中市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cityColV2 col-4">
                        <a href="<c:url value='/Favor' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImg rounded card-img-top" src="<c:url value='/image/台南市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">台南市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cityColV2 col-4">
                        <a href="<c:url value='/Favor' />" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImg rounded card-img-top" src="<c:url value='/image/高雄市.png' />">
                                <div class="card-img-overlay">
                                    <h3 class="card-title">高雄市</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>

        <!-- ---------- -->

        <div class="homeRight col-0 col-md-3 order-1 order-md-2">
            <div class="weatherDiv">
                <div class="row p-0 m-0">
                    <div class="weatherColTop col-6 col-xxl-4">
                        <div class="weatherBlock">台中市</div>
                    </div>
                    <div class="weatherColTop col-6 col-xxl-4">
                        <div class="weatherBlock">24C</div>
                    </div>
                    <div class="weatherColSm col-12">
                        <div class="weatherBlock">台中市：24C</div>
                    </div>
                    <div class="weatherCol col col-xxl-4">
                        <div class="weatherBlock">
                            降雨機率：20%
                        </div>
                    </div>
                </div>
            </div>
            <div class="couponGroup" data-simplebar>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
                </div>
                <div class="couponCon">
                    晶英旅店 2/30 入住，雙人房一晚只要 50 元!!!
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


    <script>
        $(document).ready(function () {
            $('#myOffcanvas').on('click', function () {
                if (!$('#offcanvasExample').hasClass('show')) {
                    $('.fixedDiv').animate({ right: '350px' }, 300);
                    $('.fixedDiv').animate({ right: '0' }, 100);
                }
            });
        });


    </script>
</body>

</html>