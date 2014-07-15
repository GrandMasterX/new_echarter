<div id="content"></div>
<footer>
    <div class="wrap clearfix">
        <div class="clearfix">
            <div class="list_menu left">
                <div class="left">
                    <div class="title_footer">регулярные рейсы</div>
                    <ul class="clearfix left">
                        <li><a href="/flights/prague.php">Прага</a></li>
                        <li><a href="/regular-flights.php">Ереван</a></li>
                        <li><a href="/flights/sofia.php">София</a></li>
                        <li><a href="/flights/london.php">Лондон</a></li>
                        <li><a href="/flights/moscow.php">Москва</a></li>
                    </ul>
                    <ul class="clearfix left" style="border-right: 1px dotted #fff;">
                        <li><a href="/regular-flights.php">Стамбул</a></li>
                        <li><a href="/flights/baku.php">Баку</a></li>
                    </ul>
                </div>
                <div class="left">
                    <div class="title_footer">чартерные рейсы</div>
                    <ul class="clearfix left">
                        <li><a href="/austria.php">Австрию</a></li>
                        <li><a href="/salzburg.php">Зальцбург</a></li>
                        <li><a href="/finland.php">Финляндия</a></li>
                        <li><a href="/kuusamo.php">Куусамо</a></li>
                        <li><a href="/kittila.php">Киттила</a></li>
                    </ul>
                    <ul class="clearfix left">
                        <li><a href="/bulgaria.php">Болгария</a></li>
                        <li><a href="/sofia.php">София</a></li>
                        <li><a href="/slovakia.php">Словакия</a></li>
                        <li><a href="/poprad.php">Попрад</a></li>
                        <li><a href="/punta-cana.php">Пунта-Кана</a></li>
                    </ul>
                    <ul class="clearfix left">
                        <li><a href="/egypt.php">Египет</a></li>
                        <li><a href="/hurghada.php">Хургада</a></li>
                        <li><a href="/sharm-el-sheikh.php">Шарм-эль-Шейх</a></li>
                        <li><a href="/sharjah.php">Шарджа</a></li>
                        <li><a href="/dominicana.php">Доминикана</a></li>
                    </ul>
                    <ul class="clearfix left">
                        <li><a href="/india.php">Индия</a></li>
                        <li><a href="/goa.php">Гоа</a></li>
                        <li><a href="/sri-lanka.php">Шри-Ланка</a></li>
                        <li><a href="/colombo.php">Коломбо</a></li>
                        <li><a href="/thailand.php">Таиланд</a></li>
                    </ul>
                    <ul class="clearfix left">
                        <li><a href="/bangkok.php">Бангкок</a></li>
                        <li><a href="/dubai.php">Дубай</a></li>
                        <li><a href="/emirates.php">ОАЭ</a></li>
                        <li><a href="/flights/varna.php">Варна</a></li>
                        <li><a href="/flights/pula.php">Пула</a></li>
                    </ul>
                    <ul class="clearfix left">
                        <li><a href="/flights/split.php">Сплит</a></li>
                        <li><a href="/flights/larnaca.php">Ларнака</a></li>
                        <li><a href="/flights/tel-aviv.php">Тель-Авив</a></li>
                        <li><a href="/flights/batumi.php">Батуми</a></li>
                        <li><a href="/flights/kanarskie-ostrova.php">Канарские острова</a></li>
                    </ul>
                </div>
            </div>
            <div class="logo_footer right">
                <a href="/" class="fot_logo"><span></span>ECHARTER</a>
            </div>
        </div>
        <div class="copy" style="text-align: right; font-size: 11px; color: #fff; line-height: 11px;">© 2014 echarter.com.ua All rights reserved.</div>
    </div>
</footer>
<script>
    $.fn.alignCenterScreen = function() {
        this.css("position", "absolute");
        if(this.outerHeight() == 1) {
            this.css("top", ($(window).height() - 621) / 2 + $(window).scrollTop()+ "px");
        } else {
            this.css("top", ($(window).height() - this.outerHeight()) / 2 + $(window).scrollTop()+ "px");
        }

        //this.css("left", ($(window).width() - this.outerWidth()) / 2 + $(window).scrollLeft() + "px");
        //this.css('display','block');
        return this
    };
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

        $('.dep_date').datepicker().change(function () {
            $('.dep_date').val($(this).val());
        });
        $('.ret_date').datepicker().change(function () {
            $('.ret_date').val($(this).val());
        });

        $('.row_town').live('click', function(e) {
            var promoStartCityName = $(this).find('input.promoStartCityName').val();
            var promoStartCityId = $(this).find('input.promoStartCityId').val();
            var promoEndCityName = $(this).find('input.promoEndCityName').val();
            var promoEndCityId = $(this).find('input.promoEndCityId').val();


            $('input#startCityId').val(promoStartCityId);
            $('input#from').val(promoStartCityName).addClass('check_out');
            $('input#endCityId').val(promoEndCityId);
            $('input#to').val(promoEndCityName).addClass('check_out');
            //$('input#tripDate').val(promoStartDate);
            //$('input#backTripDate').val(promoEndDate);
        });

        $('.order_ticket').on('click', function() {
            $(this).parent('div').find('.elaboration').toggle();
        });

        $('.get_ticket').on('click',function(){
            if($(this).closest('.elaboration').find('.dep_date').val() =='') {
                $(this).closest('.elaboration').find('.dep_date').css('border','1px solid red')
                $(this).closest('.popup_wrap').find('.footer_popup').html('<span style="margin: 0 0 0 20px;color: red;">Выберите хотя бы одну дату</span>');
                return false;
            } else {
                $('input#startCityId').val($(this).parents('.popup').find('.hidden_data input.promoStartCityId').val());
                $('input#from').val($(this).parents('.popup').find('.hidden_data input.promoStartCityName').val());
                $('input#endCityId').val($(this).parents('.popup').find('.hidden_data input.promoEndCityId').val());
                $('input#to').val($(this).parents('.popup').find('.hidden_data input.promoEndCityName').val());
                $('input#tripDate').val($(this).parents('.popup').find('.dep_date').val());
                $('input#backTripDate').val($(this).parents('.popup').find('.ret_date').val());
                $('.close_popup').click();
                $(this).closest('.popup_wrap').find('.footer_popup').html('');
                $('html, body').animate({
                    scrollTop: $(".tabs_menu").offset().top
                }, 2000);
                $('#searchButton').click();
            }
        });

        $('img.del').live('click',function(){
            $(this).hide().closest('div').find('input').val('');
        });

        $('.menu_cont a').click(function() {
            var _num = $(this).data('num');
            $('.menu_cont .block').removeClass('active');
            $(this).parent().addClass('active');
        });

        $('#tripsResultContainer a.moreTripInfo').live('click', function(){
            $(this).parent('div').find('div.popup').show();
            $(this).parent('div').find('div.popup').alignCenterScreen();
            $('body').find('#overlay').show();
        });

        $('.populars a.moreTripInfo').live('click', function(){
            $('body').find('#overlay').show();
            if($(this).attr('trip') !='') {
                var stateObj = { page: $(this).attr('trip') };
                history.pushState(stateObj, $(this).attr('trip'), 'page/'+$(this).attr('trip'));
            }
            $(this).parent('div').find('div.popup.order').show();
            $('div.popup.order').alignCenterScreen();
        });

        $('.check_seats').live('click', function() {
            $(this).parent('div').find('.check_seats_container').show();
            $('body').find('#overlay').show();
        })

        $('.close_popup,#overlay,.close_popup_block.right').live('click',function() {
            $('#overlay').hide();
            $('.close_popup').closest('.popup').hide();
            $('.close_popup_block').parent('div').hide();
            if(window.history.state != null && window.history.state.page != null)
                window.history.go(-1);
        });

        $('.lk_office li span').click(function(e) {
            var _target = e.target;
            if (!$(_target).parent().is('a.top_menu_item')) {
                return;
            }
            if ($(_target).closest('li').hasClass('active')) {
                $('.lk_office li').removeClass('active');
            } else {
                $('.lk_office li').removeClass('active');
                $(_target).closest('li').addClass('active');
            }
        });

        $(document).ready(function() {
            $('.detail_toggle').live('click',function() {
                $(this).closest('.row_block').find('.page').slideToggle(300);
            });
        });

        $(document).click(function(event) {
            if(!$(event.target).closest('.top_menu_item').length) {
                if($('.top_menu_item').parent('li').hasClass('active') && !$(event.target).parents('.block_login').length) {
                    $('.top_menu_item').parent('li').removeClass('active');
                }
            }
        });

        $('.check_seats .reserve').live('click', function() {
            $(this).closest('div.popup.order').hide();
        })


    });
</script>
</body>
</html>