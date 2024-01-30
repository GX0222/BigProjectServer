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
//	var element=$(".nav-link.active");
//	 element.each(function(){
//		console.log($(this).text());
//		$(this).removeClass("active");
//		
//	 })
//	 console.log($(countyA).text());
//	 $(countyA).addClass("active");
				
				
//	console.log("countyA"+$(countyA).text());
//	console.log("countyA"+$(countyA).prop("id"));

	var myid = "#"+$(countyA).prop("id");
	var eventClassType = $(countyA).prop("id").substring(0,1);
	var eventClassContent = $(countyA).prop("id").substring(1,2);
	console.log($(countyA).prop("id").substring(0,1));
//	console.log($(countyA).prop("id").substring(1,2));
//	var dataToServer = {"listCounty":$(countyA).text(),"eventClassType":eventClassType,"eventClassContent":eventClassContent};
	var dataToServer = {"eventClassType":eventClassType,"eventClassContent":eventClassContent};
	
	 $.ajax({
		type: 'Get',
        url: '/GetEventClass',  
//    	dataType:"JSON",
    	data:dataToServer,
        success: function(data) {
            $("#AAAA").html(data);
//           $(document).ready(function(){
			var element=$(".nav-link.active");
			//	console.log($(countyA).text());
			    element.each(function(){
//					console.log($(this).text());
					$(this).removeClass("active");
					
				})

				$(myid).toggleClass("active",true);

				

//				})
        },
        error: function(error) {
            console.error("Error:", error);
        }
    });
    
	    
	    
        $(".page-link").removeClass("selectedPage");
        $(this).addClass("selectedPage");
        $('html, body').scrollTop(0);
}