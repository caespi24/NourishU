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

     // function for carousel autoplay
    setInterval(function(){
    $('.carousel').carousel('next');
    }, 5000);

    // Floating Action Button init
    $('.fixed-action-btn').floatingActionButton({
        toolbarEnabled: true
    });
})

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