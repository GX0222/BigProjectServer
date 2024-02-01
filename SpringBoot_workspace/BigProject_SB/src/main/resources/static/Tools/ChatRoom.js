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

    
    var target = document.querySelector('p[contenteditable="true"]');

    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' || mutation.type === 'childList') {
                var thisP = mutation.target;
                var Room = $(thisP).closest('.Room');
                var CRText = Room.find(".CRText");
                var CRInput = $(thisP).closest('.CRInput');
                var contentHeight = CRInput.height()+10;
                CRText.css('height', 'calc(100% - ' + contentHeight + 'px)');

                console.log("CH: "+contentHeight );
                console.log(CRInput.height());
                console.log("thisP高: "+ $(thisP).css("height"));
                console.log("CRText高: "+CRText.css("height"));
                console.log("CRInput高: "+CRInput.css("height"));
            }
        });
    });

    var config = { attributes: true, childList: true, subtree: true };
    observer.observe(target, config);
});
