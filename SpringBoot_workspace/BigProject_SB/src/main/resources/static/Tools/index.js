// offcanvas
$(document).ready(function() {
    $('#myOffcanvas').on('click', function() {
        if (!$('#offcanvasExample').hasClass('show')) {
            $('.fixedDiv').animate({
                right : '350px'
            }, 300);
            $('.fixedDiv').animate({
                right : '0'
            }, 100);
        }
    });
});