$(function () {
    $('.captionedimage').dropCaptions({
        showSpeed: 500,
        hideSpeed: 500,
        showOpacity: 2,
        hideOpacity: 0,
    })
});

$('.captionedimage').mouseover(function () {
    let $icons = $(this).parent().parent().next().children().last();
    $icons.hide();
}).mouseout(function () {
    let $icons = $(this).parent().parent().next().children().last();
    $icons.show();
});
