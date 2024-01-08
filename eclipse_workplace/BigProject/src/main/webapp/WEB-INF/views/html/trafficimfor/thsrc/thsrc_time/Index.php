<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>交通情報</title>

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
    <link rel="stylesheet" href="../Tools/Tf_iframe.css">
    <!-- NavBar -->
    <link rel="stylesheet" href="../Tools/NavBar_2.css">
    <!-- Gruop_City.css -->
    <link rel="stylesheet" href="../Tools/Gruop_City.css">
    <!-- Group_News.css -->
    <link rel="stylesheet" href="../Tools/Group_News.css">
    <!-- Traffic_Infos.css -->
    <link rel="stylesheet" href="../Tools/Traffic_Info.css">
    <!-- Color -->
    <link rel="stylesheet" href="../Tools/Color.css">
    <!-- Footer.css -->
    <link rel="stylesheet" href="../Tools/footer.css">
    <link rel="stylesheet" href="../css/thsrc.css">
    <meta http-equiv="refresh" content="60">

    <style>
        body {
            margin: 0px;
        }

        #newBG {
            width: calc(100% - 10px);
            margin: 5px auto;
            margin-top: 10px;
            padding: 0px;
            /* border: solid 2px; */
        }

        /* ============================================= */
        .scrolled {
            background-color: white;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
            /* 滾動高度超過 35vw 時的背景顏色 */
        }

        .collapseCon {
            margin-left: auto;
            margin-right: 0px;
            /* background-color: aqua; */
        }

        .nameCon {
            margin: 0px;
            /* margin-right: 3px; */
            padding: 0px;
            height: 100%;
            /* background-color: aqua; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .memberConMd {
            margin: 0px;
            padding: 0px;
            height: 100%;
            /* background-color: aquamarine; */
            /* border: 1px solid rgba(0, 0, 0, 1); */
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        .nameCon>a {
            height: 100%;
            aspect-ratio: 1/1;
            width: auto;
            margin: 0px;
            margin-right: 5px;
            padding: 0px;
        }

        .nameCon>a>img {
            height: 100%;
            aspect-ratio: 1/1;
            width: auto;
            margin: 0px;
            outline: 1px solid rgba(0, 0, 0, 0.2);
        }

        /* ============================================= */

        div.groupTitle {
            width: 100%;
            margin: 0px;
            margin-bottom: 5px;
            padding: 5px;
            text-align: left;
            justify-content: center;
            align-items: center;
            border-bottom: solid 0.5px rgba(0, 0, 0, 0.3);
        }

        div.groupTitle>h3 {
            margin: 0px;
            padding: 0px;
        }

        div.homeCenter {
            margin: 0px;
            padding: 0px;
            max-width: 1000px;
            min-width: 500px;
        }

        div.classIcon {
            margin: 5px;
            padding: 0px;
            /* height: 90px; */
            min-width: calc(20% - 10px);
            aspect-ratio: 1/1;
            border-radius: 5px;
            align-items: center;
            text-align: center;
            justify-content: center;
            display: flex;
            overflow: hidden;
        }

        div.classIcon:hover {
            background-color: rgba(50, 150, 50, 0.5);
        }

        .classIcon img {
            max-width: 110%;
        }

        /* =================================================== */

        div.homeRight {
            margin: 0px;
            padding: 0px;
            max-width: 400px;
        }

        div.wheatherDiv {
            width: 100%;
            height: 230px;
            margin: 0px;
            padding: 5px;
            border: solid 2px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }

        div.wheatherCol {
            padding: 0px;
            margin: 0px;
        }

        div.wheatherBlock {
            height: 100px;
            margin: 5px;
            border: solid 2px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            text-align: center;
            justify-content: center;
            align-items: center;
            display: flex;
        }


        /* ==================================================== */
        /* offcanvas */

        .offcanvas {
            background-color: #ccc;
        }

        .fixedDiv {
            position: fixed;
            top: 50%;
            right: 0px;
            transform: translateY(-50%);
            width: 40px;
            height: 100px;
            background-color: #ccc;
            padding: 0px;
            /* 目前圖層最高 */
            z-index: 3;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .OffcanBtn {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            background: none;
            border: none;
            border-radius: 0px;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .OffcanBtn:hover {
            background-color: plum !important;
        }

        div.weatherDivOff {
            width: 100%;
            height: 110px;
            margin: 0px;
            padding: 0px;
            border: solid 2px rgba(0, 0, 0, 0.1);
            /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); */
            border-radius: 5px;
        }

        div.weatherColOff {
            margin: 0px;
            padding: 0px;

        }

        /* ==================================================== */

        footer {
            height: 200px;
        }

        /* ==================================================== */

        /* ============ 台鐵時刻表 ============ */
        .trc_h {
            border: 0.2vw solid rgb(88, 34, 8);
            background-color: rgb(37, 111, 160);
            color: rgb(20, 21, 111);
        }

        /* ============ 高鐵時刻表 ============ */

        img.cityImgV3 {
            width: auto;
            height: 160%;
        }


        .thsrc_h {
            border: 0.2vw solid rgb(88, 34, 8);
            background-color: rgb(217, 108, 39);
        }

        div.cityCol_h {
            max-width: 100%;
            min-width: 230px;
            height: 30vw;
            margin: 0px;
            padding: 15px;
        }


<?php
include("db.php");
$sql="SELECT * FROM trainno_s";
$sql_1="SELECT * FROM station";
$sql_2="SELECT * FROM thr_time_s";
$result = $conn->query($sql);
$result_1 = $conn->query($sql_1);
$result_2 = $conn->query($sql_2);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {	  
		echo ".flip_11 .number_11_".$row["ID"].":before,";
		echo ".flip_11 .number_11_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_21 .number_21_".$row["ID"].":before,";
		echo ".flip_21 .number_21_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
if ($result_1->num_rows > 0) {
	// output data of each row
	while($row = $result_1->fetch_assoc()) {	  
		echo ".flip_12 .number_12_".$row["ID"].":before,";
		echo ".flip_12 .number_12_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
		echo ".flip_22 .number_22_".$row["ID"].":before,";
		echo ".flip_22 .number_22_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
if ($result_2->num_rows > 0) {
	// output data of each row
	while($row = $result_2->fetch_assoc()) {	  
		echo ".flip_13 .number_13_".$row["ID"].":before,";
		echo ".flip_13 .number_13_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_s"].'";';
		echo "}";  
		echo ".flip_23 .number_23_".$row["ID"].":before,";
		echo ".flip_23 .number_23_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_s"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
$conn->close();
?>


<?php
include("db.php");
$sql="SELECT * FROM trainno_n";
$sql_1="SELECT * FROM station";
$sql_2="SELECT * FROM thr_time_n";
$result = $conn->query($sql);
$result_1 = $conn->query($sql_1);
$result_2 = $conn->query($sql_2);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {	  
		echo ".flip_31 .number_31_".$row["ID"].":before,";
		echo ".flip_31 .number_31_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_41 .number_41_".$row["ID"].":before,";
		echo ".flip_41 .number_41_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
if ($result_1->num_rows > 0) {
	// output data of each row
	while($row = $result_1->fetch_assoc()) {	  
		echo ".flip_32 .number_32_".$row["ID"].":before,";
		echo ".flip_32 .number_32_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
		echo ".flip_42 .number_42_".$row["ID"].":before,";
		echo ".flip_42 .number_42_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
if ($result_2->num_rows > 0) {
	// output data of each row
	while($row = $result_2->fetch_assoc()) {	  
		echo ".flip_33 .number_33_".$row["ID"].":before,";
		echo ".flip_33 .number_33_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}";  
		echo ".flip_43 .number_43_".$row["ID"].":before,";
		echo ".flip_43 .number_43_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
$conn->close();
?>

    </style>
</head>
<div id="tfIframeContainer" style="margin-top: 4rem;">
    <iframe id="tfYoutubeIframe" src="https://www.1968services.tw/map" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>

<body onload="Start()";>

    <div id="overlayDiv">
        <!-- navBar -->
        <nav id="myNavbar" class="navbar navbar-expand-md bg-none w-100 fixed-top m-0 p-0" style=" top: 0px;">
            <div class="container-fluid m-0 p-0 h-100">
                <a href="./index.html" class="navbar-brand m-0 p-0" style="font-size:x-large;">
                    <img src="../image/logo1228.png" class=" m-0 p-0" alt="logo" width="65" height="50">
                </a>
                <div class="memberConMd d-flex d-md-none">
                    <div class="nameCon">
                        <a href="./Member.html">
                            <img class="rounded-circle img-fluid" src="../image/IMG_0987.JPG" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto mb-0">
                        <li class="nav-item">
                            <a id="news" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                href="./Favor1.html">活動資訊</a>
                        </li>
                        <li class="nav-item">
                            <a id="trans" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                href="#">交通情報</a>
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
                    <div class="memberCon d-none d-md-flex">
                        <div class="nameCon">
                            <a href="./Member.html">
                                <img class="rounded-circle img-fluid" src="../image/IMG_0987.JPG" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navBar End -->
    </div>
    <!-- ========== -->
    <div id="newBG" class="row justify-content-center">

        <!-- <div class="homeCenter col-12 col-md-9 order-2 order-md-1"> -->
        <!-- <div class="homeCenter col-12 col-md-9 order-2 order-md-1"> -->
        <div>
            <!-- ---------- -->
            <div id="groupNews" class="">
                <div class="groupTitle">
                    <h2>交通資訊</h2>
                </div>

                <!-- 高鐵 台鐵 -->
                <div id="groupCity" class="">
                    <div class="row justify-content-left m-0 p-0">
                        <div class="col-12 col-lg-12 m-0 p-0">
                            <div class="row m-0 p-0">
                                <div class="cityCol_h col-12 col-md-5">
                                    <a target="_blank" href="https://www.thsrc.com.tw/">
                                        <div class="cityDiv card">
                                            <img class="cityImgV3 rounded card-img-top" src="../image/高鐵-1.jpg">
                                            <div class="card-img-overlay">
                                                <h3 class="card-title">高鐵</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cityCol col-12 col-md-7" style="text-align: center; font-size: 2vw;">
                                    <div>
                                        台北車站 高鐵列車即時動態
                                    </div>
                                    <div style="margin-top: 2vw; font-size: 1.8vw;">
                                        南下列車
                                    </div>
                                    <table style="width: 100%; font-size: 1.7vw;">
                                        <thead>
                                            <tr class="row">
                                                <th class="col-2 thsrc_h">
                                                    車次
                                                </th>
                                                <th class="col-3 thsrc_h">
                                                    開往
                                                </th>
                                                <th class="col-4 thsrc_h">
                                                    開車時間
                                                </th>
                                                <th class="col-3 thsrc_h">
                                                    列車狀態
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_11 down_11" id="flip_11">
                                                    <span class="digital_11 front_11 number_11_1"></span>
                                                    <span class="digital_11 back_11 number_11_2"></span>
                                                </td>
                                                <td class="col-3 flip_12 down_12" id="flip_12">
                                                    <span class="digital_12 front_12 number_12_1"></span>
                                                    <span class="digital_12 back_12 number_12_2"></span>
                                                </td>
                                                <td class="col-4 flip_13 down_13" id="flip_13">
                                                    <span class="digital_13 front_13 number_13_1"></span>
                                                    <span class="digital_13 back_13 number_13_2"></span>
                                                </td>
                                                <td class="col-3 flip_14 down_14" id="flip_14">
                                                    <span class="digital_14 front_14 number_14_1"></span>
                                                    <span class="digital_14 back_14 number_14_2"></span>
                                                </td>
                                            </tr>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_21 down_21" id="flip_21">
                                                    <span class="digital_21 front_21 number_21_1"></span>
                                                    <span class="digital_21 back_21 number_21_2"></span>
                                                </td>
                                                <td class="col-3 flip_22 down_22" id="flip_22">
                                                    <span class="digital_22 front_22 number_22_1"></span>
                                                    <span class="digital_22 back_22 number_22_2"></span>
                                                </td>
                                                <td class="col-4 flip_23 down_23" id="flip_23">
                                                    <span class="digital_23 front_23 number_23_1"></span>
                                                    <span class="digital_23 back_23 number_23_2"></span>
                                                </td>
                                                <td class="col-3 flip_24 down_24" id="flip_24">
                                                    <span class="digital_24 front_24 number_24_1"></span>
                                                    <span class="digital_24 back_24 number_24_2"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="margin-top: 2vw;">
                                        北上列車
                                    </div>
                                    <table style="width: 100%; font-size: 1.5vw;">
                                        <thead>
                                            <tr class="row">
                                                <th class="col-2 thsrc_h">
                                                    車次
                                                </th>
                                                <th class="col-3 thsrc_h">
                                                    開往
                                                </th>
                                                <th class="col-4 thsrc_h">
                                                    開車時間
                                                </th>
                                                <th class="col-3 thsrc_h">
                                                    列車狀態
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_31 down_31" id="flip_31">
                                                    <span class="digital_31 front_31 number_31_1"></span>
                                                    <span class="digital_31 back_31 number_31_2"></span>
                                                </td>
                                                <td class="col-3 flip_32 down_32" id="flip_32">
                                                    <span class="digital_32 front_32 number_32_1"></span>
                                                    <span class="digital_32 back_32 number_32_2"></span>
                                                </td>
                                                <td class="col-4 flip_33 down_33" id="flip_33">
                                                    <span class="digital_33 front_33 number_33_1"></span>
                                                    <span class="digital_33 back_33 number_33_2"></span>
                                                </td>
                                                <td class="col-3 flip_34 down_34" id="flip_34">
                                                    <span class="digital_34 front_34 number_34_1"></span>
                                                    <span class="digital_34 back_34 number_34_2"></span>
                                                </td>
                                            </tr>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_41 down_41" id="flip_41">
                                                    <span class="digital_41 front_41 number_41_2"></span>
                                                    <span class="digital_41 back_41 number_41_3"></span>
                                                </td>
                                                <td class="col-3 flip_42 down_42" id="flip_42">
                                                    <span class="digital_42 front_42 number_42_2"></span>
                                                    <span class="digital_42 back_42 number_42_3"></span>
                                                </td>
                                                <td class="col-4 flip_43 down_43" id="flip_43">
                                                    <span class="digital_43 front_43 number_43_2"></span>
                                                    <span class="digital_43 back_43 number_43_3"></span>
                                                </td>
                                                <td class="col-3 flip_44 down_44" id="flip_44">
                                                    <span class="digital_44 front_44 number_44_1"></span>
                                                    <span class="digital_44 back_44 number_44_2"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row m-0 p-0">
                                <div class="cityCol_h col-12 col-md-5">
                                    <a target="_blank" href="https://www.railway.gov.tw/tra-tip-web/tip">
                                        <div class="cityDiv card">
                                            <img class="cityImgV3 rounded card-img-top" src="../image/台鐵-1.jpg">
                                            <div class="card-img-overlay">
                                                <h3 class="card-title">台鐵</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cityCol col-12 col-md-7" style="text-align: center; font-size: 2vw;">
                                    <div>
                                        台北車站 台鐵列車即時動態
                                    </div>
                                    <div style="margin-top: 2vw; font-size: 1.8vw;">
                                        南下列車
                                    </div>
                                    <table style="width: 100%; font-size: 1.7vw;">
                                        <thead>
                                            <tr class="row">
                                                <th class="col-2 trc_h">
                                                    車次
                                                </th>
                                                <th class="col-3 trc_h">
                                                    開往
                                                </th>
                                                <th class="col-4 trc_h">
                                                    開車時間
                                                </th>
                                                <th class="col-3 trc_h">
                                                    列車狀態
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_51 down_51" id="flip_51">
                                                    <span class="digital_51 front_51 number_51_1"></span>
                                                    <span class="digital_51 back_51 number_51_2"></span>
                                                </td>
                                                <td class="col-3 flip_52 down_52" id="flip_52">
                                                    <span class="digital_52 front_52 number_52_1"></span>
                                                    <span class="digital_52 back_52 number_52_2"></span>
                                                </td>
                                                <td class="col-4 flip_53 down_53" id="flip_53">
                                                    <span class="digital_53 front_53 number_53_1"></span>
                                                    <span class="digital_53 back_53 number_53_2"></span>
                                                </td>
                                                <td class="col-3 flip_54 down_54" id="flip_54">
                                                    <span class="digital_54 front_54 number_54_1"></span>
                                                    <span class="digital_54 back_54 number_54_2"></span>
                                                </td>
                                            </tr>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_61 down_61" id="flip_61">
                                                    <span class="digital_61 front_61 number_61_1"></span>
                                                    <span class="digital_61 back_61 number_61_2"></span>
                                                </td>
                                                <td class="col-3 flip_62 down_62" id="flip_62">
                                                    <span class="digital_62 front_62 number_62_1"></span>
                                                    <span class="digital_62 back_62 number_62_2"></span>
                                                </td>
                                                <td class="col-4 flip_63 down_63" id="flip_63">
                                                    <span class="digital_63 front_63 number_63_1"></span>
                                                    <span class="digital_63 back_63 number_63_2"></span>
                                                </td>
                                                <td class="col-3 flip_64 down_64" id="flip_64">
                                                    <span class="digital_64 front_64 number_64_1"></span>
                                                    <span class="digital_64 back_64 number_64_2"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="margin-top: 2vw;">
                                        北上列車
                                    </div>
                                    <table style="width: 100%; font-size: 1.5vw;">
                                        <thead>
                                            <tr class="row">
                                                <th class="col-2 trc_h">
                                                    車次
                                                </th>
                                                <th class="col-3 trc_h">
                                                    開往
                                                </th>
                                                <th class="col-4 trc_h">
                                                    開車時間
                                                </th>
                                                <th class="col-3 trc_h">
                                                    列車狀態
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_71 down_71" id="flip_71">
                                                    <span class="digital_71 front_71 number_71_1"></span>
                                                    <span class="digital_71 back_71 number_71_2"></span>
                                                </td>
                                                <td class="col-3 flip1_72 down_72" id="flip_72">
                                                    <span class="digital_72 front_72 number_72_1"></span>
                                                    <span class="digital_72 back_72 number_72_2"></span>
                                                </td>
                                                <td class="col-4 flip1_73 down_73" id="flip_73">
                                                    <span class="digital_73 front_73 number_73_1"></span>
                                                    <span class="digital_73 back_73 number_73_2"></span>
                                                </td>
                                                <td class="col-3 flip1_74 down_74" id="flip_74">
                                                    <span class="digital_74 front_74 number_74_1"></span>
                                                    <span class="digital_74 back_74 number_74_2"></span>
                                                </td>
                                            </tr>
                                            <tr class="row" style="margin-top: 0vw;">
                                                <td class="col-2 flip_81 down_81" id="flip_81">
                                                    <span class="digital_81 front_81 number_81_1"></span>
                                                    <span class="digital_81 back_81 number_81_2"></span>
                                                </td>
                                                <td class="col-3 flip1_82 down_82" id="flip_82">
                                                    <span class="digital_82 front_82 number_82_1"></span>
                                                    <span class="digital_82 back_82 number_82_2"></span>
                                                </td>
                                                <td class="col-4 flip1_83 down_83" id="flip_83">
                                                    <span class="digital_83 front_83 number_83_1"></span>
                                                    <span class="digital_83 back_83 number_83_2"></span>
                                                </td>
                                                <td class="col-3 flip1_84 down_84" id="flip_84">
                                                    <span class="digital_84 front_84 number_84_1"></span>
                                                    <span class="digital_84 back_84 number_84_2"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                            </div>
                        </div>




                        <!-- <div class="cityCol col-0 col-lg-4">
                        <a href="https://www.mvdis.gov.tw/" class="newsA">
                            <div class="cityDiv card">
                                <img class="cityImgV2 rounded card-img-top" src="./image/監理站服務.png">
                                <div class="card-img-overlay">
                                    <h3 class="card-title"></h3>
                                </div>
                            </div>
                        </a>
                    </div> -->
                    </div>

                </div>
                <div class="btn-con">
                    <button id="btn0">向下翻+1</button>
                    <button id="btn1">測試</button>
                </div>
            </div>

            <!-- ---------- -->

            <div class="newsCon">
                <div class="newsImgCon">
                    <img class="newsImg" src="../image/捷運.png" alt="">
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
                    <img class="newsImg" src="../image/客運2.jpg" alt="">
                </div>
            </div>
            <div class="newsCon">
                <div class="newsImgCon">
                    <img class="newsImg" src="../image/租車2.png" alt="">
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

        </div>

        <!-- <div class="homeRight col-0 col-md-3 order-1 order-md-2">
            <br><br><br>
            <div class="wheatherDiv">
                <div class="row p-0 m-0">
                    <div class="wheatherCol col-6 col-xl-4">
                        <div class="wheatherBlock">台中市</div>
                    </div>
                    <div class="wheatherCol col-6 col-xl-4">
                        <div class="wheatherBlock">24C</div>
                    </div>
                    <div class="wheatherCol col col-xl-4">
                        <div class="wheatherBlock">
                            <div class="row">
                                <div class="col-12">降雨機率:</div>
                                <div class="col">20%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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




        var flip_11 = document.getElementById('flip_11')
        var flip_12 = document.getElementById('flip_12')
        var flip_13 = document.getElementById('flip_13')
        var flip_21 = document.getElementById('flip_21')
        var flip_22 = document.getElementById('flip_22')
        var flip_23 = document.getElementById('flip_23')
        var flip_31 = document.getElementById('flip_31')
        var flip_32 = document.getElementById('flip_32')
        var flip_33 = document.getElementById('flip_33')
        var flip_41 = document.getElementById('flip_41')
        var flip_42 = document.getElementById('flip_42')
        var flip_43 = document.getElementById('flip_43')
        var backNode_11 = document.querySelector('.back_11')
        var backNode_12 = document.querySelector('.back_12')
        var backNode_13 = document.querySelector('.back_13')
        var backNode_21 = document.querySelector('.back_21')
        var backNode_22 = document.querySelector('.back_22')
        var backNode_23 = document.querySelector('.back_23')
        var backNode_31 = document.querySelector('.back_31')
        var backNode_32 = document.querySelector('.back_32')
        var backNode_33 = document.querySelector('.back_33')
        var backNode_41 = document.querySelector('.back_41')
        var backNode_42 = document.querySelector('.back_42')
        var backNode_43 = document.querySelector('.back_43')
        var frontNode_11 = document.querySelector('.front_11')
        var frontNode_12 = document.querySelector('.front_12')
        var frontNode_13 = document.querySelector('.front_13')
        var frontNode_21 = document.querySelector('.front_21')
        var frontNode_22 = document.querySelector('.front_22')
        var frontNode_23 = document.querySelector('.front_23')
        var frontNode_31 = document.querySelector('.front_31')
        var frontNode_32 = document.querySelector('.front_32')
        var frontNode_33 = document.querySelector('.front_33')
        var frontNode_41 = document.querySelector('.front_41')
        var frontNode_42 = document.querySelector('.front_42')
        var frontNode_43 = document.querySelector('.front_43')
        var btn0 = document.getElementById('btn0')
        var btn1 = document.getElementById('btn1')
        btn0.addEventListener('click', function () {
            flipDown_11();
            flipDown_12();
            flipDown_13();
            flipDown_21();
            flipDown_22();
            flipDown_23();
            flipDown_31();
            flipDown_32();
            flipDown_33();
            flipDown_41();
            flipDown_42();
            flipDown_43();
        })
        btn1.addEventListener('click', function () {
            setTimeout("BusState_11()", 590);
            setTimeout("BusState_12()", 590);
            setTimeout("BusState_13()", 590);
            setTimeout("BusState_21()", 590);
            setTimeout("BusState_22()", 590);
            setTimeout("BusState_23()", 590);
            setTimeout("BusState_31()", 590);
            setTimeout("BusState_32()", 590);
            setTimeout("BusState_33()", 590);
            setTimeout("BusState_41()", 590);
            setTimeout("BusState_42()", 590);
            setTimeout("BusState_43()", 590);
        })

        var count_11 = 1
        var count_12 = 1
        var count_13 = 1
        var count_21 = 2
        var count_22 = 2
        var count_23 = 2
        var count_31 = 1
        var count_32 = 1
        var count_33 = 1
        var count_41 = 2
        var count_42 = 2
        var count_43 = 2
        // var isFlipping = false
        function flipDown_11() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_11.setAttribute('class', 'digital_11 front_11 number_11_' + count_11)
            var nextCount_11 = count_11 >= 94 ? 1 : (count_11 + 1)
            backNode_11.setAttribute('class', 'digital_11 back_11 number_11_' + nextCount_11)
            flip_11.setAttribute('class', 'col-2 flip_11 down_11 go_11')
            // isFlipping = true
            setTimeout(function () {
                flip_11.setAttribute('class', 'col-2 flip_11 down_11')
                isFlipping = false
                frontNode_11.setAttribute('class', 'digital_11 front_11 number_11_' + nextCount_11)
                count_11 = nextCount_11
            }, 210)
        }
        function flipDown_12() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_12.setAttribute('class', 'digital_12 front_12 number_12_' + count_12)
            var nextCount_12 = count_12 >= 12 ? 1 : (count_12 + 1)
            backNode_12.setAttribute('class', 'digital_12 back_12 number_12_' + nextCount_12)
            flip_12.setAttribute('class', 'col-3 flip_12 down_12 go_12')
            // isFlipping = true
            setTimeout(function () {
                flip_12.setAttribute('class', 'col-3 flip_12 down_12')
                isFlipping = false
                frontNode_12.setAttribute('class', 'digital_12 front_12 number_12_' + nextCount_12)
                count_12 = nextCount_12
            }, 210)
        }
        function flipDown_13() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_13.setAttribute('class', 'digital_13 front_13 number_13_' + count_13)
            var nextCount_13 = count_13 >= 94 ? 1 : (count_13 + 1)
            backNode_13.setAttribute('class', 'digital_13 back_13 number_13_' + nextCount_13)
            flip_13.setAttribute('class', 'col-4 flip_13 down_13 go_13')
            // isFlipping = true
            setTimeout(function () {
                flip_13.setAttribute('class', 'col-4 flip_13 down_13')
                isFlipping = false
                frontNode_13.setAttribute('class', 'digital_13 front_13 number_13_' + nextCount_13)
                count_13 = nextCount_13
            }, 210)
        }

        function flipDown_21() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_21.setAttribute('class', 'digital_21 front_21 number_21_' + count_21)
            var nextCount_21 = count_21 >= 94 ? 1 : (count_21 + 1)
            backNode_21.setAttribute('class', 'digital_21 back_21 number_21_' + nextCount_21)
            flip_21.setAttribute('class', 'col-2 flip_21 down_21 go_21')
            // isFlipping = true
            setTimeout(function () {
                flip_21.setAttribute('class', 'col-2 flip_21 down_21')
                isFlipping = false
                frontNode_21.setAttribute('class', 'digital_21 front_21 number_21_' + nextCount_21)
                count_21 = nextCount_21
            }, 210)
        }
        function flipDown_22() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_22.setAttribute('class', 'digital_22 front_22 number_22_' + count_22)
            var nextCount_22 = count_22 >= 12 ? 1 : (count_22 + 1)
            backNode_22.setAttribute('class', 'digital_22 back_22 number_22_' + nextCount_22)
            flip_22.setAttribute('class', 'col-3 flip_22 down_22 go_22')
            // isFlipping = true
            setTimeout(function () {
                flip_22.setAttribute('class', 'col-3 flip_22 down_22')
                isFlipping = false
                frontNode_22.setAttribute('class', 'digital_22 front_22 number_22_' + nextCount_22)
                count_22 = nextCount_22
            }, 210)
        }
        function flipDown_23() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_23.setAttribute('class', 'digital_23 front_23 number_23_' + count_23)
            var nextCount_23 = count_23 >= 94 ? 1 : (count_23 + 1)
            backNode_23.setAttribute('class', 'digital_23 back_23 number_23_' + nextCount_23)
            flip_23.setAttribute('class', 'col-4 flip_23 down_23 go_23')
            // isFlipping = true
            setTimeout(function () {
                flip_23.setAttribute('class', 'col-4 flip_23 down_23')
                isFlipping = false
                frontNode_23.setAttribute('class', 'digital_23 front_23 number_23_' + nextCount_23)
                count_23 = nextCount_23
            }, 210)
        }
        function flipDown_31() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_31.setAttribute('class', 'digital_31 front_31 number_31_' + count_31)
            var nextCount_31 = count_31 >= 101 ? 1 : (count_31 + 1)
            backNode_31.setAttribute('class', 'digital_31 back_31 number_31_' + nextCount_31)
            flip_31.setAttribute('class', 'col-2 flip_31 down_31 go_31')
            // isFlipping = true
            setTimeout(function () {
                flip_31.setAttribute('class', 'col-2 flip_31 down_31')
                isFlipping = false
                frontNode_31.setAttribute('class', 'digital_31 front_31 number_31_' + nextCount_31)
                count_31 = nextCount_31
            }, 210)
        }
        function flipDown_32() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_32.setAttribute('class', 'digital_32 front_32 number_32_' + count_32)
            var nextCount_32 = count_32 >= 12 ? 1 : (count_32 + 1)
            backNode_32.setAttribute('class', 'digital_32 back_32 number_32_' + nextCount_32)
            flip_32.setAttribute('class', 'col-3 flip_32 down_32 go_32')
            // isFlipping = true
            setTimeout(function () {
                flip_32.setAttribute('class', 'col-3 flip_32 down_32')
                isFlipping = false
                frontNode_32.setAttribute('class', 'digital_32 front_32 number_32_' + nextCount_32)
                count_32 = nextCount_32
            }, 210)
        }
        function flipDown_33() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_33.setAttribute('class', 'digital_33 front_33 number_33_' + count_33)
            var nextCount_33 = count_33 >= 101 ? 1 : (count_33 + 1)
            backNode_33.setAttribute('class', 'digital_33 back_33 number_33_' + nextCount_33)
            flip_33.setAttribute('class', 'col-4 flip_33 down_33 go_33')
            // isFlipping = true
            setTimeout(function () {
                flip_33.setAttribute('class', 'col-4 flip_33 down_33')
                isFlipping = false
                frontNode_33.setAttribute('class', 'digital_33 front_33 number_33_' + nextCount_33)
                count_33 = nextCount_33
            }, 210)
        }

        function flipDown_41() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_41.setAttribute('class', 'digital_41 front_41 number_41_' + count_41)
            var nextCount_41 = count_41 >= 101 ? 1 : (count_41 + 1)
            backNode_41.setAttribute('class', 'digital_41 back_41 number_41_' + nextCount_41)
            flip_41.setAttribute('class', 'col-2 flip_41 down_41 go_41')
            // isFlipping = true
            setTimeout(function () {
                flip_41.setAttribute('class', 'col-2 flip_41 down_41')
                isFlipping = false
                frontNode_41.setAttribute('class', 'digital_41 front_41 number_41_' + nextCount_41)
                count_41 = nextCount_41
            }, 210)
        }
        function flipDown_42() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_42.setAttribute('class', 'digital_42 front_42 number_42_' + count_42)
            var nextCount_42 = count_42 >= 12 ? 1 : (count_42 + 1)
            backNode_42.setAttribute('class', 'digital_42 back_42 number_42_' + nextCount_42)
            flip_42.setAttribute('class', 'col-3 flip_42 down_42 go_42')
            // isFlipping = true
            setTimeout(function () {
                flip_42.setAttribute('class', 'col-3 flip_42 down_42')
                isFlipping = false
                frontNode_42.setAttribute('class', 'digital_42 front_42 number_42_' + nextCount_42)
                count_42 = nextCount_42
            }, 210)
        }
        function flipDown_43() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode_43.setAttribute('class', 'digital_43 front_43 number_43_' + count_43)
            var nextCount_43 = count_43 >= 101 ? 1 : (count_43 + 1)
            backNode_43.setAttribute('class', 'digital_43 back_43 number_43_' + nextCount_43)
            flip_43.setAttribute('class', 'col-4 flip_43 down_43 go_43')
            // isFlipping = true
            setTimeout(function () {
                flip_43.setAttribute('class', 'col-4 flip_43 down_43')
                isFlipping = false
                frontNode_43.setAttribute('class', 'digital_43 front_43 number_43_' + nextCount_43)
                count_43 = nextCount_43
            }, 210)
        }




        function BusState_11() {
<?php
include("db.php");
$sql="SELECT * FROM thr_s_imm WHERE ID = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {	
        $trainno=$row["TrainNo"];
        echo "if (count_11 != $trainno) {";
        echo "      "."flipDown_11();";
        echo "      "."setTimeout(\"BusState_11()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_12() {
<?php
include("db.php");
$sql="SELECT * FROM thr_s_imm WHERE ID = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $Destination=$row["Destination"];
        echo "if (count_12 != $Destination) {";
        echo "      "."flipDown_12();";
        echo "      "."setTimeout(\"BusState_12()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_13() {
<?php
include("db.php");
$sql="SELECT * FROM thr_s_imm WHERE ID = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $thr_time_s=$row["thr_time_s"];
        echo "if (count_13 != $thr_time_s) {";
        echo "      "."flipDown_13();";
        echo "      "."setTimeout(\"BusState_13()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}

function BusState_21() {
<?php
include("db.php");
$sql="SELECT * FROM thr_s_imm WHERE ID = 2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {	
        $trainno=$row["TrainNo"];
        echo "if (count_21 != $trainno) {";
        echo "      "."flipDown_21();";
        echo "      "."setTimeout(\"BusState_21()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_22() {
<?php
include("db.php");
$sql="SELECT * FROM thr_s_imm WHERE ID = 2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $Destination=$row["Destination"];
        echo "if (count_22 != $Destination) {";
        echo "      "."flipDown_22();";
        echo "      "."setTimeout(\"BusState_22()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_23() {
<?php
include("db.php");
$sql="SELECT * FROM thr_s_imm WHERE ID = 2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $thr_time_s=$row["thr_time_s"];
        echo "if (count_23 != $thr_time_s) {";
        echo "      "."flipDown_23();";
        echo "      "."setTimeout(\"BusState_23()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}



function BusState_31() {
<?php
include("db.php");
$sql="SELECT * FROM thr_n_imm WHERE ID = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {	
        $trainno=$row["TrainNo"];
        echo "if (count_31 != $trainno) {";
        echo "      "."flipDown_31();";
        echo "      "."setTimeout(\"BusState_31()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_32() {
<?php
include("db.php");
$sql="SELECT * FROM thr_n_imm WHERE ID = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $Destination=$row["Destination"];
        echo "if (count_32 != $Destination) {";
        echo "      "."flipDown_32();";
        echo "      "."setTimeout(\"BusState_32()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_33() {
<?php
include("db.php");
$sql="SELECT * FROM thr_n_imm WHERE ID = 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $thr_time_n=$row["thr_time_n"];
        echo "if (count_33 != $thr_time_n) {";
        echo "      "."flipDown_33();";
        echo "      "."setTimeout(\"BusState_33()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}

function BusState_41() {
<?php
include("db.php");
$sql="SELECT * FROM thr_n_imm WHERE ID = 2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {	
        $trainno=$row["TrainNo"];
        echo "if (count_41 != $trainno) {";
        echo "      "."flipDown_41();";
        echo "      "."setTimeout(\"BusState_41()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_42() {
<?php
include("db.php");
$sql="SELECT * FROM thr_n_imm WHERE ID = 2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $Destination=$row["Destination"];
        echo "if (count_42 != $Destination) {";
        echo "      "."flipDown_42();";
        echo "      "."setTimeout(\"BusState_42()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}
        function BusState_43() {
<?php
include("db.php");
$sql="SELECT * FROM thr_n_imm WHERE ID = 2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {	
        $thr_time_n=$row["thr_time_n"];
        echo "if (count_43 != $thr_time_n) {";
        echo "      "."flipDown_43();";
        echo "      "."setTimeout(\"BusState_43()\", 250);";
        echo    "}";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}


        // function BusState_31() {
        //     if (count_31 != 9) {
        //         flipDown_31();
        //         setTimeout("BusState_31()", 450);
        //     }
        // }
        // function BusState_32() {

        //     if (count_32 != 1) {
        //         flipDown_32();
        //         setTimeout("BusState_32()", 450);
        //     }
        // }
        // function BusState_33() {
        //     if (count_33 != 1) {
        //         flipDown_33();
        //         setTimeout("BusState_33()", 450);
        //     }
        // }





        function Start() {
            setTimeout("BusState_11()", 100);
            setTimeout("BusState_12()", 100);
            setTimeout("BusState_13()", 100);
            setTimeout("BusState_21()", 100);
            setTimeout("BusState_22()", 100);
            setTimeout("BusState_23()", 100);
            setTimeout("BusState_31()", 100);
            setTimeout("BusState_32()", 100);
            setTimeout("BusState_33()", 100);
            setTimeout("BusState_41()", 100);
            setTimeout("BusState_42()", 100);
            setTimeout("BusState_43()", 100);
        }
        // function retime(){
<?php
include("db.php");
$sql="TRUNCATE TABLE thr_n_imm";
$result = $conn->query($sql);
$sql_1="SELECT * FROM thr_n ORDER BY ReTime";
$result_1 = $conn->query($sql_1);
$timenow_h = date("H");
$timenow_m = date("i");
$re_time_1 = $timenow_h * 60 + $timenow_m;
$day_1 = date("w");
echo $day_1;
if ($result_1->num_rows > 0) {
	while($row = $result_1->fetch_assoc()) {
        if ($row["Week_$day_1"] == 1) {
            if ($row["ReTime"] - $re_time_1 > 0) {
                $trainno=$row['TrainNo'];
                $thr_time_n=$row['thr_time_n'];
                $Destination=$row['Destination'];
                $sql_2="INSERT INTO thr_n_imm (TrainNo,thr_time_n,Destination) VALUES ('$trainno','$thr_time_n','$Destination')";
                $result_2 = $conn->query($sql_2);
            }
        }	 
    }
} else {
	echo "0 results";
}
?>



        // }

    </script>
</body>

</html>

<?php
include("db.php");
$sql="TRUNCATE TABLE thr_s_imm";
$result = $conn->query($sql);
$sql_1="SELECT * FROM thr_s ORDER BY ReTime";
$result_1 = $conn->query($sql_1);
$timenow_h = date("H");
$timenow_m = date("i");
$re_time_1 = $timenow_h * 60 + $timenow_m;
$day_1 = date("w");
echo $day_1;
if ($result_1->num_rows > 0) {
	while($row = $result_1->fetch_assoc()) {
        if ($row["Week_$day_1"] == 1) {
            if ($row["ReTime"] - $re_time_1 > 0) {
                $trainno=$row['TrainNo'];
                $thr_time_s=$row['thr_time_s'];
                $Destination=$row['Destination'];
                $sql_2="INSERT INTO thr_s_imm (TrainNo,thr_time_s,Destination) VALUES ('$trainno','$thr_time_s','$Destination')";
                $result_2 = $conn->query($sql_2);
            }
        }	 
    }
} else {
	echo "0 results";
}
?>