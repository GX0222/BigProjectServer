<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯活動</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
    <!-- Color -->
    <link rel="stylesheet" href="/static/Tools/Color.css">

    <style>
        .homeLeft2 {
            min-width: 300px;
            height: 100%;
            /* background-color: aqua; */
            margin: 0px;
            padding: 50px;
        }

        /* ========== */

        .homeRight {
            height: 100%;
            width: 100%;
            max-width: 1400px;
            min-width: 796px;
            /* background-color: greenyellow; */
            display: flex;
            /* align-items: center; */
            justify-content: center;
        }

        .infoCon {
            max-width: 1040px;
            /* background-color: yellowgreen; */
            margin: 0px;
            padding: 0px;
            margin-top: 30px;
        }

        .dataTable {
            /* background-color: aquamarine; */
        }

        .dataTable th {
            width: 200px;
        }

        .dataTable img {
            width: 200px;
        }

        /* =========== */
    </style>



</head>

<body>
<!--     <nav id="myNavbar" class="navbar navbar-expand-md bg-none w-100 fixed-top m-0 p-0" style=" top: 0px;"> -->
<!--         <div class="container-fluid m-0 p-0 h-100"> -->
<!--             <a href="/" class="navbar-brand" style="font-size:x-large;"> -->
<!--                 <img src="/static/image/logo1228.png" alt="logo" width="65" height="50"></a> -->
<!--             <div class="memberConMd d-flex d-md-none"> -->
<!--                 <div class="nameCon"> -->
<!--                     <a href="/Member"> -->
<!--                         <img class="rounded-circle img-fluid" src="/static/image/IMG_0987.JPG" alt=""> -->
<!--                     </a> -->
<!--                 </div> -->
<!--                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" -->
<!--                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
<!--                     <span class="navbar-toggler-icon"></span> -->
<!--                 </button> -->
<!--             </div> -->

<!--             <div class="collapse navbar-collapse" id="mynavbar"> -->
<!--                 <ul class="navbar-nav me-auto mb-0"> -->
<!--                     <li class="nav-item"> -->
<!--                         <a id="news" onclick="nav_item_active()" class="nav-link" aria-current="page" href="#">活動資訊</a> -->
<!--                     </li> -->
<!--                     <li class="nav-item"> -->
<!--                         <a id="trans" onclick="nav_item_active()" class="nav-link" aria-current="page" href="#">交通情報</a> -->
<!--                     </li> -->
<!--                     <li class="nav-item"> -->
<!--                         <a id="forum" onclick="nav_item_active()" class="nav-link" aria-current="page" href="#">旅遊論壇</a> -->
<!--                     </li> -->
<!--                     <li class="nav-item"> -->
<!--                         <a id="aboutus" onclick="nav_item_active()" class="nav-link" aria-current="page" -->
<!--                             href="#">關於我們</a> -->
<!--                     </li> -->
<!--                 </ul> -->
<!--                 <div class="memberCon d-none d-md-flex"> -->
<!--                     <div class="nameCon"> -->
<!--                         <a href="/Member"> -->
<!--                             <img class="rounded-circle img-fluid" src="/static/image/IMG_0987.JPG" alt=""> -->
<!--                         </a> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--         </div> -->
<!--     </nav> -->
	<!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
    <div class="bgCon">
		<!-- HomeLeft -->
        <%@ include file="Shared/HomeLeft.jsp" %>
        <!-- <div class="homeLeft2">

        </div> -->
        <div class="homeRight">
            <div class="infoCon">
                <h3>編輯活動</h3>
                      <hr />
                <form action="" method="post">
                    <div class="form-group">
                        <label class="control-label" for="datepicker">活動時間</label><br>
                        <input type="text" id="datepicker" value="">
                    </div>
					<div class="form-group">
                        <label class="control-label" for="City">活動城市</label>
                        <input class="form-control" type="text" id="City" name="Name" value="" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Location">活動地點</label>
                        <input class="form-control" type="text" id="Location" name="Name" value="" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Name">活動名稱</label>
                        <input class="form-control" type="text" id="Name" name="Name" value="" />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="Summary">活動簡介</label>
                        <input class="form-control" type="text" id="Summary" name="Summary" value="" />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="textarea">活動內容</label><br>
                        <textarea id="textarea" name="textarea" rows="10" cols="50" value="" required></textarea>
                    </div>
<!--                     SHEN -->
                    <div class="form-group">
                        <label class="control-label" for="EventURL">活動網址</label>
                        <input class="form-control" type="text" id="EventURL" name="Name" value="" />
                    </div>
                    <label for="formFile" class="form-label">上傳圖片</label>
	            	<input class="form-control" type="file" id="formFile" accept="image/png,image/jpeg" name='uploadMyFile' >
                    <div>
                    	<input type="checkbox" name="checkboxes" id="checkbox1" value="1" checked="checked" /> <label for="checkbox1">休閒旅遊</label><br>
                        <input type="checkbox" name="checkboxes" id="checkbox2" value="2" /> <label for="checkbox2">藝文活動</label> <br>
                        <input type="checkbox" name="checkboxes" id="checkbox3" value="3" /> <label for="checkbox3">親子 </label><br>
                        <input type="checkbox" name="checkboxes" id="checkbox4" value="4" /> <label for="checkbox4">文創/市集 </label><br>
                        <input type="checkbox" name="checkboxes" id="checkbox5" value="5" /> <label for="checkbox5">博物館/美術館</label>
                    </div>

                    <br>

                    <div class="form-group">
                        <input id="okButton" type="button" value="確定" class="btn btn-outline-primary" /> |
                        <a href="/List" class="btn btn-outline-info">取消</a>
                    </div>
                </form>


            </div>

			<div >
				<canvas id="imageCanvas" width="1" height="1" style="display:none"></canvas>
			</div>
        </div>
    </div>
    
</body>
<script>

let dataURL;
var imageUpdate_check = 0;
//hobby的總個數
var hobby_num = 5;
var editId = sessionStorage.getItem("myEventListId");
// console.log(editId);

$.get("/eventlist/item/" + editId, function (e) {
    
	$("#datepicker").prop("value",e[0].eventTime);
	$("#Name").prop("value",e[0].eventTitle);
	$("#Summary").prop("value",e[0].eventIntro);
	$("#textarea").prop("value",e[0].eventInfo);
	$("#EventURL").prop("value",e[0].eventUrl);
   	$("#City").prop("value",e[0].county);
   	$("#Location").prop("value",e[0].location);
   	
// 	console.log(typeof(e[1][0].classId));
// 	console.log(e[1][0].classId);
	$("#checkbox1").prop("checked",0)
	for (var i = 0; i < e[1].length; i++){
		var id = "#checkbox"+e[1][i].classId.toString()
		$(id).prop("checked",1)
	}
	
});



$("#okButton").on("click", async function () {


//         var dataToServer=({
// 			"eventId":editId.toString(),
//             "eventDate":$("#datepicker").prop("value"),
//            	"eventName":$("#Name").prop("value"),
//            	"eventIntro":$("#Summary").prop("value"),
//            	"eventInfo":$("#textarea").prop("value"),
//            	"hb1":$("#checkbox1").prop("checked")?"true":"false",
//            	"hb2":$("#checkbox2").prop("checked")?"true":"false",
//            	"hb3":$("#checkbox3").prop("checked")?"true":"false",
//            	"hb4":$("#checkbox4").prop("checked")?"true":"false",
//            	"hb5":$("#checkbox5").prop("checked")?"true":"false"
//         });

		

        if (imageUpdate_check){
        	var dataToServer=({
        		"eventId":editId.toString(),
                "eventDate":$("#datepicker").prop("value"),
               	"eventName":$("#Name").prop("value"),
               	"eventIntro":$("#Summary").prop("value"),
               	"eventInfo":$("#textarea").prop("value"),
               	"eventUrl":$("#EventURL").prop("value"),
               	"eventCity":$("#City").prop("value"),
               	"eventLocation":$("#Location").prop("value"),
               	"hb1":$("#checkbox1").prop("checked")?"true":"false",
               	"hb2":$("#checkbox2").prop("checked")?"true":"false",
               	"hb3":$("#checkbox3").prop("checked")?"true":"false",
               	"hb4":$("#checkbox4").prop("checked")?"true":"false",
               	"hb5":$("#checkbox5").prop("checked")?"true":"false",
               	"data":dataURL
            });
//         	console.log("update time :"+imageUpdate_check.toString());
        	imageUpdate_check = 0;
        }else{
        	var dataToServer=({
        		"eventId":editId.toString(),
                "eventDate":$("#datepicker").prop("value"),
               	"eventName":$("#Name").prop("value"),
               	"eventIntro":$("#Summary").prop("value"),
               	"eventInfo":$("#textarea").prop("value"),
               	"eventUrl":$("#EventURL").prop("value"),
               	"eventCity":$("#City").prop("value"),
               	"eventLocation":$("#Location").prop("value"),
               	"hb1":$("#checkbox1").prop("checked")?"true":"false",
               	"hb2":$("#checkbox2").prop("checked")?"true":"false",
               	"hb3":$("#checkbox3").prop("checked")?"true":"false",
               	"hb4":$("#checkbox4").prop("checked")?"true":"false",
               	"hb5":$("#checkbox5").prop("checked")?"true":"false"
            });
        }
        
        
        $.ajax({
        url: "/getJson3",
        dataType: "JSON",
        type: "post",
        data:dataToServer,
        success: function (msg) {
//             console.log("OK");
            window.location = "/List";},
        error:function(error){
//         	console.log("error");

//         	console.log(error.responseText);
        }
        
        })
        
        
});

// 		console.log("OK");
		
		 document.getElementById('formFile').addEventListener('change', function (event) {
		        const file = event.target.files[0];
//		         cleanCV2();
		        check_changeCNV = 0;
		        img_height = 1;
		        img_width = 1;
		        var img_height = 1;
		        var img_width = 1;
		        if (file) {
		            // 创建FileReader对象
		            const reader = new FileReader();

		            // 监听FileReader的加载事件
		            reader.onload = function (e) {
		                // 宣告一個變數resultArray 這個變數是一個 Uint8Array
		                const resultArray = new Uint8Array(e.target.result);

		                // 将文件内容存储在AAA变量中
		                const AAA = resultArray;

		                // 可以在这里对Uint8Array执行你的其他操作

		                const canvas = document.getElementById('imageCanvas');
		                const context = canvas.getContext('2d');


		                // 从 Uint8Array 创建一个 Blob 对象
		                const blob = new Blob([AAA], { type: 'image/png' });

		                // 创建一个临时 URL，用于指向 Blob 对象
		                const url = URL.createObjectURL(blob);

		                // 创建一个新 Image 对象
		                const image = new Image();

		                // 当图像加载完成时绘制到 Canvas 上
		                image.onload = function () {
		                    if(image.width/16 == image.height/9){
		                    	canvas.width = image.width;
		                        canvas.height = image.height;
		                        img_height = image.height;
		                        img_width = image.width;
// 		                     console.log("new w:"+canvas.width);
// 		                     console.log("new h:"+canvas.height);
		                     context.drawImage(image, 0, 0);
		                    
		                    }else if(image.width/16 >image.height/9){
		                    	canvas.height = image.height;
		                    	canvas.width = (image.height/9*16);
		                    	img_height = image.height;
		                        img_width = image.width;
// 		                     console.log("new w:"+canvas.width);
// 		                     console.log("new h:"+canvas.height);
		                     start = (image.width-(image.height/9*16))/2;
		                     end= 0;
		                     context.drawImage(image, start,end,canvas.width,canvas.height,0,0,canvas.width,canvas.height);
		                    }else{
		                    	canvas.width = image.width;
		                    	canvas.height = image.width/16*9;
		                    	img_height = image.height;
		                        img_width = image.width;
// 		                     console.log("new w:"+canvas.width);
// 		                     console.log("new h:"+canvas.height);
		                     start = 0;
		                     end = (image.height-(image.width/16*9))/2;
		                     context.drawImage(image, start,end,canvas.width,canvas.height,0,0,canvas.width,canvas.height);

		                    }
		                	

		                    dataURL = canvas.toDataURL("image/png");
		                    
// 		                    context.clearRect(0, 0, canvas.width, canvas.height);
// 						    canvas.width = 1;
// 		                    canvas.height = 1;
		                    imageUpdate_check =imageUpdate_check+1;

		                };

//		                 设置图像的源为临时 URL
		                image.src = url;

		            };

		            // 读取文件内容
		            reader.readAsArrayBuffer(file);

		        }
		    });


</script>
</html>