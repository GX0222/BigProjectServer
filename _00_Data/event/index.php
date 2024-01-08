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
    <link rel="stylesheet" href="./Tools/NavBar_2.css">
    <!-- Css -->
    <link rel="stylesheet" href="./Tools/Even.css">
    <!-- Color -->
    <link rel="stylesheet" href="./Tools/Color.css">
    <!-- footer -->
    <link rel="stylesheet" href="./Tools/footer.css">

</head>

<body>
    <nav id="myNavbar" class="navbar navbar-expand-md bg-none w-100 fixed-top m-0 p-0" style=" top: 0px;">
        <div class="container-fluid m-0 p-0 h-100">
            <a href="./index.html" class="navbar-brand m-0 p-0" style="font-size:x-large;">
                <img src="./image/logo1228.png" class=" m-0 p-0" alt="logo" width="65" height="50">
            </a>
            <div class="memberConMd d-flex d-md-none">
                <div class="nameCon">
                    <a href="./Member.html">
                        <img class="rounded-circle img-fluid" src="./image/IMG_0987.JPG" alt="">
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
                        <a id="news" onclick="nav_item_active()" class="nav-link" aria-current="page" href="#">活動資訊</a>
                    </li>
                    <li class="nav-item">
                        <a id="trans" onclick="nav_item_active()" class="nav-link" aria-current="page" href="#">交通情報</a>
                    </li>
                    <li class="nav-item">
                        <a id="forum" onclick="nav_item_active()" class="nav-link" aria-current="page" href="#">旅遊論壇</a>
                    </li>
                    <li class="nav-item">
                        <a id="aboutus" onclick="nav_item_active()" class="nav-link" aria-current="page"
                            href="#">關於我們</a>
                    </li>
                </ul>
                <div class="memberCon d-none d-md-flex">
                    <div class="nameCon">
                        <a href="./Member.html">
                            <img class="rounded-circle img-fluid" src="./image/IMG_0987.JPG" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="info">
        <div class="center">
            <div class="eTitle">
            <?php
include("db.php");
$sql="SELECT * FROM taipei where ID=1;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {	  
		echo "<h1>".$row["activity_name"]."</h1>";
	}
  } else {
	echo "0 results";
  }
  $conn->close();
?>
            </div>





        </div>
        <div class="eImgCon">
            <img src="./image/2023聖誕節.jpg" alt="">
        </div>
        <div class="eInfo">
            <table class="table" style="text-align: center;">    <!-- 加入 style="text-align: center;" -->
                <thead class="thead-light">
                    <tr>
                        <th>活動時間</th>
                        <th>活動主辦方</th>
                        <th>活動地點</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >2023/12/24 - 2023/12/25</td>
                        <td >台北市政府</td>
                        <td >中正紀念堂廣場</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="eTextCon">
            <p>
                2023年，台北再度迎來盛大的聖誕季節，而台北耶誕城活動將成為繽紛華麗的冬日盛事。這個令人期待的活動將帶來一系列令人難以置信的體驗，讓遊客和居民感受到濃濃的節慶氛圍。
            </p>
            <p>
                台北耶誕城將擁有眾多精彩的活動和裝置，其中之一是聖誕樹點綴的中正紀念堂廣場。高聳的聖誕樹將以燈光秀和音樂相互輝映，為夜晚的城市增添了浪漫和祥和的氛圍。遊客可在這裡感受到濃濃的節慶氛圍，與家人和朋友一同共度美好時光。
            </p>
            <p>
                此外，台北耶誕城也將設置各種主題裝置，如繽紛的耶誕燈飾、可愛的聖誕老人雕像，以及歡樂的冰雪世界。這些精心設計的裝置將點亮整個城市，為大街小巷帶來一片歡樂的景象。遊客可以隨意漫步在燦爛的燈光中，感受到節慶的熱情。
            </p>
            <p>
                在耶誕城活動中，舉辦各種多彩的表演和活動也是不可或缺的一部分。歌舞表演、街頭藝人和節慶遊行將為遊客呈現一場場精彩絕倫的視覺盛宴。這不僅是對耶誕節的慶祝，更是一場展示藝術和文化的豐富活動。
            </p>
            <p>
                當然，台北耶誕城也不會忘記小朋友。設有兒童遊樂區域，包括遊樂設施、繪本角落和親子互動遊戲，為孩子們打造一個充滿歡笑和奇幻的世界。這裡將是全家共度美好時光的理想場所。
            </p>
            <p>
                總的來說，2023台北耶誕城活動將成為一場匯聚歡樂、燦爛和感恩的盛會。這個冬日聖誕季，讓我們一同在台北耶誕城中感受到節慶的魅力，共同迎接充滿愛與希望的新一年。
            </p>
        </div>
        <!-- Map -->
        <div class="eMapCon">
            <div class="eMapTitle">
                <h3>Google地圖</h3>
            </div>
            <iframe width="600" height="450" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=%E4%B8%AD%E6%AD%A3%E7%B4%80%E5%BF%B5%E5%A0%82%E5%BB%A3%E5%A0%B4&key=AIzaSyDCy0RwqQowmqnP461gmyRgD5hbhN5Uolg"
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