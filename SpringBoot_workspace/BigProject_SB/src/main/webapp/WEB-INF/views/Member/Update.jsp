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
                        <label class="control-label" for="Time">活動時間</label><br>
                        <input type="text" id="datepicker" value="">
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

                    <div>
                        <label>活動分類:</label><br>
                        <input type="checkbox" name="checkboxes" id="checkbox1" value="1" checked="checked" /> 休閒旅遊
                        <br>
                        <input type="checkbox" name="checkboxes" id="checkbox2" value="2" /> 藝文活動 <br>
                        <input type="checkbox" name="checkboxes" id="checkbox3" value="3" /> 親子 <br>
                        <input type="checkbox" name="checkboxes" id="checkbox4" value="4" /> 文創/市集 <br>
                        <input type="checkbox" name="checkboxes" id="checkbox5" value="5" /> 博物館/美術館
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

        $(function () {
            $("#datepicker").datepicker();
        })

        var editId = sessionStorage.getItem("id");
        $.get("/todo/item/" + editId, function (e) {
            $("#Name").prop("value", e.title);
            $("#IsComplete").prop("checked", e.isComplete);
            console.log(e);
        })

        $("#okButton").on("click", async function () {

            var dataToServer = {
                datepicker: $("#datepicker").prop("value"),
                title: $("#Name").prop("value"),
                Summary: ($("#Summary").prop("value")),
                textarea: ($("#textarea").prop("value")),
                checkbox1: ($("#checkbox1").prop("checked")) ? 1 : 0,
                checkbox2: ($("#checkbox2").prop("checked")) ? 1 : 0,
                checkbox3: ($("#checkbox3").prop("checked")) ? 1 : 0,
                checkbox4: ($("#checkbox4").prop("checked")) ? 1 : 0,
                checkbox5: ($("#checkbox5").prop("checked")) ? 1 : 0,

            };

            $.ajax({
                type: "put",
                url: "/todo/item",
                contentType: "application/json",
                data: JSON.stringify(dataToServer),
                success: function () {
                    window.location = "index.html";
                }

            })

            window.location = "/Activity_list.html";

        })





    </script>

</body>

</html>