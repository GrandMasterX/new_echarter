<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Чартеры. Авиабилеты и спецпредложения на чартерные рейсы - Echarter.com.ua</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="static/css/normalize.min.css">
    <link rel="stylesheet" href="static/css/echarter_style.css">
    <link rel="stylesheet" href="static/css/autocomplete.css">
    <link rel="stylesheet" href="static/css/discount.css">
    <link rel="icon" type="image/png" href="/images/img/favicon.ico" />
    <link rel="stylesheet" href="static/css/radio.css">
    <script src="static/js/vendor/modernizr-2.6.2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="static/css/form/form.css"/>
    <!--<link rel="stylesheet" type="text/css" href="static/css/style.css"/>-->
    <link rel="stylesheet" type="text/css" href="static/css/jquery.editable-select.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/jquery-ui.css"/>
    <link rel="stylesheet" href="static/css/wSelect_search.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>

    <script type="text/javascript" src="static/js/date.js"></script>
    <script type="text/javascript" src="static/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="static/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="static/js/form_all3.js?<?= mt_rand(1, 22222); ?>"></script>
    <script type="text/javascript" src="static/js/newformscripts.js"></script>
    <script type="text/javascript" src="static/js/wSelect.js"></script>
    <? $this->renderPartial('/static/google_analitics');?>
    <script type="text/javascript" src="static/js/discounts.js"></script>
    <script type="text/javascript">

        /* moreInfo blocks*/
        $('.moreTripInfo').live('click',function(e){
            var name = $(this).parents('.cell_block.background.clearfix').find('.departue').text(),
                alt_name = $(this).parents('.cell_block.clearfix').find('.block_info.right p:eq(1)').text(),
                popular = 'Популярное направление',
                in_search = 'Поиск',
                more = 'Клик';

            if(name != '') {
                _gaq.push(['_trackEvent', popular, more, name, 1]);
            } else {
                _gaq.push(['_trackEvent', in_search, more, alt_name, 1]);
            }
        });
        /* end moreInfo blocks*/

        /* reservation button from search results*/
        $('.rezer.item.right.check_seats').live('click',function(){
            var name = $(this).parents('.cell_block.clearfix').find('.block_info.right p:eq(1)').text();
            _gaq.push(['_trackEvent', 'Забронировать из поиска', 'Клик', name, 1]);
        });
        /* end reservation button from search results*/

        /* reservation button from search results via moreinfo*/
        $('.btn_popup .reserve').live('click',function(){
            var name = $(this).parents('.popup.order').find('.block_info.right p:eq(1)').text();
            _gaq.push(['_trackEvent', 'Зарезервировать из найденых через подробнее', 'Клик', name, 1]);
        });
        /* end reservation button from search results via moreinfo*/

        /* free reservation button click*/
        //$('.booking_order').live('click',function(e){
        _gaq.push(['_trackEvent', 'Забронировать бесплатно конец', 'Клик', 'оформление заказа', 1]);
        //});
        /* end free reservation button click*/

        /* free reservation button click*/
        $('.reservation_form').find('.btn').live('click',function(e){
            _gaq.push(['_trackEvent', 'Поиск из выкуп заказа', 'Клик', 'поиск', 1]);
        });
        /* end free reservation button click*/

        /* reservation/order button click*/
        $('.order_ticket').live('click',function(e){
            _gaq.push(['_trackEvent', 'Рассписание/Бронь', 'Клик', 'рысскрытие формы', 1]);
        });
        /* end reservation/order button click*/

        /* search from Рассписание/Бронь button click*/
        $('.get_ticket').live('click',function(e){
            _gaq.push(['_trackEvent', 'Поиск из подробнее в популярных', 'Клик', $(this).closest('.popup.order').find('h3').text(), 1]);
        });
        /* end reservation/order button click*/

        /* slider hot tickets*/
        $('.row_town').live('click',function(e){
            var name = $(this).find('.promoStartCityName').val()+' '+$(this).find('.promoEndCityName').val();
            _gaq.push(['_trackEvent', 'Спецпредложения лето', 'Клик', name, 1]);
        });
        /* end slider hot tickets*/

        /* search button click*/
        $('#searchButton').live('click',function(){
            _gaq.push(['_trackEvent', 'Поиск рейсов', 'Клик', $('#from').val()+' '+$('#to').val()+', дата: '+$('#tripDate').val()+'-'+$('#backTripDate').val(), 1]);
        });
        /* end search button click*/

        /* buy throw visa/mastercard */
        $('.buy_order_alfa').live('click',function(){
            _gaq.push(['_trackEvent', 'VISA / MasterCard', 'Клик', 'Покупка через Альфабанк', 1]);
        });
        $('.buy_order').live('click',function(){
            _gaq.push(['_trackEvent', 'VISA / MasterCard', 'Клик', 'Покупка через Приватбанк', 1]);
        });
        /* end buy throw visa?mastercard */

        /*  Скачать Лист Бронирования*/
        $('.info_date_to_pay').live('click',function(){
            _gaq.push(['_trackEvent', 'Скачать Лист Бронирования', 'Клик','', 1]);
        });
        /* end Скачать Лист Бронирования*/

        /*  Оплатить Visa / MasterCard*/
        $('.btn.visa').live('click',function(){
            _gaq.push(['_trackEvent', 'Оплатить Visa / MasterCard', 'Клик','', 1]);
        });
        /* end Оплатить Visa / MasterCard*/

        /*  Другие способы оплаты*/
        $('.btn.morepvays').live('click',function(){
            _gaq.push(['_trackEvent', 'Другие способы оплаты', 'Клик','', 1]);
        });
        /* end Другие способы оплаты*/
    </script>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=xBqWQl2CYVfxlUl6gIv4bnnnJ*BK9sfNr/GdUltVma9xHG2wseU8ncntKFl83NlOBAOhT0LxIqaGU759Q*btEcs3Y8PFOIwvMPdq4cWauhCemV5Ynr51YKNlFkmqPRE3Aa*XIznUuYf95dwju9ILIaBIO3/yaoUVM88csrJ2qQs-';</script>
</head>
<body>
<div id="overlay" style="display: none;"></div>

<header>
    <div class="wrap clearfix">
        <?php $this->renderPartial('/layouts/header');?>
        <? echo $content;?>
    </div>
</header>
<div class="popular_container">
    <div class="wrap">
        <div id="loader" style="position:relative;z-index:1000;top:-1px;">
        </div>
        <div id="tripsResultContainer" style="display: none;"></div>
        <div class="block clearfix">
            <div class="row_block left maintext" style="background-color: #fff6c6;">
                <h3 style="text-align:left;">Контакты</h3>
                <div style="min-height:273px;">
                    <center>
                        <img src="images/contacts.png" class="left" style="padding-right: 40px;"/>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5080.891845751276!2d30.476464896830034!3d50.45142042535276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce8650d8309f%3A0xa5c30c1d222c114c!2z0LLRg9C7LiDQqNC-0LvRg9C00LXQvdC60LAsIDHQkQ!5e0!3m2!1sru!2sru!4v1403872434397" width="450" height="300" frameborder="0" style="border:0"></iframe>
                        <!--<div class="form right" style="margin-right: 50px;">
                            <form class="clearfix" id="register-form" action="/register" method="post">
                                <div class="item">
                                    <label class="feedback">ФИО</label>
                                    <input placeholder="name" class="name_user" name="name_user" id="name_user" type="text">
                                </div>
                                <div class="item">
                                    <label class="feedback">Електронная почта:</label>
                                    <input placeholder="email" class="enter_email" name="enter_email" id="enter_email" type="text">
                                </div>
                                <div class="item">
                                    <label class="feedback" style="margin-bottom: 15px;">Електронная почта:</label>
                                    <select name="name[type1]" class="filter_price" size="4">
                                        <option selected="" value="">----------Выберите группу----------</option>
                                        <option value="2">Price</option>
                                        <option value="3">Price</option>
                                        <option value="3">Price</option>
                                    </select>
                                </div>
                                <div class="item">
                                    <textarea name="comment" placeholder="Комментарий"></textarea>
                                </div>
                                <div class="btn clearfix right">
                                    <input class="enter_sign" value="Отправить" id="sign" type="submit" name="yt0">
                                </div>
                            </form>
                        </div>-->
                    </center>
                </div>
                <br><br>

                Контакты:<br>

                При бронировании билетов на сайте Вы получите по e-mail - контакты службы поддержки.
                Если у Вас возникли вопросы по работе с сайтом, можете перезвонить специалисту авиационного отдела, по телефону: +38 (050) 416-42-80.


                <br>
                <br>

            </div>
        </div>
    </div>
</div>
<?php $this->renderPartial('/layouts/footer');?>
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

        $('.order_ticket').on('click', function() {
            $('.close_popup').click();
            $('input#startCityId').val($(this).parent('div').find('input.promoStartCityId').val());
            $('input#from').val($(this).parent('div').find('input.promoStartCityName').val());
            $('input#endCityId').val($(this).parent('div').find('input.promoEndCityId').val());
            $('input#to').val($(this).parent('div').find('input.promoEndCityName').val());
            $('input#tripDate').val($(this).parent('div').find('input.promoStartDate').val());
            //$('input#backTripDate').val($(this).parent('div').find('input.promoEndDate').val());
            $('input#searchButton').click();
            $('html, body').animate({
                scrollTop: $(".tabs_menu").offset().top
            }, 2000);
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
            $(this).parent('div').find('div.popup.order').show();
            $('body').find('#overlay').show();
        });

        $('.populars a.moreTripInfo').live('click', function(){
            $(this).parent('div').find('div.popup.order').show();
            $('body').find('#overlay').show();
            if($(this).attr('trip') !='') {
                var stateObj = { page: $(this).attr('trip') };
                history.pushState(stateObj, $(this).attr('trip'), '?page='+$(this).attr('trip'));
            }
        });

        $.fn.wSelect.defaults.changeWidth = false;
        $('select:not(".transport_details")').wSelect();

        $('.check_seats').live('click', function() {
            $(this).parent('div').find('.check_seats_container').show();
            $('body').find('#overlay').show();
        })

        $('.close_popup,#overlay').live('click',function() {
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
            $('.detail_toggle').click(function() {
                $(this).parent().children('.page').slideToggle(300);
            });
        });

        $(document).click(function(event) {
            if(!$(event.target).closest('.top_menu_item').length) {
                if($('.top_menu_item').parent('li').hasClass('active') && !$(event.target).parents('.block_login').length) {
                    $('.top_menu_item').parent('li').removeClass('active');
                }
            }
        });

    });
</script>
</body>


</html>