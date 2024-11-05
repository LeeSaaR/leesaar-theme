(function($){
    // MENU BUTTON
    $('.menu-button').click(
        function () {
            if ($('.menu-button').hasClass('button-unchecked')) {
                // check button
                $('.menu-button').removeClass('button-unchecked');
                $('.menu-button').addClass('button-checked');

                $('.header-menu-container').removeClass('fade-out');
                $('.header-menu-container').addClass('fade-in');

            }
            else {
                // uncheck button
                $('.menu-button').removeClass('button-checked');
                $('.menu-button').addClass('button-unchecked');

                $('.header-menu-container').removeClass('fade-in');
                $('.header-menu-container').addClass('fade-out');
            }
        }
    );

    // MENU CLASS REMOVAL
    $(window).on('resize', function() {
        var win = $(this);
        if (win.width() > 780) {
            $('.menu-button').removeClass('button-checked');
            $('.menu-button').addClass('button-unchecked');
            $('.header-menu-container').removeClass('fade-in');
            $('.header-menu-container').addClass('fade-out');
        }
    });

    // PRIMARY NAVIGATION SUB MENU
    var $menu_item = $('.primary-navigation .menu > .menu-item');
    var class_sub_menu = '.sub-menu';
    $menu_item.hover(
        function() {
            var $this_menu_item = $(this);
            $this_menu_item.children(class_sub_menu).removeClass('undrop');
            $this_menu_item.children(class_sub_menu).addClass('drop');
        },
        function() {
            var $this_menu_item = $(this);
            $this_menu_item.children(class_sub_menu).removeClass('drop');
            $this_menu_item.children(class_sub_menu).addClass('undrop');
        }
    )
})(jQuery)