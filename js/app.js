$(document).on('click', '.js-full-nav-close', function () {
    $('.js-full-nav').fadeOut();
})
$(document).on('click', '.js-full-nav-open', function () {
    $('.js-full-nav').fadeIn();
    $('.js-full-nav').css('display', 'flex');
})


// var myMap = new L.Map('map', {
//     key: 'web.XBwlSx3YJ7iiikEV27TOTqwgPMuhUdFM7HV9sGVN',
//     maptype: 'dreamy',
//     poi: true,
//     traffic: false,
//     center: [35.699739, 51.338097],
//     zoom: 14
// });

function scrollToAnchor(id){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$(document).ready(function () {
    $(".about").scroll(function () {
        $("span").text(x += 1);
    });
});