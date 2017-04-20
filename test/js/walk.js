$(document).ready(function () {

    var $character = $('.character');

    $(document).keydown(function (e) {

        switch (e.which) {
            case 65: // a, left
                if ($character.offset().left > ($('.container').width() * 0.05)) {
                    $character.css('left', $character.offset().left - ($('.container').width() * 0.1));
                }
                break;
            case 87: // w, up
                if ($character.offset().top > 70) {
                    $character.css('top', $character.offset().top - ($('.container').width() * 0.1));
                }
                break;
            case 68: // d, right
                if ($character.offset().left < ($('.container').width() * 0.85 - $character.width())) {
                    $character.css('left', $character.offset().left + ($('.container').width() * 0.1));
                }
                break;
            case 83: // s, down
                if ($character.offset().top < ($('.container').height() - $character.height())) {
                    $character.css('top', $character.offset().top + ($('.container').width() * 0.1));
                }
                break;
        }

        $(window).scrollTop(($character.offset().top - 70));
    });


});
