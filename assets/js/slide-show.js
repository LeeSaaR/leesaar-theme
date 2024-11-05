(function($){
    // SLIDE SHOW
    var intervalTime = 2500;
    var images = $('.slide-img');
    var current_image_index = 0;
    setInterval(
        function() {
            var befor_prev = 0;
            var prev       = 0;
            if (current_image_index == 0) {
                befor_prev = images.length - 2;
                prev       = images.length - 1;
            }
            else {
                befor_prev = current_image_index - 2;
                if (befor_prev == -1) {
                    befor_prev = images.length - 1;
                }
                prev = current_image_index - 1;
            }
            // before previous image
            $(images).eq(befor_prev).removeAttr('fadeoutimg');

            // previouse image
            $(images).eq(prev).removeAttr('fadeinimg');
            $(images).eq(prev).attr('fadeoutimg', '');

            // current image
            $(images).eq(current_image_index).removeAttr('fadeoutimg');
            $(images).eq(current_image_index).attr('fadeinimg', '');

            if (current_image_index == images.length - 1) {
                current_image_index = 0;
            }
            else {
                current_image_index++;
            }

        }, intervalTime
    );
})(jQuery)