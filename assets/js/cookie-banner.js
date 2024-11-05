(function($){
    // COOKIE BANNER
    $('.btn-cookie-accept').click( 
        function(){
            showCookieBanner(false);
        }
    )
    $('.btn-cookie-decline').click( 
        function(){
            showCookieBanner(false);
        }
    )

    $('.btn-cookie-settings').click( 
        function() {
            var $cookie_text = $('.cookie-banner-text');
            $cookie_text.attr('visible', 'hidden');

            var $cookie_settings = $('.cookie-banner-settings');
            $cookie_settings.attr('visible', 'visible');

            $(this).attr('visible', 'hidden');
            var $cookie_btn_back = $('.btn-cookie-back');
            $cookie_btn_back.attr('visible', 'visible')
        }
    )

    $('.btn-cookie-back').click( 
        function() {

            var $cookie_text = $('.cookie-banner-text');
            $cookie_text.attr('visible', 'visible');

            var $cookie_settings = $('.cookie-banner-settings');
            $cookie_settings.attr('visible', 'hidden');

            $(this).attr('visible', 'hidden');
            var $cookie_btn_back = $('.btn-cookie-settings');
            $cookie_btn_back.attr('visible', 'visible')
        }
    )

    $('iframe').each( setBlockAttributes )
    function setBlockAttributes( index ){
        $str = $(this).attr("src")
        if ($str.indexOf("youtube") >= 0) {
            $(this).attr("class", "is-provider-youtube")
        }
        if ($str.indexOf("soundcloud") >= 0) {
            $(this).attr("class", "is-provider-soundcloud")
        }
        $(this).removeAttr("width")
        $(this).removeAttr("height")
        $(this).attr("style", "width: 100%; aspect-ratio: 16/9;")
    }

    // BLOCK YOUTUBE CONTENT
    $('.is-provider-youtube').each( blockYoutubeElement )
    function blockYoutubeElement( index ){
        $user_accepted_cookies = $.cookie('user_accepted_cookies');
        if ($user_accepted_cookies == "true" ) return;
        setYoutubePlaceholder(this);
    }

    function setYoutubePlaceholder( index ) {
        $controls = '<p class="blocked-title">Hier wird ein Youtube-Video blockiert.</p>'
        $controls += '<p>Um Dir das Youtube Video anschauen zu können, musst Du vorher Deine Einwilligung zur Nutzung von Cookies geben.</p>'
        $controls += '<button class="blocked-content-open-cookie-btn">Cookies Verwalten</button>'
        $(index).replaceWith('<div class="blocked-content" data-placeholder-image="#">'+$controls+'</div>')
    }

    // BLOCK SOUNDCLOUD CONTENT
    $('.is-provider-soundcloud').each( blockSoundcloudElement )
    function blockSoundcloudElement( index ){
        $user_accepted_cookies = $.cookie('user_accepted_cookies');
        if ($user_accepted_cookies == "true" ) return;
        setSoundcloudPlaceholder(this);
    }

    function setSoundcloudPlaceholder( index ) {
        $controls = '<p class="blocked-title">Hier wird ein Soundcloud-Track blockiert.</p>'
        $controls += '<p>Um Dir den Track anhören zu können, musst Du vorher die Nutzung von Cookies akzeptieren.</p>'
        $controls += '<button class="blocked-content-open-cookie-btn">Cookies Verwalten</button>'
        $(index).replaceWith('<div class="blocked-content" data-placeholder-image="#">'+$controls+'</div>')
    }

    $(document).on('click','.blocked-content-open-cookie-btn',function(){
        showCookieBanner(true);
    });

    $(document).ready(function(){
        $user_made_cookie_selection = $.cookie('user_made_cookie_selection');
        if ($user_made_cookie_selection == "false") {
            // show banner if user has not accepted and has not declined cookies
            showCookieBanner(true);
        }
        else {
            // show banner if user has accepted or has declined cookies
            showCookieBanner(false);
        }
    })

    // COOKIE BANNER TOGGLE
    function showCookieBanner( show ){
        if (show) {
            $('.cookie-banner-btn-open').attr('visible', 'false');
            $('.cookie-banner-dimmer').attr('visible', 'true');
        }
        else {
            $('.cookie-banner-dimmer').attr('visible', 'false');
            $('.cookie-banner-btn-open').attr('visible', 'true');
        }
    }

    $('.cookie-banner-btn-open').click( 
        function() {
            showCookieBanner(true);
            console.log('clicked open cookie banner');
        }
    )

    $('.cookie-banner-btn-close').click( 
        function() {
            showCookieBanner(false);
            console.log('close cookie banner clicked');
        }
    )

})(jQuery)