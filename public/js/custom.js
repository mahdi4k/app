$("#tile-1 .nav-tabs a").click(function (e) {
    var position = $(this).parent().position();
     var width = $(this).parent().width() ;
    var finalWidth = width - Number(150);
     $("#tile-1 .slider").css({"left": +position.left + Number(78), "width": finalWidth,"bottom" : '5'});




});

var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
 var finalFirstWidth = actWidth - Number(150);
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({"left": '78px', "width": finalFirstWidth});

//sibling sing in sing up
$(document).ready(function () {
    $("#tile-1 .nav-tabs a").click(function(){
        $( this ).parent().addClass( 'activeBackGround' );
        $(this).parent().siblings().removeClass('activeBackGround');
    });
});

//malarial form

function checkValue(element) {
    // check if the input has any value (if we've typed into it)
    if ($(element).val())
        $(element).addClass('has-value');
    else
        $(element).removeClass('has-value');
}

$(document).ready(function() {
    // Run on page load
    $('.form-control').each(function() {
        checkValue(this);
    });
    // Run on input exit
    $('.form-control').blur(function() {
        checkValue(this);
    });

});
