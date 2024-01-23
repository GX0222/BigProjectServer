<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>上傳活動</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

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
    <link rel="stylesheet" href="/static/Tools/Update.css">
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
                        <a href="/" class="btn btn-outline-info">取消</a>
                    </div>
                </form>


            </div>


        </div>
    </div>

    <!-- Footer -->
	<%@ include file="../Shared/Footer.jsp" %>

    <script>
    
    $("#okButton").on("click", async function () {

        var dataToServer=({
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
        console.log(dataToServer);
        $.ajax({
        url: "/getJson4",
        dataType: "JSON",
        type: "post",
        data:dataToServer,
        success: function (msg) {
            console.log("OK");
            window.location = "/List";},
        error:function(error){
        	console.log(error.responseText);
        }
        
        })
        
        
});
    

    </script>

</body>

</html>