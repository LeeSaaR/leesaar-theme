(function($){
    // // MENU BUTTON
    // $('.menu-button').click(
    //     function () {
    //         if ($('.menu-button').hasClass('button-unchecked')) {
    //             // check button
    //             $('.menu-button').removeClass('button-unchecked');
    //             $('.menu-button').addClass('button-checked');

    //             $('.header-menu-container').removeClass('fade-out');
    //             $('.header-menu-container').addClass('fade-in');

    //         }
    //         else {
    //             // uncheck button
    //             $('.menu-button').removeClass('button-checked');
    //             $('.menu-button').addClass('button-unchecked');

    //             $('.header-menu-container').removeClass('fade-in');
    //             $('.header-menu-container').addClass('fade-out');
    //         }
    //     }
    // );

    // // MENU CLASS REMOVAL
    // $(window).on('resize', function() {
    //     var win = $(this);
    //     if (win.width() > 780) {
    //         $('.menu-button').removeClass('button-checked');
    //         $('.menu-button').addClass('button-unchecked');
    //         $('.header-menu-container').removeClass('fade-in');
    //         $('.header-menu-container').addClass('fade-out');
    //     }
    // });

    // // PRIMARY NAVIGATION SUB MENU
    // var $menu_item = $('.primary-navigation .menu > .menu-item');
    // var class_sub_menu = '.sub-menu';
    // $menu_item.hover(
    //     function() {
    //         var $this_menu_item = $(this);
    //         $this_menu_item.children(class_sub_menu).removeClass('undrop');
    //         $this_menu_item.children(class_sub_menu).addClass('drop');
    //     },
    //     function() {
    //         var $this_menu_item = $(this);
    //         $this_menu_item.children(class_sub_menu).removeClass('drop');
    //         $this_menu_item.children(class_sub_menu).addClass('undrop');
    //     }
    // )

    // FAQ-ITEM CONTROL
    // $('.faq-container').click(
    //     function(){
    //         if ($(this).hasClass('revealed')) {
    //             // hide
    //             $(this).find('.faq-answer').animate( {opacity: '0'}, 150 ).slideToggle(200);
    //             $(this).removeClass('revealed');
    //         }
    //         else {
    //             // show
    //             $(this).find('.faq-answer').slideToggle(200).animate( {opacity: '1'}, 150 );
    //             $(this).addClass('revealed');
    //         }
    //     }
    // );

    // SLIDE SHOW
    // var intervalTime = 2500;
    // var images = $('.slide-img');
    // var current_image_index = 0;
    // setInterval(
    //     function() {
    //         var befor_prev = 0;
    //         var prev       = 0;
    //         if (current_image_index == 0) {
    //             befor_prev = images.length - 2;
    //             prev       = images.length - 1;
    //         }
    //         else {
    //             befor_prev = current_image_index - 2;
    //             if (befor_prev == -1) {
    //                 befor_prev = images.length - 1;
    //             }
    //             prev = current_image_index - 1;
    //         }
    //         // before previous image
    //         $(images).eq(befor_prev).removeAttr('fadeoutimg');

    //         // previouse image
    //         $(images).eq(prev).removeAttr('fadeinimg');
    //         $(images).eq(prev).attr('fadeoutimg', '');

    //         // current image
    //         $(images).eq(current_image_index).removeAttr('fadeoutimg');
    //         $(images).eq(current_image_index).attr('fadeinimg', '');

    //         if (current_image_index == images.length - 1) {
    //             current_image_index = 0;
    //         }
    //         else {
    //             current_image_index++;
    //         }

    //     }, intervalTime
    // );

    // INSERT SOCIAL MEDIA ICONS
    function replaceIcons( index ) {
        if ($(this).text().toLowerCase() == 'youtube') {
            $(this).addClass('fab fa-youtube fa-2x')
        }
        if ($(this).text().toLowerCase() == 'github') {
            $(this).addClass('fab fa-github fa-2x')
        }
        if ($(this).text().toLowerCase() == 'soundcloud') {
            $(this).addClass('fab fa-soundcloud fa-2x')
        }
        if ($(this).text().toLowerCase() == 'facebook') {
            $(this).addClass('fab fa-facebook fa-2x')
        }
        if ($(this).text().toLowerCase() == 'twitter') {
            $(this).addClass('fab fa-twitter fa-2x')
        }

        $(this).html('');
        $(this).attr('target', '_blank');
        $(this).attr('rel', 'noopener');

    }

    $('.footer-social-media-navigation .menu .menu-item a').each( replaceIcons )
    $('.social-media-container a').each( replaceIcons )


    // SCROLL TO PAGE START
    $('.button-page-start').click( function() { $('#site-start')[0].scrollIntoView(); } )

    // // COOKIE BANNER
    // $('.btn-cookie-accept').click( 
    //     function(){
    //         showCookieBanner(false);
    //     }
    // )
    // $('.btn-cookie-decline').click( 
    //     function(){
    //         showCookieBanner(false);
    //     }
    // )

    

    // $('.btn-cookie-settings').click( 
    //     function() {
    //         var $cookie_text = $('.cookie-banner-text');
    //         $cookie_text.attr('visible', 'hidden');

    //         var $cookie_settings = $('.cookie-banner-settings');
    //         $cookie_settings.attr('visible', 'visible');

    //         $(this).attr('visible', 'hidden');
    //         var $cookie_btn_back = $('.btn-cookie-back');
    //         $cookie_btn_back.attr('visible', 'visible')
    //     }
    // )

    // $('.btn-cookie-back').click( 
    //     function() {

    //         var $cookie_text = $('.cookie-banner-text');
    //         $cookie_text.attr('visible', 'visible');

    //         var $cookie_settings = $('.cookie-banner-settings');
    //         $cookie_settings.attr('visible', 'hidden');

    //         $(this).attr('visible', 'hidden');
    //         var $cookie_btn_back = $('.btn-cookie-settings');
    //         $cookie_btn_back.attr('visible', 'visible')
    //     }
    // )

    // $('iframe').each( setBlockAttributes )
    // function setBlockAttributes( index ){
    //     $str = $(this).attr("src")
    //     if ($str.indexOf("youtube") >= 0) {
    //         $(this).attr("class", "is-provider-youtube")
    //     }
    //     if ($str.indexOf("soundcloud") >= 0) {
    //         $(this).attr("class", "is-provider-soundcloud")
    //     }
    //     $(this).removeAttr("width")
    //     $(this).removeAttr("height")
    //     $(this).attr("style", "width: 100%; aspect-ratio: 16/9;")
    // }

    // // BLOCK YOUTUBE CONTENT
    // $('.is-provider-youtube').each( blockYoutubeElement )
    // function blockYoutubeElement( index ){
    //     $user_accepted_cookies = $.cookie('user_accepted_cookies');
    //     if ($user_accepted_cookies == "true" ) return;
    //     setYoutubePlaceholder(this);
    // }

    // function setYoutubePlaceholder( index ) {
    //     $controls = '<p class="blocked-title">Hier wird ein Youtube-Video blockiert.</p>'
    //     $controls += '<p>Um Dir das Youtube Video anschauen zu können, musst Du vorher Deine Einwilligung zur Nutzung von Cookies geben.</p>'
    //     $controls += '<button class="blocked-content-open-cookie-btn">Cookies Verwalten</button>'
    //     $(index).replaceWith('<div class="blocked-content" data-placeholder-image="#">'+$controls+'</div>')
    // }

    // // BLOCK SOUNDCLOUD CONTENT
    // $('.is-provider-soundcloud').each( blockSoundcloudElement )
    // function blockSoundcloudElement( index ){
    //     $user_accepted_cookies = $.cookie('user_accepted_cookies');
    //     if ($user_accepted_cookies == "true" ) return;
    //     setSoundcloudPlaceholder(this);
    // }

    // function setSoundcloudPlaceholder( index ) {
    //     $controls = '<p class="blocked-title">Hier wird ein Soundcloud-Track blockiert.</p>'
    //     $controls += '<p>Um Dir den Track anhören zu können, musst Du vorher die Nutzung von Cookies akzeptieren.</p>'
    //     $controls += '<button class="blocked-content-open-cookie-btn">Cookies Verwalten</button>'
    //     $(index).replaceWith('<div class="blocked-content" data-placeholder-image="#">'+$controls+'</div>')
    // }

    // $(document).on('click','.blocked-content-open-cookie-btn',function(){
    //     showCookieBanner(true);
    // });

    // $(document).ready(function(){
    //     $user_made_cookie_selection = $.cookie('user_made_cookie_selection');
    //     if ($user_made_cookie_selection == "false") {
    //         // show banner if user has not accepted and has not declined cookies
    //         showCookieBanner(true);
    //     }
    //     else {
    //         // show banner if user has accepted or has declined cookies
    //         showCookieBanner(false);
    //     }
    // })

    // // COOKIE BANNER TOGGLE
    // function showCookieBanner( show ){
    //     if (show) {
    //         $('.cookie-banner-btn-open').attr('visible', 'false');
    //         $('.cookie-banner-dimmer').attr('visible', 'true');
    //     }
    //     else {
    //         $('.cookie-banner-dimmer').attr('visible', 'false');
    //         $('.cookie-banner-btn-open').attr('visible', 'true');
    //     }
    // }

    // $('.cookie-banner-btn-open').click( 
    //     function() {
    //         showCookieBanner(true);
    //         console.log('clicked open cookie banner');
    //     }
    // )

    // $('.cookie-banner-btn-close').click( 
    //     function() {
    //         showCookieBanner(false);
    //         console.log('close cookie banner clicked');
    //     }
    // )

})(jQuery)