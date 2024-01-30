//$(document).ready(function() {
//	// 使用 jQuery 的點擊事件處理函數
//	$(".eventFavor").click(function(e) {
//		// 防止默認行為，例如防止按鈕的默認提交行為
//		e.preventDefault();
//		// 獲取按鈕上的 data-event 屬性的值，即事件的 ID
//		var eventId = $(this).data('event');
//		console.log("Event ID:", eventId);
//		// 執行您的操作，例如發送 Ajax 請求
//		$.ajax({
//			type: 'POST',
//			url: "Event",  // 請更改為實際的後端端點
//			contentType: 'application/json',
//			// 如果有需要發送的數據，請在這裡添加
//			// data: JSON.stringify({ key1: 'value1', key2: 'value2' }),
//			data:JSON.stringify({eventId: eventId}),
//			success: function(response) {
//				// 處理成功的回應
//				alert("文章收藏成功")
//				console.log('Request successful!', response);
//			},
//			error: function(error) {
//				// 處理錯誤
//				console.error('Error:', error);
//			}
//		});
//	});
//});

$(document).ready(function() {
    // 使用 jQuery 的點擊事件處理函數
    $(".eventFavor").click(function(e) {
        // 防止默認行為，例如防止按鈕的默認提交行為
        e.preventDefault();
		// 獲取會員ID
//		var memId = $(sessionScope.member.memberId);
		var memId = '${sessionScope.member.memberId}';
		
		console.log("memId:", memId);
		// 如果memId不存在或為null，顯示提示信息
		if (memId === '2' || memId === 2) {
			alert("請登入會員");
			return; // 終止函數執行
		}
        // 獲取按鈕上的 data-event 屬性的值，即事件的 ID
        var eventId = $(this).data('event');
        console.log("Event ID:", eventId);
		var eventtitle = $(".eTitle h1").text();
		console.log(eventtitle);
        // 判斷是取消收藏還是添加收藏，這裡假設已經在按鈕上使用了 data-favorite 屬性來表示是否已經收藏
        var isFavorite = $(this).data('favorite');

        // 執行您的操作，例如發送 Ajax 請求
        $.ajax({
            type: isFavorite ? 'DELETE' : 'POST',
            url: "/Event",  // 請更改為實際的後端端點
            contentType: 'application/json',
            // 如果有需要發送的數據，請在這裡添加
            // data: JSON.stringify({ key1: 'value1', key2: 'value2' }),
            data: JSON.stringify({ eventId: eventId }),
            success: function(response) {
                // 處理成功的回應
                if (isFavorite) {
                    alert("取消收藏成功");
                    // 根据取消收藏状态设置样式
                    $(".material-symbols-outlined").css("fill", "red");
                } else {
                    alert("文章收藏成功"+ eventId.toString());//eventId.toString()eventId文字化
                    // 根据收藏状态设置样式
                    $(".material-symbols-outlined").css("fill", "green");
                }
                console.log('Request successful!', response);
                // 更新按鈕的 data-favorite 屬性
                $(this).data('favorite', !isFavorite);
            },
            error: function(error) {
                // 處理錯誤
                console.error('Error:', error);
            }
        });
    });
});
