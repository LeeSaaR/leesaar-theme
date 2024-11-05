(function($){
    // FAQ-ITEM CONTROL
    $('.faq-container').click(
        function(){
            if ($(this).hasClass('revealed')) {
                // hide
                $(this).find('.faq-answer').animate( {opacity: '0'}, 150 ).slideToggle(200);
                $(this).removeClass('revealed');
            }
            else {
                // show
                $(this).find('.faq-answer').slideToggle(200).animate( {opacity: '1'}, 150 );
                $(this).addClass('revealed');
            }
        }
    );
})(jQuery)