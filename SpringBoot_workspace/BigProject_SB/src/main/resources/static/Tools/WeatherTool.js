$("#wtSelect").on("click", ".countyLink", function () {
    var selectedCounty = $(this).data("county");
    $.ajax({
        type: "POST",
        url: "/getTownByCounty",
        contentType: "application/json",
        data: JSON.stringify({ CountyName: selectedCounty }),
        success: function (towns) {
            $(".townRow").remove();
            // console.log(towns);
            var townDiv = $("#townDivID > div.simplebar-wrapper > div.simplebar-mask > div > div > div > div");

            var currentWidth = $("#wtSelect").width();
            var targetWidth = 600;

            if (currentWidth !== targetWidth) {
                $("#wtSelect").animate({ width: targetWidth + "px" }, 500, function () {
                    $.each(towns, function (index, town) {
                        var newTownRow = $("<div class='townRow'><a class='townLink' data-county='" + selectedCounty + "' data-town='" + town + "'>" + town + "</a></div>");
                        townDiv.append(newTownRow);
                        newTownRow.hide().delay(200 * index).fadeIn(300);
                    });
                });
            } else {
                $.each(towns, function (index, town) {
                    var newTownRow = $("<div class='townRow'><a class='townLink' data-county='" + selectedCounty + "' data-town='" + town + "'>" + town + "</a></div>");
                    townDiv.append(newTownRow);
                    newTownRow.hide().delay(200 * index).fadeIn(300);
                });
            }
        },
        error: function (error) {
            console.error("Error:", error);
        }
    });
});




$("#wtSelect").on("click", ".townLink", function () {
    var selectedTown = $(this).data("town");
    var selectedCounty = $(this).data("county");

    $.ajax({
        type: "POST",
        url: "/getWeatherByTown",
        contentType: "application/json",
        data: JSON.stringify({ CountyName: selectedCounty, TownName: selectedTown }),
        success: function (res) {
            console.log("Response from backend:", res.CountyName);
            console.log(res.TownName);
            console.log(res.AirTemperature);
            console.log(res.Weather);
            var CTTDiv = $("#weatherTool > div > div.weatherColSm.col-12 > div");
            CTTDiv.html(res.CountyName + " " + res.TownName + "<br>" + res.AirTemperature + "℃");
            var weatherDiv = $("#weatherTool > div > div.weatherCol.col.col-xxl-4 > div");
            weatherDiv.text(res.Weather);
            var CTDiv = $("#weatherTool > div > div:nth-child(1) > div");
            CTDiv.html(res.CountyName + "<br>" + res.TownName);
            var tempDiv = $("#weatherTool > div > div:nth-child(2) > div");
            tempDiv.text(res.AirTemperature + "℃");
            $("#wtSelect").fadeOut(500, function() {
                $(this).css("width", "300px");
                $(this).hide();
            });
            $(".townRow").remove();
        },
        error: function (error) {
            console.error("Error:", error);
        }
    });
});

$(document).ready(function() {
    $(".countyRow").each(function(index) {
        $(this).delay(200 * index).fadeIn(300);
    });
});

$("#weatherTool").on("click", function () {
    $("#wtSelect").fadeIn(500);
});

//停止主頁面滾動
$("#wtSelect").on('mouseenter', function () {
    $('body').css('overflow', 'hidden');
});

$("#wtSelect").on('mouseleave', function () {
    $('body').css('overflow', 'auto');
});
