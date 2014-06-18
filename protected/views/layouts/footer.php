<footer>
    <div class="wrap">
        <div id="back-top" style="display: block;">
            <a href="#"><span></span></a>
        </div>
    </div>
</footer>

<script>

    jQuery.fn.topLink = function(settings) {
        settings = jQuery.extend({
            min: 1,
            fadeSpeed: 200,
            ieOffset: 50
        }, settings);
        return this.each(function() {
            //listen for scroll
            var el = $(this);
            el.css('display','none'); //in case the user forgot
            $(window).scroll(function() {
                //stupid IE hack
                if(!jQuery.support.hrefNormalized) {
                    el.css({
                        'position': 'absolute',
                        'top': $(window).scrollTop() + $(window).height() - settings.ieOffset
                    });
                }
                if($(window).scrollTop() >= settings.min)
                {
                    el.fadeIn(settings.fadeSpeed);
                }
                else
                {
                    el.fadeOut(settings.fadeSpeed);
                }
            });
        });
    };
    $(document).ready(function() {
        //set the link
        $('#back-top').topLink({
            min: 400,
            fadeSpeed: 500
        });
        //smoothscroll
        $('#back-top').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $("#top").offset().top
            }, 2000);
        });


        $('.row_town').live('click', function(e) {
            var promoStartCityName = $(this).find('input.promoStartCityName').val();
            var promoStartCityId = $(this).find('input.promoStartCityId').val();
            var promoEndCityName = $(this).find('input.promoEndCityName').val();
            var promoEndCityId = $(this).find('input.promoEndCityId').val();
            var promoStartDate = $(this).find('input.promoStartDate').val();
            var promoEndDate = $(this).find('input.promoEndDate').val();

            $('input#startCityId').val(promoStartCityId);
            $('input#from').val(promoStartCityName);
            $('input#endCityId').val(promoEndCityId);
            $('input#to').val(promoEndCityName);
            $('input#tripDate').val(promoStartDate);
            $('input#backTripDate').val(promoEndDate);
            $('input#searchButton').click();


        });

    });

    $(document).ready(function() {
        $('img.del').live('click',function(){
            $(this).hide().closest('div').find('input').val('');
        });
        $('.menu_cont a').click(function() {
            var _num = $(this).data('num');
            $('.menu_cont .block').removeClass('active');
            $(this).parent().addClass('active');
        });
        $('a.moreTripInfo').live('click', function(){
            $('body').find('#overlay').show();
            $(this).closest('div').find('div.popup.order').show();
            return false;
        });
        $('.close_popup').live('click', function(){
            $('#overlay').hide();
            $(this).closest('.popup').hide();
        });
    });
</script>