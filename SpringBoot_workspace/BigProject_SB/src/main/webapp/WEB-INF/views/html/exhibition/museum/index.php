<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>博物館．美術館</title>
    <link rel="stylesheet" href="../../Tools/bootstrap.css">
    <script type="text/javascript" src="../../Tools/jquery.js"></script>
    <link rel="stylesheet" href="../../Tools/Group_News.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
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
        #lyrics-container_0 {
            height: 23vw;
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-left: 0%;
        }
        #lyrics {
            position: absolute;
            transform: translateX(15%);
            transition: transform 0s ease-in-out;
        }
        #lyrics_0 {
            position: absolute;
            transform: translateX(0%);
            transition: transform 0s ease-in-out;
        }
        .menu_left {
            background-color: rgba(165, 98, 20, 0.85);
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
            background-color: rgba(165, 98, 20, 0.85);
            color: white;
            z-index: 100;
            width: 8vw;
            height: 4vw;
            margin-top: 3vw;
            font-size: 1.2vw;
            padding-top: 1.2vw;
        }
        .menu_right {
            background-color: rgba(165, 98, 20, 0.85);
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
            background-color: rgb(208, 138, 59);
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
    style="background-image: url(../../image/background.png); background-size: 100%; background-attachment: fixed;">
        <div style="width: 100%; height: 0vw; z-index: 500;" class="row">
            <div class="col-lg-2 col-md-0 align-self-start"></div>
            <div class="col-lg-8 col-md-12">
                <div style=" background-color: rgb(88, 35, 8); width: 60%; height: 3vw; margin-top: 1vw; display: inline-block; float: left;">
                </div>
                <div class="align-self-end"
                    style="width: 6vw; height: 2vw; font-size: 1vw; margin-top: 0.5vw; float: right; color: white; display: inline-block;">
                    <button onclick=""
                        style="width: 5vw; background-color: rgba(240, 163, 75, 0.85); color: white; font-size: 0.8vw; margin-top: 0.2vw; border-radius: 0.5vw; display: inline-block;">登出</button>
                </div>
                <div class="align-self-end"
                    style="width: 6vw; height: 2vw; font-size: 1.2vw; margin-top: 0.7vw; float: right; color: white;">
                    您好, Ian
                </div>
            </div>
        </div>
        </div>
        <div class="row" style="background-color: rgb(51, 11, 11);">
            <div class="col-lg-2 col-md-0 align-self-start">
            </div>
            <div class="col-lg-8 col-md-12 align-self-center row" style="height: 5vw;">
                <div rowspan="2" class="col-4 align-self-start"
                    style="font-size: 1.8vw; margin-left: 0vw; margin-top: 1.2vw; color: white;">
                    博物館．美術館
                </div>
                <div class="menu_left drop-shadow" style="flex:3;">
                    <a onclick="TNPM()">
                        台北故宮
                    </a>
                </div>
                <div class="menu drop-shadow" style="flex:3;">
                    <a onclick="SNPM()">
                        故宮南院
                    </a>
                </div>
                <div class="menu drop-shadow" style="flex:3;">
                    <a onclick="TFAM()">
                        台北美術館
                    </a>
                </div>
                <div class="menu drop-shadow" style="flex:3;">
                    <a onclick="TMFA()">
                        台中美術館
                    </a>
                </div>
                <div class="menu_right drop-shadow align-self-end" style="flex:3;">
                    <a onclick="TAM()">
                        台南美術館
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-0 align-self-end">
            </div>
        </div>
        <div id="lyrics-container_0" class="row">
            <div id="lyrics" class="col-8" style="color: white;">
                <div>
                    <img src="../../image/AlongtheRiverDuringQingmingFestival.jpg" style="height: 23vw;">
                </div>
            </div>
        </div>
        <div id="TNPM">
            <div class="row" style="background-color: rgb(51, 11, 11); height: 3.5vw; color: white; font-size: 1.5vw;">
                <div class="align-self-center" style="font-size: 2vw;">
                    台北故宮博物院
                </div>
            </div>
            <div class="row" style="width: 90%; margin-top: 3vw; margin-left: 5%;">
                <div class="col-3">
                    <div>
                        <div style="font-size: 1.8vw; font-weight: bolder; text-align: center">
                            <a style="text-decoration:none; color: black;" href="./tnarshop">
                                <div>
                                    <img src="../../image/shop.jpg" style="width:80%;">
                                </div>
                                <div style="margin-top:1vw">
                                    精品典藏
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="TNAR" class="col-6">
                </div>
                <div class="homeRight col-3" style="height: 22vw;">
                    <div class="wheatherDiv">
                        <div class="row p-0 m-0">
                            <div class="wheatherCol col-6 ">
                                <div class="wheatherBlock">台北市</div>
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
                    <div id="groupNews_1" class="">
                        <div class="groupTitle">
                            <h3>最新消息</h3>
                        </div>
                        <div class="newsCon">
                            <div class="newsImgCon">
                                <img class="newsImg" src="../../image/最新活動-台北故宮-1.jpg" alt="">
                            </div>
                            <div class="newsTextCon">
                                <div class="newsTextBgR">
                                    <div class="newsText">
                                        「工欲善其事，必先利其器。」從生產與狩獵的工具到殺伐兵器，從滿足溫飽到決定戰爭勝負，刃的鋒利與否是關鍵所在，也是人類製器的亙古追求。最初人類利用石材製刃，自快速砸擊到精細拋磨，漸次精進製刃技術。隨後人類掌握飛躍性的合金技術，冶煉出青銅，由此重新定義了鋒刃，也因青銅優於石材的延展性及在短時間大量鑄造的特性，深層改變了兵器型態。緊接著，在一次次鑄銅的烈焰中，鐵刃淬鍊而生，影響至今未曾稍息。
                                        青銅兵器的誕生是上述歷程的轉折點，因為自此戰爭規模與勝負影響全面升級，體現「國之大事，在祀與戎。」在古代中國，青銅兵器約出現於公元前1800年，也就是新石器時期最末期到早期國家形成的節點之上，並於商周時期發展至興盛，共延續一千六百年左右。兵器不只在戰場上大展身手，也融入貴族禮制，成為象徵身份地位的禮器。雖然青銅兵器後來被鐵兵器取代，但兵器具有實戰、權力象徵或祭祀用器之多重功能仍傳承至今。
                                        本展以青銅兵器為核心，將展覽分四個單元。第一單元「開刃─有刃器的發展」將青銅兵器的源頭追溯至新石器時期磨製的玉石有刃器。第二單元「展現鋒芒」和第三單元「淬鍊純青」將青銅兵器區分「商至西周」（約公元前1600-
                                        前771 ）、「春秋戰國」（公元前770-前221）兩個時期。第四單元「歷久彌堅」呈現秦漢時期（公元前221-公元220）鐵兵器逐步興起之時，對青銅兵器的繼承與發展。
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
                                <img class="newsImg" src="../../image/故宮南院-1-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="SNPM" class="disnone">
            <div class="row" style="background-color: rgb(51, 11, 11); height: 3.5vw; color: white; font-size: 1.5vw;">
                <div class="align-self-center" style="font-size: 2vw;">
                    故宮南院
                </div>
            </div>
            <div class="row" style="width: 90%; margin-top: 3vw; margin-left: 5%;">
                <div class="col-3">
                    <div>
                        <div style="font-size: 1.8vw; font-weight: bolder; text-align: center">
                            <div>
                                <a href="./tnarshop">
                                    <img src="../../image/shop.jpg" style="width:80%;">
                                </a>
                            </div>
                            <div style="margin-top:1vw">
                                精品典藏
                            </div>
                        </div>
                    </div>
                </div>
                <div id="SNAR" class="col-6">
                </div>
                <div class="homeRight col-3" style="height: 22vw;">
                    <div class="wheatherDiv">
                        <div class="row p-0 m-0">
                            <div class="wheatherCol col-6 ">
                                <div class="wheatherBlock">嘉義縣<br>太保市</div>
                            </div>
                            <div class="wheatherCol col-6 ">
                                <div class="wheatherBlock">12C</div>
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
                    <div id="groupNews_1" class="">
                        <div class="groupTitle">
                            <h3>最新消息</h3>
                        </div>

                        <div class="newsCon">
                            <div class="newsImgCon">
                                <img class="newsImg" src="../../image/最新活動-故宮南院-1.jpg" alt="">
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
                                <img class="newsImg" src="../../image/故宮南院-1-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="TFAM" class="disnone">
            <div class="row" style="background-color: rgb(51, 11, 11); height: 3.5vw; color: white; font-size: 1.5vw;">
                <div class="align-self-center" style="font-size: 2vw;">
                    台北美術館
                </div>
            </div>
            <div class="row" style="width: 90%; margin-top: 3vw; margin-left: 5%;">
                <div class="col-9"></div>
                <div class="homeRight col-3" style="height: 22vw;">
                    <div class="wheatherDiv">
                        <div class="row p-0 m-0">
                            <div class="wheatherCol col-6 ">
                                <div class="wheatherBlock">台北市</div>
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
                    <div id="groupNews_1" class="">
                        <div class="groupTitle">
                            <h3>最新消息</h3>
                        </div>

                        <div class="newsCon">
                            <div class="newsImgCon">
                                <img class="newsImg" src="../../image/最新活動-台北美術館-1.jpg" alt="">
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
                                <img class="newsImg" src="../../image/故宮南院-1-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="TMFA" class="disnone">
            <div class="row" style="background-color: rgb(51, 11, 11); height: 3.5vw; color: white; font-size: 1.5vw;">
                <div class="align-self-center" style="font-size: 2vw;">
                    台中美術館
                </div>
            </div>
            <div class="row" style="width: 90%; margin-top: 3vw; margin-left: 5%;">
                <div class="col-9"></div>
                <div class="homeRight col-3" style="height: 22vw;">
                    <div class="wheatherDiv">
                        <div class="row p-0 m-0">
                            <div class="wheatherCol col-6 ">
                                <div class="wheatherBlock">台中市</div>
                            </div>
                            <div class="wheatherCol col-6 ">
                                <div class="wheatherBlock">18C</div>
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
                    <div id="groupNews_1" class="">
                        <div class="groupTitle">
                            <h3>最新消息</h3>
                        </div>

                        <div class="newsCon">
                            <div class="newsImgCon">
                                <img class="newsImg" src="../../image/台北故宮.jpg" alt="">
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
                                <img class="newsImg" src="../../image/故宮南院-1-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="TAM" class="disnone">
            <div class="row" style="background-color: rgb(51, 11, 11); height: 3.5vw; color: white; font-size: 1.5vw;">
                <div class="align-self-center" style="font-size: 2vw;">
                    台南美術館
                </div>
            </div>
            <div class="row" style="width: 90%; margin-top: 3vw; margin-left: 5%;">
                <div class="col-9"></div>
                <div class="homeRight col-3" style="height: 22vw;">
                    <div class="wheatherDiv">
                        <div class="row p-0 m-0">
                            <div class="wheatherCol col-6 ">
                                <div class="wheatherBlock">台南市</div>
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
                    <div id="groupNews_1" class="">
                        <div class="groupTitle">
                            <h3>最新消息</h3>
                        </div>

                        <div class="newsCon">
                            <div class="newsImgCon">
                                <img class="newsImg" src="../../image/台北故宮.jpg" alt="">
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
                                <img class="newsImg" src="../../image/故宮南院-1-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: rgb(51, 11, 11); height: 25vw; color: white; font-size: 1.5vw;">
            <div class="col-3" style="margin-top: 6vw;">
                <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(236, 206, 166);"
                    href="https://www.npm.gov.tw/">
                    台北故宮
                </a>
            </div>
            <div class="col-3" style="margin-top: 6vw; font-size: 2vw; color: rgb(236, 206, 166);">
                <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(236, 206, 166);"
                    href="https://www.tfam.museum/index.aspx?ddlLang=zh-tw">
                    台北美術館
                </a>
            </div>
            <div class="col-3" style="margin-top: 6vw; font-size: 2vw; color: rgb(236, 206, 166);">
                <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(236, 206, 166);"
                    href="https://www.ntmofa.gov.tw/">
                    台中美術館
                </a>
            </div>
            <div class="col-3" style="margin-top: 6vw; font-size: 2vw; color: rgb(236, 206, 166);">
                <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(236, 206, 166);"
                    href="https://www.tnam.museum/">
                    台南美術館
                </a>
            </div>
            <div class="col-3" style="margin-top: 1vw; font-size: 2vw; color: rgb(236, 206, 166);">
                <a target="_blank" style="font-size: 2vw; text-decoration:none; color: rgb(236, 206, 166);"
                    href="https://south.npm.gov.tw/">
                    故宮南院
                </a>
            </div>
        </div>
    </div>
    <script>
        const lyricsContainer = document.getElementById('lyrics');
        let currentPosition = -180;

        function abc() {
            scrollLyrics();
            const time = new Date();
            if (time.getHours() >= 6 && time.getHours() <= 17) {
                html = `<img src="../../image/AlongtheRiverDuringQingmingFestival_light.gif" alt="" style="width: 100%;">`;
            }
            else {
                html = `<img src="../../image/AlongtheRiverDuringQingmingFestival_night.gif" alt="" style="width: 100%;">`;
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