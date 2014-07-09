<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
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

    <link rel="stylesheet" href="static/css/radio.css">
    <script src="static/js/vendor/modernizr-2.6.2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="static/css/form/form.css"/>
    <!--<link rel="stylesheet" type="text/css" href="static/css/style.css"/>-->
    <link rel="stylesheet" type="text/css" href="static/css/jquery.editable-select.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/jquery-ui.css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>

    <script type="text/javascript" src="static/js/date.js"></script>
    <script type="text/javascript" src="static/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="static/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="static/js/form_all2.js?<?= mt_rand(1, 22222); ?>"></script>
    <script type="text/javascript" src="static/js/newformscripts.js"></script>
    <script type="text/javascript" src="static/js/discounts.js"></script>
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?113"></script>
    <? $this->renderPartial('/static/google_analitics');?>
    <script type="text/javascript">

        /* moreInfo blocks*/
        $('.moreTripInfo').live('click',function(e){
            var name = $(this).parents('.cell_block.background.clearfix').find('.departue').text(),
                alt_name = $(this).parents('.cell_block.clearfix').find('.block_info.right p:eq(1)').text(),
                popular = 'Популярное направление',
                in_search = 'Выдача',
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
            _gaq.push(['_trackEvent', 'Зарезервировать из найденых', 'Клик', name, 1]);
        });
        /* end reservation button from search results*/

        /* reservation button from search results via moreinfo*/
        $('.btn_popup .reserve').live('click',function(){
            var name = $(this).parents('.popup.order').find('.block_info.right p:eq(1)').text();
            _gaq.push(['_trackEvent', 'Зарезервировать из найденых через подробнее', 'Клик', name, 1]);
        });
        /* end reservation button from search results via moreinfo*/

        /* free reservation button click*/
        $('.booking_order').live('click',function(e){
            _gaq.push(['_trackEvent', 'Забронировать бесплатно', 'Нажатие', 'оформление заказа', 1]);
        });
        /* end free reservation button click*/

        /* reservation/order button click*/
        $('.order_ticket').live('click',function(e){
            _gaq.push(['_trackEvent', 'Рассписание/Бронь', 'Клик', 'рысскрытие формы', 1]);
        });
        /* end reservation/order button click*/

        /* search from Рассписание/Бронь button click*/
        $('.get_ticket').live('click',function(e){
            _gaq.push(['_trackEvent', 'Искать', 'Клик', $(this).closest('.popup.order').find('h3').text(), 1]);
        });
        /* end reservation/order button click*/

        /* slider hot tickets*/
        $('.row_town').live('click',function(e){
            var name = $(this).find('.promoStartCityName').val()+' '+$(this).find('.promoEndCityName').val();
            _gaq.push(['_trackEvent', 'Горячие направления', 'Клик', name, 1]);
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
    <script type="text/javascript">
        VK.init({apiId: 4408632, onlyWidgets: true});
    </script>

</head>
<body>
<div id="overlay" style="display: <?if(isset($_GET['page'])){?>block<?}else{?>none<?}?>;"></div>

<header style="background: url('/images/image_slider_1.png') no-repeat #ffe5b4;background-size: cover;background-size: contain;">
    <div class="wrap clearfix">
        <div id="overlay" style="display: none;"></div>
        <?php $this->renderPartial('/layouts/header');?>
        <div class="container">
            <div class="wrap">
                <? echo $content;?>
            </div>
        </div>
    </div>
</header>
<?php $this->renderPartial('/layouts/reservation_footer');?>
<?php $this->renderPartial('/layouts/footer');?>
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
        $('.datepicker').datepicker();
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
        });

        $('.order_ticket').on('click', function() {
            $('.close_popup').click();
            $('input#startCityId').val($(this).parent('div').find('input.promoStartCityId').val());
            $('input#from').val($(this).parent('div').find('input.promoStartCityName').val());
            $('input#endCityId').val($(this).parent('div').find('input.promoEndCityId').val());
            $('input#to').val($(this).parent('div').find('input.promoEndCityName').val());
            //$('input#tripDate').val($(this).parent('div').find('input.promoStartDate').val());
            //$('input#backTripDate').val($(this).parent('div').find('input.promoEndDate').val());
            $('html, body').animate({
                scrollTop: $(".tabs_menu").offset().top
            }, 2000);
            $('#tripDate').datepicker('show');
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
            $('.detail_toggle').click(function() {
                $(this).closest('.order_block').find('.page').slideToggle(300);
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