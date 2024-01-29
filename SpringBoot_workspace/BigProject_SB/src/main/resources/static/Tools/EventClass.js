function loadCategoryData(classId, element) {
    $.ajax({
        type: 'GET',
        url: '/GetEventClass',  
        data: { classId: classId },
        success: function(data) {
            // 处理从后端获取的数据
            console.log(data);
        },
        error: function(error) {
            console.error(error);
        }
    });
}

function loadCountyData(countyA){
	
	var dataToServer = {"listCounty":countyA};
	
	 $.ajax({
		type: 'Get',
        url: '/GetEventClass',  
//    	dataType:"JSON",
    	data:dataToServer,
        success: function(data) {
            $("#AAAA").html(data);
           

        },
        error: function(error) {
            console.error("Error:", error);
        }
    });
    
        $(".page-link").removeClass("selectedPage");
        $(this).addClass("selectedPage");
        $('html, body').scrollTop(0);
}