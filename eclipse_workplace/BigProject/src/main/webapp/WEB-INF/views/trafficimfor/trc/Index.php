<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>台鐵列車即時動態</title>

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
    <link rel="stylesheet" href="./Tools/Tf_iframe.css">
    <!-- NavBar -->
    <link rel="stylesheet" href="./Tools/NavBar_2.css">
    <!-- Gruop_City.css -->
    <link rel="stylesheet" href="./Tools/Gruop_City.css">
    <!-- Group_News.css -->
    <link rel="stylesheet" href="./Tools/Group_News.css">
    <!-- Traffic_Infos.css -->
    <link rel="stylesheet" href="./Tools/Traffic_Info.css">
    <!-- Color -->
    <link rel="stylesheet" href="./Tools/Color.css">
    <!-- Footer.css -->
    <link rel="stylesheet" href="./Tools/footer.css">
    <link rel="stylesheet" href="./css/trc.css">

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

        /* ============ 高鐵時刻表 ============ */

        img.cityImgV3 {
            width: 100%;
            /* height: 160%; */
        }


        .thsrc_h {
            border: 0.4vw solid rgb(88, 34, 8);
            background-color: rgb(217, 108, 39);
            box-shadow: 0 0 6px rgba(0, 0, 0, .8);
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
		echo ".flip_31 .number_31_".$row["ID"].":before,";
		echo ".flip_31 .number_31_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_41 .number_41_".$row["ID"].":before,";
		echo ".flip_41 .number_41_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_51 .number_51_".$row["ID"].":before,";
		echo ".flip_51 .number_51_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_61 .number_61_".$row["ID"].":before,";
		echo ".flip_61 .number_61_".$row["ID"].":after{";
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
		echo ".flip_32 .number_32_".$row["ID"].":before,";
		echo ".flip_32 .number_32_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
		echo ".flip_42 .number_42_".$row["ID"].":before,";
		echo ".flip_42 .number_42_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";	  
		echo ".flip_52 .number_52_".$row["ID"].":before,";
		echo ".flip_52 .number_52_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
		echo ".flip_62 .number_62_".$row["ID"].":before,";
		echo ".flip_62 .number_62_".$row["ID"].":after{";
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
		echo ".flip_33 .number_33_".$row["ID"].":before,";
		echo ".flip_33 .number_33_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_s"].'";';
		echo "}"; 
		echo ".flip_43 .number_43_".$row["ID"].":before,";
		echo ".flip_43 .number_43_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_s"].'";';
		echo "}"; 
		echo ".flip_53 .number_53_".$row["ID"].":before,";
		echo ".flip_53 .number_53_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_s"].'";';
		echo "}";  
		echo ".flip_63 .number_63_".$row["ID"].":before,";
		echo ".flip_63 .number_63_".$row["ID"].":after{";
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
		echo ".flip_71 .number_71_".$row["ID"].":before,";
		echo ".flip_71 .number_71_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_81 .number_81_".$row["ID"].":before,";
		echo ".flip_81 .number_81_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";
		echo ".flip_91 .number_91_".$row["ID"].":before,";
		echo ".flip_91 .number_91_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_101 .number_101_".$row["ID"].":before,";
		echo ".flip_101 .number_101_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";
		echo ".flip_111 .number_111_".$row["ID"].":before,";
		echo ".flip_111 .number_111_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";	  
		echo ".flip_121 .number_121_".$row["ID"].":before,";
		echo ".flip_121 .number_121_".$row["ID"].":after{";
		echo 'content: "'.$row["TrainNo"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
if ($result_1->num_rows > 0) {
	// output data of each row
	while($row = $result_1->fetch_assoc()) {	  
		echo ".flip_72 .number_72_".$row["ID"].":before,";
		echo ".flip_72 .number_72_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
		echo ".flip_82 .number_82_".$row["ID"].":before,";
		echo ".flip_82 .number_82_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";	  
		echo ".flip_92 .number_92_".$row["ID"].":before,";
		echo ".flip_92 .number_92_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
		echo ".flip_102 .number_102_".$row["ID"].":before,";
		echo ".flip_102 .number_102_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";	  
		echo ".flip_112 .number_112_".$row["ID"].":before,";
		echo ".flip_112 .number_112_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
		echo ".flip_122 .number_122_".$row["ID"].":before,";
		echo ".flip_122 .number_122_".$row["ID"].":after{";
		echo 'content: "'.$row["station"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
if ($result_2->num_rows > 0) {
	// output data of each row
	while($row = $result_2->fetch_assoc()) {	  
		echo ".flip_73 .number_73_".$row["ID"].":before,";
		echo ".flip_73 .number_73_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}";  
		echo ".flip_83 .number_83_".$row["ID"].":before,";
		echo ".flip_83 .number_83_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}"; 
		echo ".flip_93 .number_93_".$row["ID"].":before,";
		echo ".flip_93 .number_93_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}";  
		echo ".flip_103 .number_103_".$row["ID"].":before,";
		echo ".flip_103 .number_103_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}"; 
		echo ".flip_113 .number_113_".$row["ID"].":before,";
		echo ".flip_113 .number_113_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}";  
		echo ".flip_123 .number_123_".$row["ID"].":before,";
		echo ".flip_123 .number_123_".$row["ID"].":after{";
		echo 'content: "'.$row["thr_time_n"].'";';
		echo "}";
	}
} else {
    	echo "0 results";
}
$conn->close();
?>

        /* ============ 台鐵時刻表 ============ */
        .trc_h {
            border: 0.2vw solid rgb(88, 34, 8);
            background-color: rgb(37, 111, 160);
            color: rgb(20, 21, 111);
            box-shadow: 0 0 6px rgba(0, 0, 0, .8);
        }

        /* == navBar == */
        

        
        #mynavbar {
            width: 200px;
            /* height: 100%; */
            margin-left: auto;
            margin-right: 20px;
            margin-top: -1px;
            background-color: rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }
        
        #mynavbarCon {
            width: 100vw;
            height: 100%;
            margin: 0px;
            padding: 5px;
            padding-right: 10px;
            border: 1px solid rgba(0, 0, 0, 0);
        }
        
        .navbar-toggler {
            background-color: white;
            margin-right: 10px;
        }

        /* .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-width: 1px;
            border-style: solid;
        } */
        /* ============ 台鐵時刻表 ============ */
        .trc_h {
            border: 0.2vw solid rgb(88, 34, 8);
            background-color: rgb(37, 111, 160);
            color: rgb(20, 21, 111);
        }
    </style>
</head>

<body onload="Start()"  style="background-color: rgb(211,230,255)">
<div class="container">
    <!-- ========== -->
    <div id="newBG" class="justify-content-center">
        <div id="overlayDiv">
        <!-- navBar -->
            <nav id="myNavbar" class="navbar navbar-expand-md bg-none w-100 fixed-top m-0 p-0" style=" top: 0px;">
            <div class="container-fluid m-0 p-0 h-100" style="background-color:rgba(211,230,255)">
                <a href="../../index.html" class="navbar-brand m-0 p-0" style="font-size:x-large;">
                    <img src="../../image/logo1228.png" class=" m-0 p-0" alt="logo" width="65" height="50">
                </a>
                <div class="memberConMd d-flex d-md-none">
                    <div class="nameCon">
                        <a href="../../Member.html">
                            <img class="rounded-circle img-fluid" src="../../image/IMG_0987.JPG" alt="">
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
                                href="../../Favor1.html">活動資訊</a>
                        </li>
                        <li class="nav-item">
                            <a id="trans" onclick="nav_item_active()" class="nav-link" aria-current="page"
                                href="../">交通情報</a>
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
                    <div class="memberCon d-none d-md-flex">
                        <div class="nameCon">
                            <a href="../../Member.html">
                                <img class="rounded-circle img-fluid" src="../../image/IMG_0987.JPG" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        </div>

        <!-- <div class="homeCenter col-12 col-md-9 order-2 order-md-1"> -->
        <!-- <div class="homeCenter col-12 col-md-9 order-2 order-md-1"> -->
        <div style="height:136vw;margin-top:10vw">
            <!-- ---------- -->
            <div id="groupNews">
                <!-- <div style="display:flex">
                    <a target="_blank" href="https://www.thsrc.com.tw" style="text-decoration:none">
                        <img src="./image/高鐵_logo.jpg" style="width:20vw;">
                    </a>
                </div> -->
                <div style="height:4vw">
                    <img src="./image/TRC_logo_1.png" style="width:16vw;">
                </div>
                <div style="text-align: center; font-size: 3.2vw;">
                    
                        台北車站 台鐵列車即時動態
                </div>
                <!-- 高鐵 台鐵 -->
                <!-- <div id="groupCity" class=""> -->
                    <!-- <div class="row justify-content-left m-0 p-0"> -->
                <div class="col-12 m-0 p-0">
                    <div class="row p-0" style="margin-top: 2vw">
                        <a target="_blank" href="https://www.thsrc.com.tw/">
                            <div class="cityDiv card">
                                <img class="cityImgV3" src="./image/台鐵-3.jpg">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="cityCol col-12" style="text-align: center; font-size: 4vw;">
                    <div style="margin-top: 2vw; font-size: 3.6vw;">
                        南下列車
                    </div>
                    <table style="width: 100%; font-size: 2.4vw; margin-top:2vw;">
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
                                <td class="col-2 flip_11 down_11" id="flip_11">
                                    <span class="digital_11 front_11 number_11_45"></span>
                                    <span class="digital_11 back_11 number_11_46"></span>
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
                                    <span class="digital_21 front_21 number_21_15"></span>
                                    <span class="digital_21 back_21 number_21_16"></span>
                                </td>
                                <td class="col-3 flip_22 down_22" id="flip_22">
                                    <span class="digital_22 front_22 number_22_1"></span>
                                    <span class="digital_22 back_22 number_22_2"></span>
                                </td>
                                <td class="col-4 flip_23 down_23" id="flip_23">
                                    <span class="digital_23 front_23 number_23_2"></span>
                                    <span class="digital_23 back_23 number_23_3"></span>
                                </td>
                                <td class="col-3 flip_24 down_24" id="flip_24">
                                    <span class="digital_24 front_24 number_24_1"></span>
                                    <span class="digital_24 back_24 number_24_2"></span>
                                </td>
                            </tr>
                            <tr class="row" style="margin-top: 0vw;">
                                <td class="col-2 flip_31 down_31" id="flip_31">
                                    <span class="digital_31 front_31 number_31_45"></span>
                                    <span class="digital_31 back_31 number_31_46"></span>
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
                                    <span class="digital_41 front_41 number_41_15"></span>
                                    <span class="digital_41 back_41 number_41_16"></span>
                                </td>
                                <td class="col-3 flip_42 down_42" id="flip_42">
                                    <span class="digital_42 front_42 number_42_1"></span>
                                    <span class="digital_42 back_42 number_42_2"></span>
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
                            <tr class="row" style="margin-top: 0vw;">
                                <td class="col-2 flip_51 down_51" id="flip_51">
                                    <span class="digital_51 front_51 number_51_45"></span>
                                    <span class="digital_51 back_51 number_51_46"></span>
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
                                    <span class="digital_61 front_61 number_61_15"></span>
                                    <span class="digital_61 back_61 number_61_16"></span>
                                </td>
                                <td class="col-3 flip_62 down_62" id="flip_62">
                                    <span class="digital_62 front_62 number_62_1"></span>
                                    <span class="digital_62 back_62 number_62_2"></span>
                                </td>
                                <td class="col-4 flip_63 down_63" id="flip_63">
                                    <span class="digital_63 front_63 number_63_2"></span>
                                    <span class="digital_63 back_63 number_63_3"></span>
                                </td>
                                <td class="col-3 flip_64 down_64" id="flip_64">
                                    <span class="digital_64 front_64 number_64_1"></span>
                                    <span class="digital_64 back_64 number_64_2"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="margin-top: 2vw; font-size: 3.6vw;">
                        北上列車
                    </div>
                    <table style="width: 100%; font-size: 2.4vw; margin-top:2vw;">
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
                                    <span class="digital_71 front_71 number_71_60"></span>
                                    <span class="digital_71 back_71 number_71_61"></span>
                                </td>
                                <td class="col-3 flip_72 down_72" id="flip_72">
                                    <span class="digital_72 front_72 number_72_1"></span>
                                    <span class="digital_72 back_72 number_72_2"></span>
                                </td>
                                <td class="col-4 flip_73 down_73" id="flip_73">
                                    <span class="digital_73 front_73 number_73_1"></span>
                                    <span class="digital_73 back_73 number_73_2"></span>
                                </td>
                                <td class="col-3 flip_74 down_74" id="flip_74">
                                    <span class="digital_74 front_74 number_74_1"></span>
                                    <span class="digital_74 back_74 number_74_2"></span>
                                </td>
                            </tr>
                            <tr class="row" style="margin-top: 0vw;">
                                <td class="col-2 flip_81 down_81" id="flip_81">
                                    <span class="digital_81 front_81 number_81_32"></span>
                                    <span class="digital_81 back_81 number_81_33"></span>
                                </td>
                                <td class="col-3 flip_82 down_82" id="flip_82">
                                    <span class="digital_82 front_82 number_82_2"></span>
                                    <span class="digital_82 back_82 number_82_3"></span>
                                </td>
                                <td class="col-4 flip_83 down_83" id="flip_83">
                                    <span class="digital_83 front_83 number_83_2"></span>
                                    <span class="digital_83 back_83 number_83_3"></span>
                                </td>
                                <td class="col-3 flip_84 down_84" id="flip_84">
                                    <span class="digital_84 front_84 number_84_1"></span>
                                    <span class="digital_84 back_84 number_84_2"></span>
                                </td>
                            </tr>
                            <tr class="row" style="margin-top: 0vw;">
                                <td class="col-2 flip_91 down_91" id="flip_91">
                                    <span class="digital_91 front_91 number_91_60"></span>
                                    <span class="digital_91 back_91 number_91_61"></span>
                                </td>
                                <td class="col-3 flip_92 down_92" id="flip_92">
                                    <span class="digital_92 front_92 number_92_1"></span>
                                    <span class="digital_92 back_92 number_92_2"></span>
                                </td>
                                <td class="col-4 flip_93 down_93" id="flip_93">
                                    <span class="digital_93 front_93 number_93_1"></span>
                                    <span class="digital_93 back_93 number_93_2"></span>
                                </td>
                                <td class="col-3 flip_94 down_94" id="flip_94">
                                    <span class="digital_94 front_94 number_94_1"></span>
                                    <span class="digital_94 back_94 number_94_2"></span>
                                </td>
                            </tr>
                            <tr class="row" style="margin-top: 0vw;">
                                <td class="col-2 flip_101 down_101" id="flip_101">
                                    <span class="digital_101 front_101 number_101_32"></span>
                                    <span class="digital_101 back_101 number_101_33"></span>
                                </td>
                                <td class="col-3 flip_102 down_102" id="flip_102">
                                    <span class="digital_102 front_102 number_102_2"></span>
                                    <span class="digital_102 back_102 number_102_3"></span>
                                </td>
                                <td class="col-4 flip_103 down_103" id="flip_103">
                                    <span class="digital_103 front_103 number_103_2"></span>
                                    <span class="digital_103 back_103 number_103_3"></span>
                                </td>
                                <td class="col-3 flip_104 down_104" id="flip_104">
                                    <span class="digital_104 front_104 number_104_1"></span>
                                    <span class="digital_104 back_104 number_104_2"></span>
                                </td>
                            </tr>
                            <tr class="row" style="margin-top: 0vw;">
                                <td class="col-2 flip_111 down_111" id="flip_111">
                                    <span class="digital_111 front_111 number_111_60"></span>
                                    <span class="digital_111 back_111 number_111_61"></span>
                                </td>
                                <td class="col-3 flip_112 down_112" id="flip_112">
                                    <span class="digital_112 front_112 number_112_1"></span>
                                    <span class="digital_112 back_112 number_112_2"></span>
                                </td>
                                <td class="col-4 flip_113 down_113" id="flip_113">
                                    <span class="digital_113 front_113 number_113_1"></span>
                                    <span class="digital_113 back_113 number_113_2"></span>
                                </td>
                                <td class="col-3 flip_114 down_114" id="flip_114">
                                    <span class="digital_114 front_114 number_114_1"></span>
                                    <span class="digital_114 back_114 number_114_2"></span>
                                </td>
                            </tr>
                            <tr class="row" style="margin-top: 0vw;">
                                <td class="col-2 flip_121 down_121" id="flip_121">
                                    <span class="digital_121 front_121 number_121_32"></span>
                                    <span class="digital_121 back_121 number_121_33"></span>
                                </td>
                                <td class="col-3 flip_122 down_122" id="flip_122">
                                    <span class="digital_122 front_122 number_122_2"></span>
                                    <span class="digital_122 back_122 number_122_3"></span>
                                </td>
                                <td class="col-4 flip_123 down_123" id="flip_123">
                                    <span class="digital_123 front_123 number_123_2"></span>
                                    <span class="digital_123 back_123 number_123_3"></span>
                                </td>
                                <td class="col-3 flip_124 down_124" id="flip_124">
                                    <span class="digital_124 front_124 number_124_1"></span>
                                    <span class="digital_124 back_124 number_124_2"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="btn-con" style="display: flex;">
            <div style="margin:auto;display:none;">
                <button id="btn0" style="background-color:rgb(217, 108, 39);border:0.4vw solid rgb(88, 34, 8);">向下翻+1</button>
                <button id="btn1" style="background-color:rgb(217, 108, 39);border:0.4vw solid rgb(88, 34, 8);">一起翻</button>
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
</div>
    <!--footer-->
    <div class="row footer" style="margin-top: 3%; background-color:rgb(189,207,229);">
        <div style="text-align: center; height:20vw">
            <div class="ftinfo">
                <h3>台鐵公司</h3>
            </div>
        </div>
    </div>

    <div class="row st" style="background-color:rgb(156,181,210)">
        <div>
            <p><small>&copy; 2023-2024 iSpan EEIT73 </small></p>
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
        var flip_51 = document.getElementById('flip_51')
        var flip_52 = document.getElementById('flip_52')
        var flip_53 = document.getElementById('flip_53')
        var flip_61 = document.getElementById('flip_61')
        var flip_62 = document.getElementById('flip_62')
        var flip_63 = document.getElementById('flip_63')
        var flip_71 = document.getElementById('flip_71')
        var flip_72 = document.getElementById('flip_72')
        var flip_73 = document.getElementById('flip_73')
        var flip_81 = document.getElementById('flip_81')
        var flip_82 = document.getElementById('flip_82')
        var flip_83 = document.getElementById('flip_83')
        var flip_91 = document.getElementById('flip_91')
        var flip_92 = document.getElementById('flip_92')
        var flip_93 = document.getElementById('flip_93')
        var flip_101 = document.getElementById('flip_101')
        var flip_102 = document.getElementById('flip_102')
        var flip_103 = document.getElementById('flip_103')
        var flip_111 = document.getElementById('flip_111')
        var flip_112 = document.getElementById('flip_112')
        var flip_113 = document.getElementById('flip_113')
        var flip_121 = document.getElementById('flip_121')
        var flip_122 = document.getElementById('flip_122')
        var flip_123 = document.getElementById('flip_123')
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
        var backNode_51 = document.querySelector('.back_51')
        var backNode_52 = document.querySelector('.back_52')
        var backNode_53 = document.querySelector('.back_53')
        var backNode_61 = document.querySelector('.back_61')
        var backNode_62 = document.querySelector('.back_62')
        var backNode_63 = document.querySelector('.back_63')
        var backNode_71 = document.querySelector('.back_71')
        var backNode_72 = document.querySelector('.back_72')
        var backNode_73 = document.querySelector('.back_73')
        var backNode_81 = document.querySelector('.back_81')
        var backNode_82 = document.querySelector('.back_82')
        var backNode_83 = document.querySelector('.back_83')
        var backNode_91 = document.querySelector('.back_91')
        var backNode_92 = document.querySelector('.back_92')
        var backNode_93 = document.querySelector('.back_93')
        var backNode_101 = document.querySelector('.back_101')
        var backNode_102 = document.querySelector('.back_102')
        var backNode_103 = document.querySelector('.back_103')
        var backNode_111 = document.querySelector('.back_111')
        var backNode_112 = document.querySelector('.back_112')
        var backNode_113 = document.querySelector('.back_113')
        var backNode_121 = document.querySelector('.back_121')
        var backNode_122 = document.querySelector('.back_122')
        var backNode_123 = document.querySelector('.back_123')
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
        var frontNode_51 = document.querySelector('.front_51')
        var frontNode_52 = document.querySelector('.front_52')
        var frontNode_53 = document.querySelector('.front_53')
        var frontNode_61 = document.querySelector('.front_61')
        var frontNode_62 = document.querySelector('.front_62')
        var frontNode_63 = document.querySelector('.front_63')
        var frontNode_71 = document.querySelector('.front_71')
        var frontNode_72 = document.querySelector('.front_72')
        var frontNode_73 = document.querySelector('.front_73')
        var frontNode_81 = document.querySelector('.front_81')
        var frontNode_82 = document.querySelector('.front_82')
        var frontNode_83 = document.querySelector('.front_83')
        var frontNode_91 = document.querySelector('.front_91')
        var frontNode_92 = document.querySelector('.front_92')
        var frontNode_93 = document.querySelector('.front_93')
        var frontNode_101 = document.querySelector('.front_101')
        var frontNode_102 = document.querySelector('.front_102')
        var frontNode_103 = document.querySelector('.front_103')
        var frontNode_111 = document.querySelector('.front_111')
        var frontNode_112 = document.querySelector('.front_112')
        var frontNode_113 = document.querySelector('.front_113')
        var frontNode_121 = document.querySelector('.front_121')
        var frontNode_122 = document.querySelector('.front_122')
        var frontNode_123 = document.querySelector('.front_123')
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
            flipDown_51();
            flipDown_52();
            flipDown_53();
            flipDown_61();
            flipDown_62();
            flipDown_63();
            flipDown_71();
            flipDown_72();
            flipDown_73();
            flipDown_81();
            flipDown_82();
            flipDown_83();
            flipDown_91();
            flipDown_92();
            flipDown_93();
            flipDown_101();
            flipDown_102();
            flipDown_103();
            flipDown_111();
            flipDown_112();
            flipDown_113();
            flipDown_121();
            flipDown_122();
            flipDown_123();
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
            setTimeout("BusState_51()", 590);
            setTimeout("BusState_52()", 590);
            setTimeout("BusState_53()", 590);
            setTimeout("BusState_61()", 590);
            setTimeout("BusState_62()", 590);
            setTimeout("BusState_63()", 590);
            setTimeout("BusState_71()", 590);
            setTimeout("BusState_72()", 590);
            setTimeout("BusState_73()", 590);
            setTimeout("BusState_81()", 590);
            setTimeout("BusState_82()", 590);
            setTimeout("BusState_83()", 590);
            setTimeout("BusState_91()", 590);
            setTimeout("BusState_92()", 590);
            setTimeout("BusState_93()", 590);
            setTimeout("BusState_101()", 590);
            setTimeout("BusState_102()", 590);
            setTimeout("BusState_103()", 590);
            setTimeout("BusState_111()", 590);
            setTimeout("BusState_112()", 590);
            setTimeout("BusState_113()", 590);
            setTimeout("BusState_121()", 590);
            setTimeout("BusState_122()", 590);
            setTimeout("BusState_123()", 590);
        })

<?php
$timenow_h = date("H");
if ($timenow_h < 12) {
    echo "var count_13 = 1;";
    echo "var count_23 = 2;";
    echo "var count_33 = 3;";
    echo "var count_43 = 4;";
    echo "var count_53 = 5;";
    echo "var count_63 = 6;";
    echo "var count_73 = 1;";
    echo "var count_83 = 2;";
    echo "var count_93 = 3;";
    echo "var count_103 = 4;";
    echo "var count_113 = 5;";
    echo "var count_123 = 6;";
} else if ($timenow_h >= 12 && $timenow_h < 18 ) {
    echo "var count_13 = 32;";
    echo "var count_23 = 33;";
    echo "var count_33 = 34;";
    echo "var count_43 = 35;";
    echo "var count_53 = 36;";
    echo "var count_63 = 37;";
    echo "var count_73 = 27;";
    echo "var count_83 = 28;";
    echo "var count_93 = 29;";
    echo "var count_103 = 30;";
    echo "var count_113 = 31;";
    echo "var count_123 = 32;";
} else if ($timenow_h >= 18 && $timenow_h < 24 ) {
    echo "var count_13 = 65;";
    echo "var count_23 = 66;";
    echo "var count_33 = 67;";
    echo "var count_43 = 68;";
    echo "var count_53 = 69;";
    echo "var count_63 = 70;";
    echo "var count_73 = 60;";
    echo "var count_83 = 61;";
    echo "var count_93 = 62;";
    echo "var count_103 = 63;";
    echo "var count_113 = 64;";
    echo "var count_123 = 65;";
}
?>
        // var count_13 = 1
        // var count_23 = 2
        // var count_33 = 1
        // var count_43 = 2


        var count_11 = 1
        var count_12 = 1
        var count_21 = 2
        var count_22 = 2
        var count_31 = 3
        var count_32 = 1
        var count_41 = 4
        var count_42 = 2
        var count_51 = 5
        var count_52 = 1
        var count_61 = 6
        var count_62 = 2
        var count_71 = 1
        var count_72 = 1
        var count_81 = 2
        var count_82 = 2
        var count_91 = 3
        var count_92 = 1
        var count_101 = 4
        var count_102 = 2
        var count_111 = 5
        var count_112 = 1
        var count_121 = 6
        var count_122 = 2
        function flipDown_11() {
            frontNode_11.setAttribute('class', 'digital_11 front_11 number_11_' + count_11)
            var nextCount_11 = count_11 >= 94 ? 1 : (count_11 + 1)
            backNode_11.setAttribute('class', 'digital_11 back_11 number_11_' + nextCount_11)
            flip_11.setAttribute('class', 'col-2 flip_11 down_11 go_11')
            setTimeout(function () {
                flip_11.setAttribute('class', 'col-2 flip_11 down_11')
                frontNode_11.setAttribute('class', 'digital_11 front_11 number_11_' + nextCount_11)
                count_11 = nextCount_11
            }, 210)
        }
        function flipDown_12() {
            frontNode_12.setAttribute('class', 'digital_12 front_12 number_12_' + count_12)
            var nextCount_12 = count_12 >= 12 ? 1 : (count_12 + 1)
            backNode_12.setAttribute('class', 'digital_12 back_12 number_12_' + nextCount_12)
            flip_12.setAttribute('class', 'col-3 flip_12 down_12 go_12')
            setTimeout(function () {
                flip_12.setAttribute('class', 'col-3 flip_12 down_12')
                frontNode_12.setAttribute('class', 'digital_12 front_12 number_12_' + nextCount_12)
                count_12 = nextCount_12
            }, 210)
        }
        function flipDown_13() {
            frontNode_13.setAttribute('class', 'digital_13 front_13 number_13_' + count_13)
            var nextCount_13 = count_13 >= 94 ? 1 : (count_13 + 1)
            backNode_13.setAttribute('class', 'digital_13 back_13 number_13_' + nextCount_13)
            flip_13.setAttribute('class', 'col-4 flip_13 down_13 go_13')
            setTimeout(function () {
                flip_13.setAttribute('class', 'col-4 flip_13 down_13')
                frontNode_13.setAttribute('class', 'digital_13 front_13 number_13_' + nextCount_13)
                count_13 = nextCount_13
            }, 210)
        }

        function flipDown_21() {
            frontNode_21.setAttribute('class', 'digital_21 front_21 number_21_' + count_21)
            var nextCount_21 = count_21 >= 94 ? 1 : (count_21 + 1)
            backNode_21.setAttribute('class', 'digital_21 back_21 number_21_' + nextCount_21)
            flip_21.setAttribute('class', 'col-2 flip_21 down_21 go_21')
            setTimeout(function () {
                flip_21.setAttribute('class', 'col-2 flip_21 down_21')
                frontNode_21.setAttribute('class', 'digital_21 front_21 number_21_' + nextCount_21)
                count_21 = nextCount_21
            }, 210)
        }
        function flipDown_22() {
            frontNode_22.setAttribute('class', 'digital_22 front_22 number_22_' + count_22)
            var nextCount_22 = count_22 >= 12 ? 1 : (count_22 + 1)
            backNode_22.setAttribute('class', 'digital_22 back_22 number_22_' + nextCount_22)
            flip_22.setAttribute('class', 'col-3 flip_22 down_22 go_22')
            setTimeout(function () {
                flip_22.setAttribute('class', 'col-3 flip_22 down_22')
                frontNode_22.setAttribute('class', 'digital_22 front_22 number_22_' + nextCount_22)
                count_22 = nextCount_22
            }, 210)
        }
        function flipDown_23() {
            frontNode_23.setAttribute('class', 'digital_23 front_23 number_23_' + count_23)
            var nextCount_23 = count_23 >= 94 ? 1 : (count_23 + 1)
            backNode_23.setAttribute('class', 'digital_23 back_23 number_23_' + nextCount_23)
            flip_23.setAttribute('class', 'col-4 flip_23 down_23 go_23')
            setTimeout(function () {
                flip_23.setAttribute('class', 'col-4 flip_23 down_23')
                frontNode_23.setAttribute('class', 'digital_23 front_23 number_23_' + nextCount_23)
                count_23 = nextCount_23
            }, 210)
        }
        function flipDown_31() {
            frontNode_31.setAttribute('class', 'digital_31 front_31 number_31_' + count_31)
            var nextCount_31 = count_31 >= 94 ? 1 : (count_31 + 1)
            backNode_31.setAttribute('class', 'digital_31 back_31 number_31_' + nextCount_31)
            flip_31.setAttribute('class', 'col-2 flip_31 down_31 go_31')
            setTimeout(function () {
                flip_31.setAttribute('class', 'col-2 flip_31 down_31')
                frontNode_31.setAttribute('class', 'digital_31 front_31 number_31_' + nextCount_31)
                count_31 = nextCount_31
            }, 210)
        }
        function flipDown_32() {
            frontNode_32.setAttribute('class', 'digital_32 front_32 number_32_' + count_32)
            var nextCount_32 = count_32 >= 12 ? 1 : (count_32 + 1)
            backNode_32.setAttribute('class', 'digital_32 back_32 number_32_' + nextCount_32)
            flip_32.setAttribute('class', 'col-3 flip_32 down_32 go_32')
            setTimeout(function () {
                flip_32.setAttribute('class', 'col-3 flip_32 down_32')
                frontNode_32.setAttribute('class', 'digital_32 front_32 number_32_' + nextCount_32)
                count_32 = nextCount_32
            }, 210)
        }
        function flipDown_33() {
            frontNode_33.setAttribute('class', 'digital_33 front_33 number_33_' + count_33)
            var nextCount_33 = count_33 >= 94 ? 1 : (count_33 + 1)
            backNode_33.setAttribute('class', 'digital_33 back_33 number_33_' + nextCount_33)
            flip_33.setAttribute('class', 'col-4 flip_33 down_33 go_33')
            setTimeout(function () {
                flip_33.setAttribute('class', 'col-4 flip_33 down_33')
                frontNode_33.setAttribute('class', 'digital_33 front_33 number_33_' + nextCount_33)
                count_33 = nextCount_33
            }, 210)
        }

        function flipDown_41() {
            frontNode_41.setAttribute('class', 'digital_41 front_41 number_41_' + count_41)
            var nextCount_41 = count_41 >= 94 ? 1 : (count_41 + 1)
            backNode_41.setAttribute('class', 'digital_41 back_41 number_41_' + nextCount_41)
            flip_41.setAttribute('class', 'col-2 flip_41 down_41 go_41')
            setTimeout(function () {
                flip_41.setAttribute('class', 'col-2 flip_41 down_41')
                frontNode_41.setAttribute('class', 'digital_41 front_41 number_41_' + nextCount_41)
                count_41 = nextCount_41
            }, 210)
        }
        function flipDown_42() {
            frontNode_42.setAttribute('class', 'digital_42 front_42 number_42_' + count_42)
            var nextCount_42 = count_42 >= 12 ? 1 : (count_42 + 1)
            backNode_42.setAttribute('class', 'digital_42 back_42 number_42_' + nextCount_42)
            flip_42.setAttribute('class', 'col-3 flip_42 down_42 go_42')
            setTimeout(function () {
                flip_42.setAttribute('class', 'col-3 flip_42 down_42')
                frontNode_42.setAttribute('class', 'digital_42 front_42 number_42_' + nextCount_42)
                count_42 = nextCount_42
            }, 210)
        }
        function flipDown_43() {
            frontNode_43.setAttribute('class', 'digital_43 front_43 number_43_' + count_43)
            var nextCount_43 = count_43 >= 94 ? 1 : (count_43 + 1)
            backNode_43.setAttribute('class', 'digital_43 back_43 number_43_' + nextCount_43)
            flip_43.setAttribute('class', 'col-4 flip_43 down_43 go_43')
            setTimeout(function () {
                flip_43.setAttribute('class', 'col-4 flip_43 down_43')
                frontNode_43.setAttribute('class', 'digital_43 front_43 number_43_' + nextCount_43)
                count_43 = nextCount_43
            }, 210)
        }
        function flipDown_51() {
            frontNode_51.setAttribute('class', 'digital_51 front_51 number_51_' + count_51)
            var nextCount_51 = count_51 >= 94 ? 1 : (count_51 + 1)
            backNode_51.setAttribute('class', 'digital_51 back_51 number_51_' + nextCount_51)
            flip_51.setAttribute('class', 'col-2 flip_51 down_51 go_51')
            setTimeout(function () {
                flip_51.setAttribute('class', 'col-2 flip_51 down_51')
                frontNode_51.setAttribute('class', 'digital_51 front_51 number_51_' + nextCount_51)
                count_51 = nextCount_51
            }, 210)
        }
        function flipDown_52() {
            frontNode_52.setAttribute('class', 'digital_52 front_52 number_52_' + count_52)
            var nextCount_52 = count_52 >= 12 ? 1 : (count_52 + 1)
            backNode_52.setAttribute('class', 'digital_52 back_52 number_52_' + nextCount_52)
            flip_52.setAttribute('class', 'col-3 flip_52 down_52 go_52')
            setTimeout(function () {
                flip_52.setAttribute('class', 'col-3 flip_52 down_52')
                frontNode_52.setAttribute('class', 'digital_52 front_52 number_52_' + nextCount_52)
                count_52 = nextCount_52
            }, 210)
        }
        function flipDown_53() {
            frontNode_53.setAttribute('class', 'digital_53 front_53 number_53_' + count_53)
            var nextCount_53 = count_53 >= 94 ? 1 : (count_53 + 1)
            backNode_53.setAttribute('class', 'digital_53 back_53 number_53_' + nextCount_53)
            flip_53.setAttribute('class', 'col-4 flip_53 down_53 go_53')
            setTimeout(function () {
                flip_53.setAttribute('class', 'col-4 flip_53 down_53')
                frontNode_53.setAttribute('class', 'digital_53 front_53 number_53_' + nextCount_53)
                count_53 = nextCount_53
            }, 210)
        }
        function flipDown_61() {
            frontNode_61.setAttribute('class', 'digital_61 front_61 number_61_' + count_61)
            var nextCount_61 = count_61 >= 94 ? 1 : (count_61 + 1)
            backNode_61.setAttribute('class', 'digital_61 back_61 number_61_' + nextCount_61)
            flip_61.setAttribute('class', 'col-2 flip_61 down_61 go_61')
            setTimeout(function () {
                flip_61.setAttribute('class', 'col-2 flip_61 down_61')
                frontNode_61.setAttribute('class', 'digital_61 front_61 number_61_' + nextCount_61)
                count_61 = nextCount_61
            }, 210)
        }
        function flipDown_62() {
            frontNode_62.setAttribute('class', 'digital_62 front_62 number_62_' + count_62)
            var nextCount_62 = count_62 >= 12 ? 1 : (count_62 + 1)
            backNode_62.setAttribute('class', 'digital_62 back_62 number_62_' + nextCount_62)
            flip_62.setAttribute('class', 'col-3 flip_62 down_62 go_62')
            setTimeout(function () {
                flip_62.setAttribute('class', 'col-3 flip_62 down_62')
                frontNode_62.setAttribute('class', 'digital_62 front_62 number_62_' + nextCount_62)
                count_62 = nextCount_62
            }, 210)
        }
        function flipDown_63() {
            frontNode_63.setAttribute('class', 'digital_63 front_63 number_63_' + count_63)
            var nextCount_63 = count_63 >= 94 ? 1 : (count_63 + 1)
            backNode_63.setAttribute('class', 'digital_63 back_63 number_63_' + nextCount_63)
            flip_63.setAttribute('class', 'col-4 flip_63 down_63 go_63')
            setTimeout(function () {
                flip_63.setAttribute('class', 'col-4 flip_63 down_63')
                frontNode_63.setAttribute('class', 'digital_63 front_63 number_63_' + nextCount_63)
                count_63 = nextCount_63
            }, 210)
        }
        function flipDown_71() {
            frontNode_71.setAttribute('class', 'digital_71 front_71 number_71_' + count_71)
            var nextCount_71 = count_71 >= 101 ? 1 : (count_71 + 1)
            backNode_71.setAttribute('class', 'digital_71 back_71 number_71_' + nextCount_71)
            flip_71.setAttribute('class', 'col-2 flip_71 down_71 go_71')
            setTimeout(function () {
                flip_71.setAttribute('class', 'col-2 flip_71 down_71')
                frontNode_71.setAttribute('class', 'digital_71 front_71 number_71_' + nextCount_71)
                count_71 = nextCount_71
            }, 210)
        }
        function flipDown_72() {
            frontNode_72.setAttribute('class', 'digital_72 front_72 number_72_' + count_72)
            var nextCount_72 = count_72 >= 12 ? 1 : (count_72 + 1)
            backNode_72.setAttribute('class', 'digital_72 back_72 number_72_' + nextCount_72)
            flip_72.setAttribute('class', 'col-3 flip_72 down_72 go_72')
            setTimeout(function () {
                flip_72.setAttribute('class', 'col-3 flip_72 down_72')
                frontNode_72.setAttribute('class', 'digital_72 front_72 number_72_' + nextCount_72)
                count_72 = nextCount_72
            }, 210)
        }
        function flipDown_73() {
            frontNode_73.setAttribute('class', 'digital_73 front_73 number_73_' + count_73)
            var nextCount_73 = count_73 >= 101 ? 1 : (count_73 + 1)
            backNode_73.setAttribute('class', 'digital_73 back_73 number_73_' + nextCount_73)
            flip_73.setAttribute('class', 'col-4 flip_73 down_73 go_73')
            setTimeout(function () {
                flip_73.setAttribute('class', 'col-4 flip_73 down_73')
                frontNode_73.setAttribute('class', 'digital_73 front_73 number_73_' + nextCount_73)
                count_73 = nextCount_73
            }, 210)
        }
        function flipDown_81() {
            frontNode_81.setAttribute('class', 'digital_81 front_81 number_81_' + count_81)
            var nextCount_81 = count_81 >= 101 ? 1 : (count_81 + 1)
            backNode_81.setAttribute('class', 'digital_81 back_81 number_81_' + nextCount_81)
            flip_81.setAttribute('class', 'col-2 flip_81 down_81 go_81')
            setTimeout(function () {
                flip_81.setAttribute('class', 'col-2 flip_81 down_81')
                frontNode_81.setAttribute('class', 'digital_81 front_81 number_81_' + nextCount_81)
                count_81 = nextCount_81
            }, 210)
        }
        function flipDown_82() {
            frontNode_82.setAttribute('class', 'digital_82 front_82 number_82_' + count_82)
            var nextCount_82 = count_82 >= 12 ? 1 : (count_82 + 1)
            backNode_82.setAttribute('class', 'digital_82 back_82 number_82_' + nextCount_82)
            flip_82.setAttribute('class', 'col-3 flip_82 down_82 go_82')
            setTimeout(function () {
                flip_82.setAttribute('class', 'col-3 flip_82 down_82')
                frontNode_82.setAttribute('class', 'digital_82 front_82 number_82_' + nextCount_82)
                count_82 = nextCount_82
            }, 210)
        }
        function flipDown_83() {
            frontNode_83.setAttribute('class', 'digital_83 front_83 number_83_' + count_83)
            var nextCount_83 = count_83 >= 101 ? 1 : (count_83 + 1)
            backNode_83.setAttribute('class', 'digital_83 back_83 number_83_' + nextCount_83)
            flip_83.setAttribute('class', 'col-4 flip_83 down_83 go_83')
            setTimeout(function () {
                flip_83.setAttribute('class', 'col-4 flip_83 down_83')
                frontNode_83.setAttribute('class', 'digital_83 front_83 number_83_' + nextCount_83)
                count_83 = nextCount_83
            }, 210)
        }
        function flipDown_91() {
            frontNode_91.setAttribute('class', 'digital_91 front_91 number_91_' + count_91)
            var nextCount_91 = count_91 >= 101 ? 1 : (count_91 + 1)
            backNode_91.setAttribute('class', 'digital_91 back_91 number_91_' + nextCount_91)
            flip_91.setAttribute('class', 'col-2 flip_91 down_91 go_91')
            setTimeout(function () {
                flip_91.setAttribute('class', 'col-2 flip_91 down_91')
                frontNode_91.setAttribute('class', 'digital_91 front_91 number_91_' + nextCount_91)
                count_91 = nextCount_91
            }, 210)
        }
        function flipDown_92() {
            frontNode_92.setAttribute('class', 'digital_92 front_92 number_92_' + count_92)
            var nextCount_92 = count_92 >= 12 ? 1 : (count_92 + 1)
            backNode_92.setAttribute('class', 'digital_92 back_92 number_92_' + nextCount_92)
            flip_92.setAttribute('class', 'col-3 flip_92 down_92 go_92')
            setTimeout(function () {
                flip_92.setAttribute('class', 'col-3 flip_92 down_92')
                frontNode_92.setAttribute('class', 'digital_92 front_92 number_92_' + nextCount_92)
                count_92 = nextCount_92
            }, 210)
        }
        function flipDown_93() {
            frontNode_93.setAttribute('class', 'digital_93 front_93 number_93_' + count_93)
            var nextCount_93 = count_93 >= 101 ? 1 : (count_93 + 1)
            backNode_93.setAttribute('class', 'digital_93 back_93 number_93_' + nextCount_93)
            flip_93.setAttribute('class', 'col-4 flip_93 down_93 go_93')
            setTimeout(function () {
                flip_93.setAttribute('class', 'col-4 flip_93 down_93')
                frontNode_93.setAttribute('class', 'digital_93 front_93 number_93_' + nextCount_93)
                count_93 = nextCount_93
            }, 210)
        }
        function flipDown_101() {
            frontNode_101.setAttribute('class', 'digital_101 front_101 number_101_' + count_101)
            var nextCount_101 = count_101 >= 101 ? 1 : (count_101 + 1)
            backNode_101.setAttribute('class', 'digital_101 back_101 number_101_' + nextCount_101)
            flip_101.setAttribute('class', 'col-2 flip_101 down_101 go_101')
            setTimeout(function () {
                flip_101.setAttribute('class', 'col-2 flip_101 down_101')
                frontNode_101.setAttribute('class', 'digital_101 front_101 number_101_' + nextCount_101)
                count_101 = nextCount_101
            }, 210)
        }
        function flipDown_102() {
            frontNode_102.setAttribute('class', 'digital_102 front_102 number_102_' + count_102)
            var nextCount_102 = count_102 >= 12 ? 1 : (count_102 + 1)
            backNode_102.setAttribute('class', 'digital_102 back_102 number_102_' + nextCount_102)
            flip_102.setAttribute('class', 'col-3 flip_102 down_102 go_102')
            setTimeout(function () {
                flip_102.setAttribute('class', 'col-3 flip_102 down_102')
                frontNode_102.setAttribute('class', 'digital_102 front_102 number_102_' + nextCount_102)
                count_102 = nextCount_102
            }, 210)
        }
        function flipDown_103() {
            frontNode_103.setAttribute('class', 'digital_103 front_103 number_103_' + count_103)
            var nextCount_103 = count_103 >= 101 ? 1 : (count_103 + 1)
            backNode_103.setAttribute('class', 'digital_103 back_103 number_103_' + nextCount_103)
            flip_103.setAttribute('class', 'col-4 flip_103 down_103 go_103')
            setTimeout(function () {
                flip_103.setAttribute('class', 'col-4 flip_103 down_103')
                frontNode_103.setAttribute('class', 'digital_103 front_103 number_103_' + nextCount_103)
                count_103 = nextCount_103
            }, 210)
        }
        function flipDown_111() {
            frontNode_111.setAttribute('class', 'digital_111 front_111 number_111_' + count_111)
            var nextCount_111 = count_111 >= 101 ? 1 : (count_111 + 1)
            backNode_111.setAttribute('class', 'digital_111 back_111 number_111_' + nextCount_111)
            flip_111.setAttribute('class', 'col-2 flip_111 down_111 go_111')
            setTimeout(function () {
                flip_111.setAttribute('class', 'col-2 flip_111 down_111')
                frontNode_111.setAttribute('class', 'digital_111 front_111 number_111_' + nextCount_111)
                count_111 = nextCount_111
            }, 210)
        }
        function flipDown_112() {
            frontNode_112.setAttribute('class', 'digital_112 front_112 number_112_' + count_112)
            var nextCount_112 = count_112 >= 12 ? 1 : (count_112 + 1)
            backNode_112.setAttribute('class', 'digital_112 back_112 number_112_' + nextCount_112)
            flip_112.setAttribute('class', 'col-3 flip_112 down_112 go_112')
            setTimeout(function () {
                flip_112.setAttribute('class', 'col-3 flip_112 down_112')
                frontNode_112.setAttribute('class', 'digital_112 front_112 number_112_' + nextCount_112)
                count_112 = nextCount_112
            }, 210)
        }
        function flipDown_113() {
            frontNode_113.setAttribute('class', 'digital_113 front_113 number_113_' + count_113)
            var nextCount_113 = count_113 >= 101 ? 1 : (count_113 + 1)
            backNode_113.setAttribute('class', 'digital_113 back_113 number_113_' + nextCount_113)
            flip_113.setAttribute('class', 'col-4 flip_113 down_113 go_113')
            setTimeout(function () {
                flip_113.setAttribute('class', 'col-4 flip_113 down_113')
                frontNode_113.setAttribute('class', 'digital_113 front_113 number_113_' + nextCount_113)
                count_113 = nextCount_113
            }, 210)
        }
        function flipDown_121() {
            frontNode_121.setAttribute('class', 'digital_121 front_121 number_121_' + count_121)
            var nextCount_121 = count_121 >= 101 ? 1 : (count_121 + 1)
            backNode_121.setAttribute('class', 'digital_121 back_121 number_121_' + nextCount_121)
            flip_121.setAttribute('class', 'col-2 flip_121 down_121 go_121')
            setTimeout(function () {
                flip_121.setAttribute('class', 'col-2 flip_121 down_121')
                frontNode_121.setAttribute('class', 'digital_121 front_121 number_121_' + nextCount_121)
                count_121 = nextCount_121
            }, 210)
        }
        function flipDown_122() {
            frontNode_122.setAttribute('class', 'digital_122 front_122 number_122_' + count_122)
            var nextCount_122 = count_122 >= 12 ? 1 : (count_122 + 1)
            backNode_122.setAttribute('class', 'digital_122 back_122 number_122_' + nextCount_122)
            flip_122.setAttribute('class', 'col-3 flip_122 down_122 go_122')
            setTimeout(function () {
                flip_122.setAttribute('class', 'col-3 flip_122 down_122')
                frontNode_122.setAttribute('class', 'digital_122 front_122 number_122_' + nextCount_122)
                count_122 = nextCount_122
            }, 210)
        }
        function flipDown_123() {
            frontNode_123.setAttribute('class', 'digital_123 front_123 number_123_' + count_123)
            var nextCount_123 = count_123 >= 101 ? 1 : (count_123 + 1)
            backNode_123.setAttribute('class', 'digital_123 back_123 number_123_' + nextCount_123)
            flip_123.setAttribute('class', 'col-4 flip_123 down_123 go_123')
            setTimeout(function () {
                flip_123.setAttribute('class', 'col-4 flip_123 down_123')
                frontNode_123.setAttribute('class', 'digital_123 front_123 number_123_' + nextCount_123)
                count_123 = nextCount_123
            }, 210)
        }



        function BusState_11(e) {
            if (e == null) {
                $.ajax({
                    url:"db-11.php",
                    success: function (response) {
                        if (count_11 != response) {
                                flipDown_11();
                                setTimeout(`BusState_11(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_11 != e) {
                    flipDown_11();
                    setTimeout(`BusState_11(${e})`, 230);
                }
            }
        }


        function BusState_12(e) {
            if (e == null) {
                $.ajax({
                    url:"db-12.php",
                    success: function (response) {
                        if (count_12 != response) {
                                flipDown_12();
                                setTimeout(`BusState_12(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_12 != e) {
                    flipDown_12();
                    setTimeout(`BusState_12(${e})`, 230);
                }
            }
        }


        function BusState_13(e) {
            if (e == null) {
                $.ajax({
                    url:"db-13.php",
                    success: function (response) {
                        if (count_13 != response) {
                                flipDown_13();
                                setTimeout(`BusState_13(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_13 != e) {
                    flipDown_13();
                    setTimeout(`BusState_13(${e})`, 230);
                }
            }
        }

        function BusState_21(e) {
            if (e == null) {
                $.ajax({
                    url:"db-21.php",
                    success: function (response) {
                        if (count_21 != response) {
                                flipDown_21();
                                setTimeout(`BusState_21(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_21 != e) {
                    flipDown_21();
                    setTimeout(`BusState_21(${e})`, 230);
                }
            }
        }

        function BusState_22(e) {
            if (e == null) {
                $.ajax({
                    url:"db-22.php",
                    success: function (response) {
                        if (count_22 != response) {
                                flipDown_22();
                                setTimeout(`BusState_22(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_22 != e) {
                    flipDown_22();
                    setTimeout(`BusState_22(${e})`, 230);
                }
            }
        }

        function BusState_23(e) {
            if (e == null) {
                $.ajax({
                    url:"db-23.php",
                    success: function (response) {
                        if (count_23 != response) {
                                flipDown_23();
                                setTimeout(`BusState_23(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_23 != e) {
                    flipDown_23();
                    setTimeout(`BusState_23(${e})`, 230);
                }
            }
        }


        function BusState_31(e) {
            if (e == null) {
                $.ajax({
                    url:"db-31.php",
                    success: function (response) {
                        if (count_31 != response) {
                                flipDown_31();
                                setTimeout(`BusState_31(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_31 != e) {
                    flipDown_31();
                    setTimeout(`BusState_31(${e})`, 230);
                }
            }
        }

        function BusState_32(e) {
            if (e == null) {
                $.ajax({
                    url:"db-32.php",
                    success: function (response) {
                        if (count_32 != response) {
                                flipDown_32();
                                setTimeout(`BusState_32(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_32 != e) {
                    flipDown_32();
                    setTimeout(`BusState_32(${e})`, 230);
                }
            }
        }

        function BusState_33(e) {
            if (e == null) {
                $.ajax({
                    url:"db-33.php",
                    success: function (response) {
                        if (count_33 != response) {
                                flipDown_33();
                                setTimeout(`BusState_33(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_33 != e) {
                    flipDown_33();
                    setTimeout(`BusState_33(${e})`, 230);
                }
            }
        }

        function BusState_41(e) {
            if (e == null) {
                $.ajax({
                    url:"db-41.php",
                    success: function (response) {
                        if (count_41 != response) {
                                flipDown_41();
                                setTimeout(`BusState_41(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_41 != e) {
                    flipDown_41();
                    setTimeout(`BusState_41(${e})`, 230);
                }
            }
        }

        function BusState_42(e) {
            if (e == null) {
                $.ajax({
                    url:"db-42.php",
                    success: function (response) {
                        if (count_42 != response) {
                                flipDown_42();
                                setTimeout(`BusState_42(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_42 != e) {
                    flipDown_42();
                    setTimeout(`BusState_42(${e})`, 230);
                }
            }
        }

        function BusState_43(e) {
            if (e == null) {
                $.ajax({
                    url:"db-43.php",
                    success: function (response) {
                        if (count_43 != response) {
                                flipDown_43();
                                setTimeout(`BusState_43(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_43 != e) {
                    flipDown_43();
                    setTimeout(`BusState_43(${e})`, 230);
                }
            }
        }
        
        function BusState_51(e) {
            if (e == null) {
                $.ajax({
                    url:"db-51.php",
                    success: function (response) {
                        if (count_51 != response) {
                                flipDown_51();
                                setTimeout(`BusState_51(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_51 != e) {
                    flipDown_51();
                    setTimeout(`BusState_51(${e})`, 230);
                }
            }
        }
        function BusState_52(e) {
            if (e == null) {
                $.ajax({
                    url:"db-52.php",
                    success: function (response) {
                        if (count_52 != response) {
                                flipDown_52();
                                setTimeout(`BusState_52(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_52 != e) {
                    flipDown_52();
                    setTimeout(`BusState_52(${e})`, 230);
                }
            }
        }
        function BusState_53(e) {
            if (e == null) {
                $.ajax({
                    url:"db-53.php",
                    success: function (response) {
                        if (count_53 != response) {
                                flipDown_53();
                                setTimeout(`BusState_53(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_53 != e) {
                    flipDown_53();
                    setTimeout(`BusState_53(${e})`, 230);
                }
            }
        }
        function BusState_61(e) {
            if (e == null) {
                $.ajax({
                    url:"db-61.php",
                    success: function (response) {
                        if (count_61 != response) {
                                flipDown_61();
                                setTimeout(`BusState_61(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_61 != e) {
                    flipDown_61();
                    setTimeout(`BusState_61(${e})`, 230);
                }
            }
        }
        function BusState_62(e) {
            if (e == null) {
                $.ajax({
                    url:"db-62.php",
                    success: function (response) {
                        if (count_62 != response) {
                                flipDown_62();
                                setTimeout(`BusState_62(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_62 != e) {
                    flipDown_62();
                    setTimeout(`BusState_62(${e})`, 230);
                }
            }
        }
        function BusState_63(e) {
            if (e == null) {
                $.ajax({
                    url:"db-63.php",
                    success: function (response) {
                        if (count_63 != response) {
                                flipDown_63();
                                setTimeout(`BusState_63(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_63 != e) {
                    flipDown_63();
                    setTimeout(`BusState_63(${e})`, 230);
                }
            }
        }
        function BusState_71(e) {
            if (e == null) {
                $.ajax({
                    url:"db-71.php",
                    success: function (response) {
                        if (count_71 != response) {
                                flipDown_71();
                                setTimeout(`BusState_71(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_71 != e) {
                    flipDown_71();
                    setTimeout(`BusState_71(${e})`, 230);
                }
            }
        }
        function BusState_72(e) {
            if (e == null) {
                $.ajax({
                    url:"db-72.php",
                    success: function (response) {
                        if (count_72 != response) {
                                flipDown_72();
                                setTimeout(`BusState_72(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_72 != e) {
                    flipDown_72();
                    setTimeout(`BusState_72(${e})`, 230);
                }
            }
        }
        function BusState_73(e) {
            if (e == null) {
                $.ajax({
                    url:"db-73.php",
                    success: function (response) {
                        if (count_73 != response) {
                                flipDown_73();
                                setTimeout(`BusState_73(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_73 != e) {
                    flipDown_73();
                    setTimeout(`BusState_73(${e})`, 230);
                }
            }
        }
        function BusState_81(e) {
            if (e == null) {
                $.ajax({
                    url:"db-81.php",
                    success: function (response) {
                        if (count_81 != response) {
                                flipDown_81();
                                setTimeout(`BusState_81(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_81 != e) {
                    flipDown_81();
                    setTimeout(`BusState_81(${e})`, 230);
                }
            }
        }
        function BusState_82(e) {
            if (e == null) {
                $.ajax({
                    url:"db-82.php",
                    success: function (response) {
                        if (count_82 != response) {
                                flipDown_82();
                                setTimeout(`BusState_82(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_82 != e) {
                    flipDown_82();
                    setTimeout(`BusState_82(${e})`, 230);
                }
            }
        }
        function BusState_83(e) {
            if (e == null) {
                $.ajax({
                    url:"db-83.php",
                    success: function (response) {
                        if (count_83 != response) {
                                flipDown_83();
                                setTimeout(`BusState_83(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_83 != e) {
                    flipDown_83();
                    setTimeout(`BusState_83(${e})`, 230);
                }
            }
        }
        function BusState_91(e) {
            if (e == null) {
                $.ajax({
                    url:"db-91.php",
                    success: function (response) {
                        if (count_91 != response) {
                                flipDown_91();
                                setTimeout(`BusState_91(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_91 != e) {
                    flipDown_91();
                    setTimeout(`BusState_91(${e})`, 230);
                }
            }
        }
        function BusState_92(e) {
            if (e == null) {
                $.ajax({
                    url:"db-92.php",
                    success: function (response) {
                        if (count_92 != response) {
                                flipDown_92();
                                setTimeout(`BusState_92(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_92 != e) {
                    flipDown_92();
                    setTimeout(`BusState_92(${e})`, 230);
                }
            }
        }
        function BusState_93(e) {
            if (e == null) {
                $.ajax({
                    url:"db-93.php",
                    success: function (response) {
                        if (count_93 != response) {
                                flipDown_93();
                                setTimeout(`BusState_93(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_93 != e) {
                    flipDown_93();
                    setTimeout(`BusState_93(${e})`, 230);
                }
            }
        }
        function BusState_101(e) {
            if (e == null) {
                $.ajax({
                    url:"db-101.php",
                    success: function (response) {
                        if (count_101 != response) {
                                flipDown_101();
                                setTimeout(`BusState_101(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_101 != e) {
                    flipDown_101();
                    setTimeout(`BusState_101(${e})`, 230);
                }
            }
        }
        function BusState_102(e) {
            if (e == null) {
                $.ajax({
                    url:"db-102.php",
                    success: function (response) {
                        if (count_102 != response) {
                                flipDown_102();
                                setTimeout(`BusState_102(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_102 != e) {
                    flipDown_102();
                    setTimeout(`BusState_102(${e})`, 230);
                }
            }
        }
        function BusState_103(e) {
            if (e == null) {
                $.ajax({
                    url:"db-103.php",
                    success: function (response) {
                        if (count_103 != response) {
                                flipDown_103();
                                setTimeout(`BusState_103(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_103 != e) {
                    flipDown_103();
                    setTimeout(`BusState_103(${e})`, 230);
                }
            }
        }
        function BusState_111(e) {
            if (e == null) {
                $.ajax({
                    url:"db-111.php",
                    success: function (response) {
                        if (count_111 != response) {
                                flipDown_111();
                                setTimeout(`BusState_111(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_111 != e) {
                    flipDown_111();
                    setTimeout(`BusState_111(${e})`, 230);
                }
            }
        }
        function BusState_112(e) {
            if (e == null) {
                $.ajax({
                    url:"db-112.php",
                    success: function (response) {
                        if (count_112 != response) {
                                flipDown_112();
                                setTimeout(`BusState_112(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_112 != e) {
                    flipDown_112();
                    setTimeout(`BusState_112(${e})`, 230);
                }
            }
        }
        function BusState_113(e) {
            if (e == null) {
                $.ajax({
                    url:"db-113.php",
                    success: function (response) {
                        if (count_113 != response) {
                                flipDown_113();
                                setTimeout(`BusState_113(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_113 != e) {
                    flipDown_113();
                    setTimeout(`BusState_113(${e})`, 230);
                }
            }
        }
        function BusState_121(e) {
            if (e == null) {
                $.ajax({
                    url:"db-121.php",
                    success: function (response) {
                        if (count_121 != response) {
                                flipDown_121();
                                setTimeout(`BusState_121(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_121 != e) {
                    flipDown_121();
                    setTimeout(`BusState_121(${e})`, 230);
                }
            }
        }
        function BusState_122(e) {
            if (e == null) {
                $.ajax({
                    url:"db-122.php",
                    success: function (response) {
                        if (count_122 != response) {
                                flipDown_122();
                                setTimeout(`BusState_122(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_122 != e) {
                    flipDown_122();
                    setTimeout(`BusState_122(${e})`, 230);
                }
            }
        }
        function BusState_123(e) {
            if (e == null) {
                $.ajax({
                    url:"db-123.php",
                    success: function (response) {
                        if (count_123 != response) {
                                flipDown_123();
                                setTimeout(`BusState_123(${response})`, 230);
                        }
                    }
                }); 
            }
            else {
                if (count_123 != e) {
                    flipDown_123();
                    setTimeout(`BusState_123(${e})`, 230);
                }
            }
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
            setTimeout("BusState_51()", 100);
            setTimeout("BusState_52()", 100);
            setTimeout("BusState_53()", 100);
            setTimeout("BusState_61()", 100);
            setTimeout("BusState_62()", 100);
            setTimeout("BusState_63()", 100);
            setTimeout("BusState_71()", 100);
            setTimeout("BusState_72()", 100);
            setTimeout("BusState_73()", 100);
            setTimeout("BusState_81()", 100);
            setTimeout("BusState_82()", 100);
            setTimeout("BusState_83()", 100);
            setTimeout("BusState_91()", 100);
            setTimeout("BusState_92()", 100);
            setTimeout("BusState_93()", 100);
            setTimeout("BusState_101()", 100);
            setTimeout("BusState_102()", 100);
            setTimeout("BusState_103()", 100);
            setTimeout("BusState_111()", 100);
            setTimeout("BusState_112()", 100);
            setTimeout("BusState_113()", 100);
            setTimeout("BusState_121()", 100);
            setTimeout("BusState_122()", 100);
            setTimeout("BusState_123()", 100);
            setTimeout("Start()", 60000);
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


        // }

    </script>
</body>

</html>

