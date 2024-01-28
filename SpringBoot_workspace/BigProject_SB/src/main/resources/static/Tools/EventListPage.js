$(document).ready(function () {
	$("a.page-link").click(function (e) {
		e.preventDefault();

		var pageNum = $(this).data("page");
		$.ajax({
			type: "GET",
            url: "/ShowEventList",
            data: { pageNum: pageNum },
			success: function (res) {
				$("#showEvents").html(res);
			},
			error: function (error) {
				console.error("Error:", error);
			}
		});
        $(".page-link").removeClass("selectedPage");
        $(this).addClass("selectedPage");
        $('html, body').scrollTop(0);
	});
});