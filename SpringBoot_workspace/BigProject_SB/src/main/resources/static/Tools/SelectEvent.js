$(document).ready(function() {
	$(".selectEvent").on("click", function(e) {
		e.preventDefault();

		var eventID = $(this).data("event");
		console.log("Event ID:", eventID);
		$.ajax({
			type: "POST",
			url: "/SelectEvent",
			contentType: "application/json",
			data: JSON.stringify({
				eventID: eventID,
				track: "false"
			}),
			success: function(res) {
				window.location.href = "/Event";
			},
			error: function(error) {
				console.error("Error:", error);
			}
		});

	});
});

$(document).ready(function() {
	$(".selectEventForTrack").on("click", function(e) {
		e.preventDefault();

		var eventID = $(this).data("event");
		$.ajax({
			type: "POST",
			url: "/SelectEvent",
			contentType: "application/json",
			data: JSON.stringify({
				eventID: eventID,
				track: "true"
			}),
			success: function(res) {
				window.location.href = "/Event";
			},
			error: function(error) {
				console.error("Error:", error);
			}
		});
	});
});