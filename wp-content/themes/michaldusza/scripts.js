
(function($) {

    $(document).ready(function(){
        $('.nav__burger').on('click', function(){
            $(this).toggleClass('active');
            $('.nav__dropdown').toggleClass('active');
        })

        $(document).on('click', function(e){
            if(!$('.nav__burger-menu').is(e.target) && $('.nav__burger-menu').has(e.target).length === 0) {// if div is not target nor its descendant
                $('.nav__dropdown, .nav__burger').removeClass('active');
            }
        })

    });
})(jQuery);








