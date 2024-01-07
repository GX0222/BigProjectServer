<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>水族館．海生館</title>
    <link rel="stylesheet" href="./_css/bootstrap.css">
    <link rel="stylesheet" href="./_css/loading.css">
    <link rel="stylesheet" href="./_css/jquery.toast.css">
    <link rel="stylesheet" href="./_css/bus.css">
    <script src="./_js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./_jquery/jquery.js"></script>
    <script type="text/javascript" src="./_jquery/jquery.zoomooz.min.js"></script>
    <script src="./_jquery/Chart.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <!-- Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- SimpleBar-->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <!-- 背景影片css -->
    <link rel="stylesheet" href="./Tools/Bg_YTiframe.css">
    <!-- 背景影片js -->
    <script src="./Tools/Bg_YTiframe.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <!-- Gruop_City.css -->
    <link rel="stylesheet" href="./Tools/Gruop_City.css">
    <!-- Group_News.css -->
    <link rel="stylesheet" href="./Tools/Group_News.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            /* margin-left: 16.5%; */
        }

        div.homeRight {
            margin: 0px;
            padding: 0px;
            max-width: 400px;
        }

        div.wheatherDiv {
            width: 100%;
            height: 17vw;
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
            height: 7vw;
            margin: 0.45vw;
            border: solid 2px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            font-size: 1.4vw;
            text-align: center;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        /* #lyrics-container {
            height: 600px;
            width: 60%;
            overflow: hidden;
            position: relative;
            margin-left: 20%;
         }  */

        #lyrics-container_0 {
            height: 28vw;
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-left: 0%;
        }

        #lyrics {
            position: absolute;
            /* top: 10%; */
            transform: translateX(15%);
            transition: transform 0s ease-in-out;
        }

        #lyrics_0 {
            position: absolute;
            /* top: 10%; */
            transform: translateX(0%);
            transition: transform 0s ease-in-out;
        }

        .title {
            /* width: 50%; */
            width: 1000px;
            font-size: 2.6vw;
            color: white;
            font-family: 微軟正黑體;
            font-style: italic;
            margin-top: 8vw;
        }

        .title_2 {
            width: 1000px;
            font-size: 2.5vw;
            color: white;
            font-family: 微軟正黑體;
            font-style: italic;
            margin-top: 7vw;
        }

        .title_3 {
            width: 1000px;
            font-size: 1.6vw;
            color: white;
            font-family: 微軟正黑體;
            font-style: italic;
            margin-top: 4vw;
        }

        .contant {
            width: 1000px;
            font-size: 1.5vw;
            color: white;
            font-family: Times New Roman;
            font-style: italic;
            margin-top: 0.2vw;
        }

        .contant_2 {
            width: 1000px;
            font-size: 1.5vw;
            color: white;
            font-family: Times New Roman;
            font-style: italic;
            margin-top: 0.2vw;
        }

        .contant_3 {
            width: 1000px;
            font-size: 1.3vw;
            color: white;
            font-family: Times New Roman;
            font-style: italic;
            margin-top: 0.2vw;
        }

        .img {
            width: 1000px;
            height: 100px;
            margin-top: 6vw;
            /* margin-left: 43.5%; */
            display: flex
        }

        .Myname {
            width: 1000px;
            font-size: 2vw;
            margin-top: 3vw;
            font-style: italic;
        }

        .menu_left {
            background-color: rgba(20, 112, 165, 0.85);
            /* color: rgb(241, 245, 145); */
            color: white;
            z-index: 100;
            width: 8vw;
            height: 4vw;
            margin-top: 3vw;
            font-size: 1.2vw;
            padding-top: 1.2vw;
            border-radius: 0vw 0vw 0vw 0.6vw;
        }

        .menu {
            background-color: rgba(20, 112, 165, 0.85);
            /* color: rgb(241, 245, 145); */
            color: white;
            z-index: 100;
            width: 8vw;
            height: 4vw;
            margin-top: 3vw;
            font-size: 1.2vw;
            padding-top: 1.2vw;
        }

        .menu_right {
            background-color: rgba(20, 112, 165, 0.85);
            /* color: rgb(241, 245, 145); */
            color: white;
            z-index: 100;
            width: 8vw;
            height: 4vw;
            margin-top: 3vw;
            font-size: 1.2vw;
            padding-top: 1.2vw;
            border-radius: 0vw 0vw 0.6vw 0vw;
        }

        .menu:hover,
        .menu_left:hover,
        .menu_right:hover {
            background-color: rgba(60, 162, 221, 0.85);
            color: rgb(235, 236, 182);
        }

        .drop-shadow {
            -webkit-filter: drop-shadow(12px 12px 7px rgba(0, 0, 0, 0.7));
            filter: drop-shadow(12px 12px 7px rgba(0, 0, 0, 0.7))
        }

        .disnone {
            display: none;
        }
    </style>
</head>

<body onload="abc()"
    style="background-image: url(./img/background.png); background-size: 100%; background-attachment: fixed;">
    <div style="width: 100%; height: 0vw; z-index: 500;" class="row">
        <div class="col-lg-2 col-md-0 align-self-start"></div>
        <div class="col-lg-8 col-md-12">
            <div
                style=" background-color: rgb(35, 18, 131); width: 60%; height: 3vw; margin-top: 1.5vw; display: inline-block; float: left;">
            </div>
            <div class="align-self-end"
                style="width: 6vw; height: 2vw; font-size: 1vw; margin-top: 0.5vw; float: right; color: white; display: inline-block;">
                <button onclick=""
                    style="width: 5vw; background-color: rgba(75, 174, 240, 0.85); color: white; font-size: 0.8vw; margin-top: 0.2vw; border-radius: 0.5vw; display: inline-block;">登出</button>
                <!-- <button onclick="" class="drop-shadow" style="background-color: white; font-size: 0.8vw; margin-top: 0.2vw; border-radius: 0.5vw;">登出</button> -->
            </div>
            <div class="align-self-end"
                style="width: 6vw; height: 2vw; font-size: 1.2vw; margin-top: 0.7vw; float: right; color: white;">
                您好, Ian
            </div>
        </div>
    </div>
    </div>
    <div class="row" style="background-color: rgb(14, 11, 51); height: 6vw;">
        <div class="col-lg-2 col-md-0 align-self-start">
        </div>
        <div class="col-lg-8 col-md-12 align-self-center row" style="height: 5vw;">
            <div rowspan="2" class="col-4 align-self-start"
                style="font-size: 1.8vw; margin-left: 0vw; margin-top: 1.2vw; color: white;">
                水族館．海生館
            </div>
            <div class="menu_left drop-shadow" style="flex:3;">
                <a onclick="TNPM()">
                    屏東海生館
                </a>
            </div>
            <div class="menu drop-shadow" style="flex:3;">
                <a onclick="SNPM()">
                    基隆海科館
                </a>
            </div>
            <div class="menu drop-shadow" style="flex:3;">
                <a onclick="TFAM()">
                    花蓮海生館
                </a>
            </div>
            <div class="menu_right drop-shadow align-self-end" style="flex:3;">
                <a onclick="TAM()">
                    桃園Xpark
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-md-0 align-self-end">
        </div>
    </div>
    <div style="width: 100%; height: 0vw;">
        <div style="width: 100%; height: 26vw;"></div>
    </div>
    <div id="lyrics-container_0" class="row">
        <div style="width: 100%; height: 0.4vw; background-color: rgb(11, 81, 138);"></div>
        <div id="iframeContainer">
            <iframe id="youtubeIframe" style="z-index: -1; background-position-y: 25vw;"
                src="https://www.youtube.com/embed/AX3VMB2zw38?autoplay=1&controls=0&showinfo=0&rel=0&modestbranding=1&mute=1&loop=1&disablekb=1&enablejsapi=1"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    </div>
    <div id="TNPM">
        <div style="width: 100%; height: 0.4vw; background-color: rgb(11, 81, 138);"></div>
        <div class="row" style="background-color: rgb(14, 11, 51); height: 4.5vw; color: white; font-size: 1.5vw;">
            <div class="align-self-center" style="font-size: 2vw;">
                屏東海生館
            </div>
        </div>
        <div class="row" style="margin-top: 3vw;">
            <div class="col-4">
                <!-- <div class="col-12" style="width: 50vw; float: left; font-size: 1.8vw;"> -->
                <div>
                </div>
            </div>
            <div id="TNAR" class="col-5">
            </div>
            <div class="homeRight col-3" style="height: 22vw;">
                <div class="wheatherDiv">
                    <div class="row p-0 m-0">
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">屏東縣</div>
                        </div>
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">21C</div>
                        </div>
                        <div class="wheatherCol col ">
                            <div class="wheatherBlock">
                                <div class="row">
                                    <div class="col-12">降雨機率:</div>
                                    <div class="col">0%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="newBG" class="row justify-content-center">
            <div class="homeCenter col-12 col-md-9 order-2 order-md-1">
                <!-- ---------- -->
                <div id="groupNews_1" class="">
                    <div class="groupTitle">
                        <h3 style="color: white;">最新消息</h3>
                    </div>

                    <div class="newsCon">
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/最新活動-屏東海生館-1.jpg" alt="">
                        </div>
                        <div class="newsTextCon">
                            <div class="newsTextBgR">
                                <div class="newsText">
                                    萬眾期待的藍鯨骨骼標本展覽『巨鯨之路』在12月15日於教育部所屬社教機構國立海洋生物博物館（以下簡稱海生館）世界水域館大廳公開展出。
                                    藍鯨是世界上最大的動物，全球公開展示之完整藍鯨標本僅約25件，顯見藍鯨稀少而珍貴。『巨鯨之路』所展示的藍鯨骨骼標本為臺灣有紀錄以來首次發現的擱淺藍鯨，這頭藍鯨被發現時身形消瘦且頭部被繩索緊緊纏繞讓人觸目驚心，海生館在教育部支持下與海洋委員會海洋保育署及國立成功大學簽署藍鯨骨骼標本合作備忘錄（MOU），期能將藍鯨骨骼標本作為研究典藏並公開展出，共同推廣海洋環境教育及生態保育觀念，讓我們更加認識這美麗而神祕的生物。
                                    這頭沉默巨鯨在2020年的農曆大年初一悄悄地來到臺灣，經過研究發現這頭藍鯨為未成年個體，尚未完全硬骨化的骨骼使得修復作業極具挑戰。海生館採用全臺首見三軸式龍骨裝架法進行裝架，以最不傷害骨骼的方式進行修復及裝架，同時考量展示安全性，海生館將藍鯨頭部進行翻模複製，原件落地分開裝架以爆炸式展示方式，讓民眾可以近距離觀察內部的結構，也讓研究學者可以進行科學測量、採樣等研究作業，共同為藍鯨研究貢獻心力。
                                    這頭藍鯨在海上漂流數月，最後擱淺在臺東，海生館匯集國內、外專家學者意見，力求骨骼組裝及展示姿態之科學正確性，經不斷討論、求證、比對、試組裝等過程，終於完成藍鯨骨骼標本的製作，並模擬捕捉藍鯨下潛剎那的優雅動作，仿佛描繪著一場重返海洋的儀式，展現出藍鯨動態美感與生命力。
                                    開幕活動當天海生館特別感謝教育部顏副司長寶月、海洋委員會管主委碧玲、海洋保育署黃署長向文及國立成功大學鯨豚中心王主任浩文等多位貴賓共襄盛舉，並向臺東縣政府及海巡署等眾多單位致贈感謝狀感謝當時救援的辛勞。本次開展活動以開啟藍鯨標本展示燈光作為開展之啟動儀式，海生館透過重建骨骼與科普化的展覽，以「重生」許一個美麗新世界，讓這頭藍鯨脫離禁錮的繩索，蛻變為博物館永久典藏的標本，延伸其生命價值與意義，同時讓我們思考如何維護海洋的永續發展，共同邁向永續海洋的美麗願景。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsCon">
                        <div class="newsTextCon">
                            <div class="newsTextBgL">
                                <div class="newsText">
                                    「南藍繫語-潛進珊瑚海」海底實境特展
                                    將智慧博物館計畫之成果包含：智慧化海洋生物知識學習網站、臺灣海域各生態水域之影音資料收集、水下遙控無人載具在中光層的研究、水下探勘拍攝等，轉譯為科普資訊，讓民眾瞭解水下研究成果及臺灣周遭的水下環境。
                                </div>
                            </div>
                        </div>
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/最新活動-屏東海生館-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div id="SNPM" class="disnone">
        <div style="width: 100%; height: 0.4vw; background-color: rgb(11, 81, 138);"></div>
        <div class="row" style="background-color: rgb(14, 11, 51); height: 4.5vw; color: white; font-size: 1.5vw;">
            <div class="align-self-center" style="font-size: 2vw;">
                基隆海科館
            </div>
        </div>
        <div class="row" style="margin-top: 3vw;">
            <div class="col-9"></div>
            <div class="homeRight col-3" style="height: 22vw;">
                <div class="wheatherDiv">
                    <div class="row p-0 m-0">
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">基隆市</div>
                        </div>
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">14C</div>
                        </div>
                        <div class="wheatherCol col ">
                            <div class="wheatherBlock">
                                <div class="row">
                                    <div class="col-12">降雨機率:</div>
                                    <div class="col">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="newBG" class="row justify-content-center">
            <div class="homeCenter col-12 col-md-9 order-2 order-md-1">
                <!-- ---------- -->
                <div id="groupNews_1" class="">
                    <div class="groupTitle">
                        <h3>最新消息</h3>
                    </div>

                    <div class="newsCon">
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/最新活動-故宮南院-1.jpg" alt="">
                        </div>
                        <div class="newsTextCon">
                            <div class="newsTextBgR">
                                <div class="newsText">
                                    古人認為萬物皆有靈性，因此在創作過程中，總是不斷地再現自然的事物，或利用自然的事物作為材料，無論是畫樹、刻石、雕玉或製作陶瓷器，無一不是向自然師法或取材自然。而在自然界中，活靈活現的動物更是藝術家們創作的靈感泉源，在故宮眾多的文物主題中，動物主題更是受到觀眾青睞和歡迎。動物主題的文物，有的外型可愛討喜，有的更被古代人們或是藝術家賦予特殊的意義，例如駿馬象徵人才，公雞則帶有昂揚甚或太陽神使者的的意義，鴨子則有柔和的女性意涵，兔子更和屬兔的乾隆皇帝有所連結。
                                    本次特別精選繪畫工細膩寫實，製作精緻栩栩如生的院藏動物作品，除了欣賞古代藝術家對於動物姿態神情精準的掌握外，更進一步了解其背後意涵，進而對古典文化有更多更深的認識。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsCon">
                        <div class="newsTextCon">
                            <div class="newsTextBgL">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/故宮南院-1-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div id="TFAM" class="disnone">
        <div style="width: 100%; height: 0.4vw; background-color: rgb(11, 81, 138);"></div>
        <div class="row" style="background-color: rgb(14, 11, 51); height: 4.5vw; color: white; font-size: 1.5vw;">
            <div class="align-self-center" style="font-size: 2vw;">
                花蓮海生館
            </div>
        </div>
        <div class="row" style="margin-top: 3vw;">
            <div class="col-9"></div>
            <div class="homeRight col-3" style="height: 22vw;">
                <div class="wheatherDiv">
                    <div class="row p-0 m-0">
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">花蓮縣</div>
                        </div>
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">19C</div>
                        </div>
                        <div class="wheatherCol col ">
                            <div class="wheatherBlock">
                                <div class="row">
                                    <div class="col-12">降雨機率:</div>
                                    <div class="col">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="newBG" class="row justify-content-center">
            <div class="homeCenter col-12 col-md-9 order-2 order-md-1">
                <!-- ---------- -->
                <div id="groupNews_1" class="">
                    <div class="groupTitle">
                        <h3>最新消息</h3>
                    </div>

                    <div class="newsCon">
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/最新活動-台北美術館-1.jpg" alt="">
                        </div>
                        <div class="newsTextCon">
                            <div class="newsTextBgR">
                                <div class="newsText">
                                    本屆雙年展主題「小世界」（Small
                                    World）代表著希望，也同時透露著不安；全球疫情撞擊出個人對自我生活更大的掌控權，卻也同時挑動了被孤立於廣大群體之外的隱憂。我們發現當世界縮小時，它可以拉近彼此的距離，卻也可能使人心更為疏遠：這個「小世界」，懸浮在相聚與分離兩端之間的游移狀態中。本屆雙年展指向我們所共同面臨的處境，邀請觀眾一同探索如何運用疫情經驗來提出新的生活想像，反思當日常愈趨緊繃及複雜時，人們對簡單與感性的渴望是否也變得遙不可及。
                                    本屆展覽由策展人周安曼、作家兼編輯穆柏安（Brian Kuan Wood）和策展人莉姆．夏迪德（Reem
                                    Shadid）共同策劃，將匯聚50多位臺灣及國際的藝術家和音樂人，展出包括19件全新創作和委託製作，以及一系列的聲響、音樂表演、動態影像、攝影、錄像、繪畫、雕塑和裝置作品，使北美館成為一個聆聽、聚集與即興創作的空間。三位策展人表示：「在『小世界』裡我們雖然可能因為被孤立，而失去部分自我與介入社會的能動力；但在這裡我們有不需懼怕被同化的自由，譬如我們可以拒絕被量化，可以大聲疾呼、不斷移動，但也能靜觀其變，享受片刻的寧靜。我們也許都曾醉心對簡單生活的奢侈嚮往，但『小世界』激勵了我們堅定立場，拋開渴求被認同的慾望，拒絕為了一些永遠無法獲取的最終利益而去取悅他人。」
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsCon">
                        <div class="newsTextCon">
                            <div class="newsTextBgL">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/故宮南院-1-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="TAM" class="disnone">
        <div style="width: 100%; height: 0.4vw; background-color: rgb(11, 81, 138);"></div>
        <div class="row" style="background-color: rgb(14, 11, 51); height: 4.5vw; color: white; font-size: 1.5vw;">
            <div class="align-self-center" style="font-size: 2vw;">
                桃園Xpark
            </div>
        </div>
        <div class="row" style="margin-top: 3vw;">
            <div class="col-9"></div>
            <div class="homeRight col-3" style="height: 22vw;">
                <div class="wheatherDiv">
                    <div class="row p-0 m-0">
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">桃園市</div>
                        </div>
                        <div class="wheatherCol col-6 ">
                            <div class="wheatherBlock">19C</div>
                        </div>
                        <div class="wheatherCol col ">
                            <div class="wheatherBlock">
                                <div class="row">
                                    <div class="col-12">降雨機率:</div>
                                    <div class="col">0%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="newBG" class="row justify-content-center">
            <div class="homeCenter col-12 col-md-9 order-2 order-md-1">
                <!-- ---------- -->
                <div id="groupNews_1" class="">
                    <div class="groupTitle">
                        <h3>最新消息</h3>
                    </div>

                    <div class="newsCon">
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/台北故宮.jpg" alt="">
                        </div>
                        <div class="newsTextCon">
                            <div class="newsTextBgR">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="newsCon">
                        <div class="newsTextCon">
                            <div class="newsTextBgL">
                                <div class="newsText">
                                    台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。台灣，坐落於亞洲東部，擁有多樣風景與豐富文化。山川起伏，美不勝收，從高山峻嶺到沙灘海岸，景觀多元。台灣以多元的美食聞名，夜市繁華熱鬧，成為品嚐各地風味的絕佳場所。在這片寶島上，傳統文化與現代生活共存，廟宇、古蹟與現代建築共構城市風貌。友善的台灣人民熱情好客，讓遊客感受到溫暖的人情味。台灣，一個充滿活力、兼具傳統和現代風情的迷人地方。
                                </div>
                            </div>
                        </div>
                        <div class="newsImgCon">
                            <img class="newsImg" src="./img/故宮南院-1-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: rgb(14, 11, 51); height: 25vw;">
        <div class="col-3" style="margin-top: 6vw;">
            <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(166, 228, 236);"
                href="https://www.npm.gov.tw/">
                屏東海生館
            </a>
        </div>
        <div class="col-3" style="margin-top: 6vw;">
            <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(166, 228, 236);"
                href="https://www.tfam.museum/index.aspx?ddlLang=zh-tw">
                基隆海科館
            </a>
        </div>
        <div class="col-3" style="margin-top: 6vw;">
            <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(166, 228, 236);"
                href="https://www.ntmofa.gov.tw/">
                花蓮海生館
            </a>
        </div>
        <div class="col-3" style="margin-top: 6vw;">
            <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(166, 228, 236);"
                href="https://www.tnam.museum/">
                桃園Xpark
            </a>
        </div>
    </div>
    <script>
        const lyricsContainer = document.getElementById('lyrics');
        let currentPosition = 0;

        function abc() {
            scrollLyrics();
            const time = new Date();
            if (time.getHours() >= 6 && time.getHours() <= 17) {
                html = `<img src="./img/白天-1.gif" alt="" style="width: 100%;">`;
            }
            else {
                html = `<img src="./img/夜晚-2.gif" alt="" style="width: 100%;">`;
            }
            $("#TNAR").append(html);
            $("#SNAR").append(html);
            console.log(time);
        }


        function scrollLyrics() {
            if (currentPosition <= -362) {
                scrollLyrics_1(currentPosition);
            }
            else {
                currentPosition -= 0.05;
                lyricsContainer.style.transform = `translateX(${currentPosition}vw)`;
                requestAnimationFrame(scrollLyrics);
            }
        }

        function scrollLyrics_1() {
            if (currentPosition >= 0) {
                scrollLyrics(currentPosition);
            }
            else {
                currentPosition += 0.05;
                lyricsContainer.style.transform = `translateX(${currentPosition}vw)`;
                requestAnimationFrame(scrollLyrics_1);
            }
        }


        var flip = document.getElementById('flip')
        var flip_1 = document.getElementById('flip_1')
        var flip_2 = document.getElementById('flip_2')
        var flip_3 = document.getElementById('flip_3')
        var flip_4 = document.getElementById('flip_4')
        var flip_5 = document.getElementById('flip_5')
        var flip_6 = document.getElementById('flip_6')
        var flip_7 = document.getElementById('flip_7')
        var flip_8 = document.getElementById('flip_8')
        var backNode = document.querySelector('.back')
        var backNode_1 = document.querySelector('.back_1')
        var backNode_2 = document.querySelector('.back_2')
        var backNode_3 = document.querySelector('.back_3')
        var backNode_4 = document.querySelector('.back_4')
        var backNode_5 = document.querySelector('.back_5')
        var backNode_6 = document.querySelector('.back_6')
        var backNode_7 = document.querySelector('.back_7')
        var backNode_8 = document.querySelector('.back_8')
        var frontNode = document.querySelector('.front')
        var frontNode_1 = document.querySelector('.front_1')
        var frontNode_2 = document.querySelector('.front_2')
        var frontNode_3 = document.querySelector('.front_3')
        var frontNode_4 = document.querySelector('.front_4')
        var frontNode_5 = document.querySelector('.front_5')
        var frontNode_6 = document.querySelector('.front_6')
        var frontNode_7 = document.querySelector('.front_7')
        var frontNode_8 = document.querySelector('.front_8')
        var btn0 = document.getElementById('btn0')
        var btn1 = document.getElementById('btn1')
        btn0.addEventListener('click', function () {
            flipDown();
            flipDown_1();
            flipDown_2();
            flipDown_3();
            flipDown_4();
            flipDown_5();
            flipDown_6();
            flipDown_7();
            flipDown_8();
        })

        btn1.addEventListener('click', function () {
            setTimeout("BusState()", 590);
            setTimeout("BusState_1()", 1020);
            setTimeout("BusState_2()", 630);
            setTimeout("BusState_3()", 715);
            setTimeout("BusState_4()", 890);
            setTimeout("BusState_5()", 1055);
            setTimeout("BusState_6()", 1180);
            setTimeout("BusState_7()", 760);
            setTimeout("BusState_8()", 470);
        })


        var count = 0
        var count_1 = 0
        var count_2 = 0
        var count_3 = 2
        var count_4 = 2
        var count_5 = 2
        var count_6 = 4
        var count_7 = 4
        var count_8 = 4
        // var isFlipping = false
        function flipDown() {
            // if (isFlipping) {
            //     return false
            // }
            frontNode.setAttribute('class', 'digital front number' + count)
            var nextCount = count >= 10 ? 0 : (count + 1)
            backNode.setAttribute('class', 'digital back number' + nextCount)
            flip.setAttribute('class', 'flip down go')
            // isFlipping = true
            setTimeout(function () {
                flip.setAttribute('class', 'flip down')
                isFlipping = false
                frontNode.setAttribute('class', 'digital front number' + nextCount)
                count = nextCount
            }, 400)
        }

        function flipDown_1() {
            frontNode_1.setAttribute('class', 'digital_1 front_1 number_1_' + count_1)
            var nextCount_1 = count_1 >= 6 ? 0 : (count_1 + 1)
            backNode_1.setAttribute('class', 'digital_1 back_1 number_1_' + nextCount_1)
            flip_1.setAttribute('class', 'flip_1 down_1 go_1')
            // isFlipping = true
            setTimeout(function () {
                flip_1.setAttribute('class', 'flip_1 down_1')
                frontNode_1.setAttribute('class', 'digital_1 front_1 number_1_' + nextCount_1)
                count_1 = nextCount_1
            }, 400)
        }

        function flipDown_2() {
            frontNode_2.setAttribute('class', 'digital_2 front_2 number_2_' + count_2)
            var nextCount_2 = count_2 >= 9 ? 0 : (count_2 + 1)
            backNode_2.setAttribute('class', 'digital_2 back_2 number_2_' + nextCount_2)
            flip_2.setAttribute('class', 'flip_2 down_2 go_2')
            // isFlipping = true
            setTimeout(function () {
                flip_2.setAttribute('class', 'flip_2 down_2')
                frontNode_2.setAttribute('class', 'digital_2 front_2 number_2_' + nextCount_2)
                count_2 = nextCount_2
            }, 400)
        }

        function flipDown_3() {
            frontNode_3.setAttribute('class', 'digital_3 front_3 number_3_' + count_3)
            var nextCount_3 = count_3 >= 10 ? 0 : (count_3 + 1)
            backNode_3.setAttribute('class', 'digital_3 back_3 number_3_' + nextCount_3)
            flip_3.setAttribute('class', 'flip_3 down_3 go_3')
            // isFlipping = true
            setTimeout(function () {
                flip_3.setAttribute('class', 'flip_3 down_3')
                frontNode_3.setAttribute('class', 'digital_3 front_3 number_3_' + nextCount_3)
                count_3 = nextCount_3
            }, 400)
        }

        function flipDown_4() {
            frontNode_4.setAttribute('class', 'digital_4 front_4 number_4_' + count_4)
            var nextCount_4 = count_4 >= 6 ? 0 : (count_4 + 1)
            backNode_4.setAttribute('class', 'digital_4 back_4 number_4_' + nextCount_4)
            flip_4.setAttribute('class', 'flip_4 down_4 go_4')
            // isFlipping = true
            setTimeout(function () {
                flip_4.setAttribute('class', 'flip_4 down_4')
                frontNode_4.setAttribute('class', 'digital_4 front_4 number_4_' + nextCount_4)
                count_4 = nextCount_4
            }, 400)
        }

        function flipDown_5() {
            frontNode_5.setAttribute('class', 'digital_5 front_5 number_5_' + count_5)
            var nextCount_5 = count_5 >= 9 ? 0 : (count_5 + 1)
            backNode_5.setAttribute('class', 'digital_5 back_5 number_5_' + nextCount_5)
            flip_5.setAttribute('class', 'flip_5 down_5 go_5')
            // isFlipping = true
            setTimeout(function () {
                flip_5.setAttribute('class', 'flip_5 down_5')
                frontNode_5.setAttribute('class', 'digital_5 front_5 number_5_' + nextCount_5)
                count_5 = nextCount_5
            }, 400)
        }

        function flipDown_6() {
            frontNode_6.setAttribute('class', 'digital_6 front_6 number_6_' + count_6)
            var nextCount_6 = count_6 >= 10 ? 0 : (count_6 + 1)
            backNode_6.setAttribute('class', 'digital_6 back_6 number_6_' + nextCount_6)
            flip_6.setAttribute('class', 'flip_6 down_6 go_6')
            // isFlipping = true
            setTimeout(function () {
                flip_6.setAttribute('class', 'flip_6 down_6')
                frontNode_6.setAttribute('class', 'digital_6 front_6 number_6_' + nextCount_6)
                count_6 = nextCount_6
            }, 400)
        }

        function flipDown_7() {
            frontNode_7.setAttribute('class', 'digital_7 front_7 number_7_' + count_7)
            var nextCount_7 = count_7 >= 6 ? 0 : (count_7 + 1)
            backNode_7.setAttribute('class', 'digital_7 back_7 number_7_' + nextCount_7)
            flip_7.setAttribute('class', 'flip_7 down_7 go_7')
            // isFlipping = true
            setTimeout(function () {
                flip_7.setAttribute('class', 'flip_7 down_7')
                frontNode_7.setAttribute('class', 'digital_7 front_7 number_7_' + nextCount_7)
                count_7 = nextCount_7
            }, 400)
        }

        function flipDown_8() {
            frontNode_8.setAttribute('class', 'digital_8 front_8 number_8_' + count_8)
            var nextCount_8 = count_8 >= 9 ? 0 : (count_8 + 1)
            backNode_8.setAttribute('class', 'digital_8 back_8 number_8_' + nextCount_8)
            flip_8.setAttribute('class', 'flip_8 down_8 go_8')
            // isFlipping = true
            setTimeout(function () {
                flip_8.setAttribute('class', 'flip_8 down_8')
                frontNode_8.setAttribute('class', 'digital_8 front_8 number_8_' + nextCount_8)
                count_8 = nextCount_8
            }, 400)
        }

        function BusState() {
            if (count != 9) {
                flipDown();
                setTimeout("BusState()", 450);
            }
        }
        function BusState_1() {
            if (count_1 != 6) {
                flipDown_1();
                setTimeout("BusState_1()", 520);
            }
        }
        function BusState_2() {
            if (count_2 != 1) {
                flipDown_2();
                setTimeout("BusState_2()", 630);
            }
        }
        function BusState_3() {
            if (count_3 != 1) {
                flipDown_3();
                setTimeout("BusState_3()", 740);
            }
        }

        function BusState_4() {
            if (count_4 != 1) {
                flipDown_4();
                setTimeout("BusState_4()", 670);
            }
        }

        function BusState_5() {
            if (count_5 != 3) {
                flipDown_5();
                setTimeout("BusState_5()", 420);
            }
        }

        function BusState_6() {
            if (count_6 != 3) {
                flipDown_6();
                setTimeout("BusState_6()", 530);
            }
        }

        function BusState_7() {
            if (count_7 != 3) {
                flipDown_7();
                setTimeout("BusState_7()", 640);
            }
        }

        function BusState_8() {
            if (count_8 != 9) {
                flipDown_8();
                setTimeout("BusState_8()", 590);
            }
        }

        function TNPM() {
            $("#TNPM").removeClass("disnone");
            $("#SNPM").addClass("disnone");
            $("#TFAM").addClass("disnone");
            $("#TMFA").addClass("disnone");
            $("#TAM").addClass("disnone");
        }

        function SNPM() {
            $("#TNPM").addClass("disnone");
            $("#SNPM").removeClass("disnone");
            $("#TFAM").addClass("disnone");
            $("#TMFA").addClass("disnone");
            $("#TAM").addClass("disnone");
        }

        function TFAM() {
            $("#TNPM").addClass("disnone");
            $("#SNPM").addClass("disnone");
            $("#TFAM").removeClass("disnone");
            $("#TMFA").addClass("disnone");
            $("#TAM").addClass("disnone");
        }

        function TMFA() {
            $("#TNPM").addClass("disnone");
            $("#SNPM").addClass("disnone");
            $("#TFAM").addClass("disnone");
            $("#TMFA").removeClass("disnone");
            $("#TAM").addClass("disnone");
        }

        function TAM() {
            $("#TNPM").addClass("disnone");
            $("#SNPM").addClass("disnone");
            $("#TFAM").addClass("disnone");
            $("#TMFA").addClass("disnone");
            $("#TAM").removeClass("disnone");
        }

    </script>
</body>

</html>