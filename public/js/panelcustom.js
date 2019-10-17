$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#responsiveWith').toggleClass('col-md-10 mr-5');

 });
});

loadEventListener();

//event listener
function loadEventListener() {
    const car = document.querySelector('#MyCars');
    if(car){
    car.addEventListener('click', carStyle);
}
}

function carStyle(e) {
    if (e.target.classList.contains('btn-custom')) {
        let getParent = $(e.target).parent().parent().parent();
        getParent.addClass('addBoxShadow').siblings().removeClass('addBoxShadow');
    }
}
