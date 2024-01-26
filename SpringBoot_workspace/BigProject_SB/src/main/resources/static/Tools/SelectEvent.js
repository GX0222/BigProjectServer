$(document).ready(function () {
	$(".selectEvent").click(function (e) {
		e.preventDefault();

		var eventID = $(this).data("event");
		var track = $(this).data("track");
		console.log("Event ID:", eventID);
		$.ajax({
			type: "POST",
			url: "/SelectEvent",
			contentType: "application/json",
			data: JSON.stringify({
				eventID: eventID,
				track: track
			}),
			success: function (res) {
				console.log(res);
				window.location.href = "/Event";
			},
			error: function (error) {
				console.error("Error:", error);
			}
		});

	});
});