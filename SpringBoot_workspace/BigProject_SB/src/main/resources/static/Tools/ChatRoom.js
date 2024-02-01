$(document).ready(function () {
    $("#ChatRoomCon").on("click", ".ChatRoom", function(e){
        e.preventDefault();
        if (!$(e.target).closest('.Room').length) {
            var $room = $(this).find('.Room');
        
            $(".ChatRoom").not(this).each(function() {
                if ($(this).hasClass("CRSelected")) {
                    $(this).find('.Room').animate({
                        width: '0px',
                        height: '0px',
                        left: '+=300px',
                        top: '+=400px'
                    }, 100, function() {
                        $(this).hide();
                    });
                    $(this).toggleClass("CRSelected");
                }
            });
    
            if ($(this).hasClass("CRSelected")) {
                $room.animate({
                    width: '0px',
                    height: '0px',
                    left: '+=300px',
                    top: '+=400px'
                }, 100, function() {
                    $room.hide();
                });
            } else {
                $room.show().animate({
                    width: '300px',
                    height: '400px',
                    left: '-=300px',
                    top: '-=400px'
                }, 100);
            }
            $(this).toggleClass("CRSelected");
        }
    });
});