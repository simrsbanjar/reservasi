$(document).ready(function() {
    var autoplaySlider = $('#dokterslide').lightSlider({
        auto:true,
        loop:true,
        item:4,
        pauseOnHover: true,
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        } 
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
});