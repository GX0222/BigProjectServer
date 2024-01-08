<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        精品典藏
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./Tools/jquery.js"></script>
    <script type="text/javascript" src="./Tools/bootstrap.bundle.js"></script>
    <!-- <script src="./Tools/bootstrap.bundle.js"> -->
    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- SimpleBar-->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <!-- NavBar -->
    <link rel="stylesheet" href="./Tools/NavBar_2.css">
    <link rel="stylesheet" href="./Tools/Membe.css">
    <link rel="stylesheet" href="./Tools/bootstrap.css">
    <style>
        .homeLeft_1 {
            min-width: 220px;
            max-height: 100%;
            height: 100vh;
            /* background-color: aqua; */
            margin: 0px;
            padding: 40px;
            background-color: rgba(194, 150, 107, 0.178);
        }

        .homeLeft_1 ul li {
            list-style-type: none;
        }

        .homeLeft_1>ul>li {
            margin-left: -10px;
        }

        .item {
            width: 100%;
            border-radius: 2vw;
            padding: 5%;

        }

        .card {
            /* height: 18vw; */
            /* padding:0.5vw; */
            /* max-width: 100%; */
            /* max-height: 100%; */
            /* height: 350px; */
            aspect-ratio: 1/1.8;
            background-color: rgba(255, 255, 255, 0);
            border: 3px solid rgba(255, 255, 255, 0);
            margin-buttom: 4vh;
        }

        .bgCon_1 {
            margin: 0px;
            margin-top: 30px;
            padding: 0px;
            min-width: 500px;
            width: 100%;
            /* border: 1px solid black; */
            display: inline-flex;
        }

        .menu {
            margin-top:5px
            /* height:30px; */
        }
    </style>
</head>

<body style="background-color: azure;" onload="kind_A()">
    <nav id="myNavbar" class="navbar navbar-expand-md bg-none w-100 fixed-top m-0 p-0" style="top: 0px;">
        <div class="container-fluid m-0 p-0 h-100">
            <a href="<c:url value='/' />" class="navbar-brand m-0 p-0" style="font-size: x-large;"> <img
                    src="<c:url value='/image/logo1228.png' />" class=" m-0 p-0" alt="logo" width="65" height="50">
            </a>
            <div class="memberConMd d-flex d-md-none">
                <div class="nameCon">
                    <a href="<c:url value='/Member' />"> <img class="rounded-circle img-fluid"
                            src="<c:url value='/image/IMG_0987.JPG' />" alt="">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto mb-0">
                    <li class="nav-item"><a id="news" onclick="nav_item_active()" class="nav-link" aria-current="page"
                            href="<c:url value='/Favor' />">活動資訊</a></li>
                    <li class="nav-item"><a id="trans" onclick="nav_item_active()" class="nav-link" aria-current="page"
                            href="<c:url value='/trafficimfor' />">交通情報</a></li>
                    <li class="nav-item"><a id="forum" onclick="nav_item_active()" class="nav-link" aria-current="page"
                            href="<c:url value='' />">旅遊論壇</a></li>
                    <li class="nav-item"><a id="aboutus" onclick="nav_item_active()" class="nav-link"
                            aria-current="page" href="<c:url value='' />">關於我們</a></li>
                </ul>
                <div class="memberCon d-none d-md-flex">
                    <div class="nameCon">
                        <a href="<c:url value='/Member' />"> <img class="rounded-circle img-fluid"
                                src="<c:url value='/image/IMG_0987.JPG' />" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="bgCon_1">
        <div class="homeLeft_1 position-fixed">
            <h5 style="margin-top:25px">主題選品</h5>
            <ul>
                <li class="menu"><a class="aa" href="javascript:kind_A();">風格單品</a></li>
                <li class="menu"><a class="aa" href="javascript:kind_B();">餐桌 最美食景</a></li>
                <li class="menu"><a class="aa" href="javascript:kind_C();">清明上河圖 系列</a></li>
                <li class="menu"><a class="aa" href="javascript:kind_D();">佛經特集</a></li>
                <li class="menu"><a class="aa" href="javascript:kind_E();">送禮指南</a></li>
                <li class="menu"><a class="aa" href="javascript:kind_F();">長輩祝壽</a></li>
                <li class="menu"><a class="aa" href="javascript:kind_G();">翠玉白菜 系列</a></li>
            </ul>
            <hr>
            <h5>活動專區</h5>
            <ul>
                <li><a class="aa" href="<c:url value='/List' />">我的活動</a></li>
                <li><a class="aa" href="<c:url value='/Update' />">上架活動</a></li>
            </ul>
        </div>
        <div id="items" class="col-sm-7 col-md-8 col-lg-9 row container" style="margin-left: 250px; margin-top: 50px;">




        </div>
    </div>
</div>


<script>
    function kind_A() {
        $("#items").empty();
        $.ajax({
            url:"kindA.php",
            success: function (response) {
                $("#items").append(response);
            }
        }); 
    }
    function kind_B() {
        $("#items").empty();
        $.ajax({
            url:"kindB.php",
            success: function (response) {
                $("#items").append(response);
            }
        }); 
    }
    function kind_C() {
        $("#items").empty();
        $.ajax({
            url:"kindC.php",
            success: function (response) {
                $("#items").append(response);
            }
        }); 
    }
    function kind_D() {
        $("#items").empty();
        $.ajax({
            url:"kindD.php",
            success: function (response) {
                $("#items").append(response);
            }
        }); 
    }
    function kind_E() {
        $("#items").empty();
        $.ajax({
            url:"kindE.php",
            success: function (response) {
                $("#items").append(response);
            }
        }); 
    }
    function kind_F() {
        $("#items").empty();
        $.ajax({
            url:"kindF.php",
            success: function (response) {
                $("#items").append(response);
            }
        }); 
    }
    function kind_G() {
        $("#items").empty();
        $.ajax({
            url:"kindG.php",
            success: function (response) {
                $("#items").append(response);
            }
        }); 
    }
</script>

</body>

</html>