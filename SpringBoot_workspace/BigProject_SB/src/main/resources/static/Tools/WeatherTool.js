$("#wtSelect").on("click", ".countyLink", function () {
    var selectedCounty = $(this).data("county");
    $.ajax({
        type: "POST",
        url: "/getTownByCounty",
        contentType: "application/json",
        data: JSON.stringify({ CountyName: selectedCounty }),
        success: function (towns) {
            $(".townRow").remove();

            console.log(towns);
            var townDiv = $("#townDivID > div.simplebar-wrapper > div.simplebar-mask > div > div > div > div");
            $.each(towns, function (index, town) {
                var newTownRow = $("<div class='townRow'><a class='townLink' data-town='" + town + "'>" + town + "</a></div>");
                townDiv.append(newTownRow);
            });
        },
        error: function (error) {
            console.error("Error:", error);
        }
    });
});

// Attach click event listeners to town links
$(".townLink").click(function () {
    var selectedTown = $(this).data("town");

    // Make an AJAX request to your backend with the selected town
    $.ajax({
        type: "POST",
        url: "/your-endpoint",
        contentType: "application/json",
        data: JSON.stringify({ town: selectedTown }),
        success: function (response) {
            // Handle the response from the backend, update UI if needed
            console.log("Response from backend:", response);
        },
        error: function (error) {
            console.error("Error:", error);
        }
    });
});