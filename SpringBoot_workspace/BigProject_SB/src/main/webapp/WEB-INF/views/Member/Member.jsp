<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>會員中心</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
	crossorigin="anonymous">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
	crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"
	integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
	crossorigin="anonymous"></script>

<!-- Google Icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<!-- SimpleBar-->
<link rel="stylesheet"
	href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
<!-- NavBar -->
<link rel="stylesheet" href="/static/Tools/NavBar_2.css">
<!-- Css -->
<link rel="stylesheet" href="/static/Tools/Membe.css">
<link rel="stylesheet" href="/static/Tools/Member.css">
<link rel="stylesheet" href="/static/Tools/footer.css">
<!-- Color -->
<link rel="stylesheet" href="/static/Tools/Color.css">
<style>
</style>
</head>

<body>
	<!-- NavBar -->
	<%@ include file="../Shared/PageNavBar.jsp" %>
	<div class="bgCon">
        <!-- HomeLeft -->
        <%@ include file="Shared/HomeLeft.jsp" %>

		<div class="homeRight">
			<div class="m-0 p-0 infoCon">
				<div class="memberInfo">
					<div class="memberImg">
						<img class="rounded-circle img-fluid" id="bigHead" src="data:image/png;base64, ${memberImg}"
							onclick="memberimgChange()">
					</div>
<!-- 					<div class="memberLV"></div> -->
				</div>
				<div class="memberForm" >
					<form action="/updateMember" method="post">
						<div class="mb-3">
							<label for="name" class="form-label">姓名/暱稱/名稱：</label> <input
								type="text" class="form-control" id="name" value="${member.getUsername()}" name="username">
						</div>
						<div class="mb-3">
							<label for="mail" class="form-label">Mail：</label> <input
								type="email" class="form-control" id="mail" value="${member.getMail()}" name="mail">
						</div>
						<div class="mb-3">
							<label for="tel" class="form-label">電話：</label> <input type="tel"
								class="form-control" id="tel" value="${member.getPhone()}" name="phone">
						</div>
						<div class="mb-3">
							<label for="birth" class="form-label">生日：</label> <input
								type="date" class="form-control" id="birth" value="${member.getBirthday()}" name="birthday">
						</div>
<!-- 						<fieldset class="mb-3"> -->
<!-- 							<legend class="form-label">興趣：</legend> -->
<!-- 							<div class="d-inline-flex likeCheck"> -->
<!-- 								<div class="m-0 form-check"> -->
<!-- 									<input type="checkbox" class="form-check-input" id="01"> -->
<!-- 									<label for="01" class="form-check-label">休閒旅遊</label> -->
<!-- 								</div> -->
<!-- 								<div class="m-0 form-check"> -->
<!-- 									<input type="checkbox" class="form-check-input" id="02"> -->
<!-- 									<label for="02" class="form-check-label">藝文活動</label> -->
<!-- 								</div> -->
<!-- 								<div class="m-0 form-check"> -->
<!-- 									<input type="checkbox" class="form-check-input" id="03"> -->
<!-- 									<label for="03" class="form-check-label">親子</label> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 							<br> -->
<!-- 							<div class="d-inline-flex likeCheck"> -->
<!-- 								<div class="m-0 form-check"> -->
<!-- 									<input type="checkbox" class="form-check-input" id="04"> -->
<!-- 									<label for="04" class="form-check-label">文創/市集</label> -->
<!-- 								</div> -->
<!-- 								<div class="m-0 form-check"> -->
<!-- 									<input type="checkbox" class="form-check-input" id="05"> -->
<!-- 									<label for="05" class="form-check-label">博物館/美術館</label> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</fieldset> -->
						<button type="submit" class="btn btn-primary">提交</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<%@ include file="../Shared/Footer.jsp" %>

	<script>
		$(document).ready(function() {
			
		});
	</script>
<input type="file" id="imgupload" accept="image/png,image/jpeg" style="display:none"/>
<canvas id="imageCanvas" width="1" height="1" style="display:none"></canvas>
</body>
	<script>
	function memberimgChange(){
		console.log("1");
		$('#imgupload').trigger('click');
	}
	
	 document.getElementById('imgupload').addEventListener('change', function (event) {
	        const file = event.target.files[0];
//	         cleanCV2();
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
	                    if(image.width == image.height){
	                    	canvas.width = image.width;
	                        canvas.height = image.height;
	                        img_height = image.height;
	                        img_width = image.width;
	                     console.log("new w:"+canvas.width);
	                     console.log("new h:"+canvas.height);
	                     context.drawImage(image, 0, 0);
	                    
	                    }else if(image.width >image.height){
	                    	canvas.height = image.height;
	                    	canvas.width = (image.height);
	                    	img_height = image.height;
	                        img_width = image.width;
	                     console.log("new w:"+canvas.width);
	                     console.log("new h:"+canvas.height);
	                     start = (image.width-(image.height))/2;
	                     end= 0;
	                     context.drawImage(image, start,end,canvas.width,canvas.height,0,0,canvas.width,canvas.height);
	                    }else{
	                    	canvas.width = image.width;
	                    	canvas.height = image.width;
	                    	img_height = image.height;
	                        img_width = image.width;
	                     console.log("new w:"+canvas.width);
	                     console.log("new h:"+canvas.height);
	                     start = 0;
	                     end = (image.height-(image.width))/2;
	                     context.drawImage(image, start,end,canvas.width,canvas.height,0,0,canvas.width,canvas.height);

	                    }
	                	

	                    dataURL = canvas.toDataURL("image/png");
	                    
// 	                    context.clearRect(0, 0, canvas.width, canvas.height);
// 					    canvas.width = 1;
// 	                    canvas.height = 1;
	                    
	                    
	                    
	     				var jsonData = {"data":dataURL};
	    				console.log(jsonData);

	     				// 使用Ajax發送到後端
	     				  $.ajax({
	     			        url: "/memberImgChange",
	     			        dataType: "JSON",
	     			        type: "post",
	     				    data: jsonData,
	     				    success: function(response) {
	     				        console.log("Data sent successfully:", response);
	     				        context.clearRect(0, 0, canvas.width, canvas.height);
	     				        canvas.width = 1;
	                             canvas.height = 1;
	                             window.location.href = "/Member";
// 	                             $("#bigHead").prop("src","data:image/png;base64, ${memberImg}");
// 	                             window.location.reload();
	     				    },
	     				    error: function(error) {
	     				        console.error("Error sending data:", error);
	     				    }
	     				});
	                    

	                };

//	                 设置图像的源为临时 URL
	                image.src = url;

	            };

	            // 读取文件内容
	            reader.readAsArrayBuffer(file);

	        }
	    });

	</script>
	
</html>