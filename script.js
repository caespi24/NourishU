$(document).ready(function(){
    // Modal init
    $('.modal').modal();

    // Carousel init
    $('.carousel').carousel({
        padding: 100,
        numVisible: 3
    });

    // Carousel-slider init
    $('.cs').carousel({
        dist: 0,
        shift: -50
    });

    $('.pdri-cs').carousel({
        fullWidth: true,
        indicators: false
    });

     // function for carousel autoplay
    setInterval(function(){
    $('.main-cs', '.cs').carousel('next');
    }, 5000);

    // Floating Action Button init
    $('.fixed-action-btn').floatingActionButton();

    // Dropdown init
    $('.dropdown-trigger').dropdown();

    // Sidenav init
    $('.sidenav').sidenav();
})

flatpickr("#datetimePicker", {
    enableTime: true,
    dateFormat: "m-d-Y H:i",
});


$('.username').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.email').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.username').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.password').on('click', function() {
    $(this).addClass('active');
    $('.username').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.fname').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.username').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.lname').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.username').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.age').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.username').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.gender').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.username').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.bdate').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.username').removeClass('active');
    $('.weight').removeClass('active');
    $('.height').removeClass('active');
});

$('.weight').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.username').removeClass('active');
    $('.height').removeClass('active');
});

$('.height').on('click', function() {
    $(this).addClass('active');
    $('.password').removeClass('active');
    $('.email').removeClass('active');
    $('.fname').removeClass('active');
    $('.lname').removeClass('active');
    $('.age').removeClass('active');
    $('.gender').removeClass('active');
    $('.bdate').removeClass('active');
    $('.weight').removeClass('active');
    $('.username').removeClass('active');
});

document.addEventListener('DOMContentLoaded', function(){
    var carouselHeight = window.innerHeight;
    var elems = document.querySelectorAll('.pdri-cs');
    for(var i = 0; i < elems.length; i++){
        elems[i].style.height = carouselHeight + 'px';
    }
});

// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.tabs');
//     var options = {};
//     var instances = M.Tabs.init(elems, options);
// });

