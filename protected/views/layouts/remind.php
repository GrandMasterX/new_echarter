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

    <link rel="stylesheet" href="/static/css/normalize.min.css">
    <link rel="stylesheet" href="/static/css/echarter_style.css">
    <link rel="stylesheet" href="/static/css/autocomplete.css">
    <link rel="stylesheet" href="/static/css/discount.css">

    <link rel="stylesheet" href="/static/css/radio.css">
    <script src="/static/js/vendor/modernizr-2.6.2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/static/css/form/form.css"/>
    <!--<link rel="stylesheet" type="text/css" href="static/css/style.css"/>-->
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.editable-select.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/skins/tango/skin.css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>

    <script type="text/javascript" src="/static/js/date.js"></script>
    <script type="text/javascript" src="/static/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="/static/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="/static/js/form_all2.js?<?= mt_rand(1, 22222); ?>"></script>
    <script type="text/javascript" src="/static/js/newformscripts.js"></script>
    <script type="text/javascript" src="/static/js/discounts.js"></script>
    <script type="text/javascript" src="/static/js/jquery.jcarousel.js"></script>
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="/static/js/vk.js?113"></script>
    <? $this->renderPartial('/static/google_analitics');?>
    <script type="text/javascript">
        $('.moreTripInfo ').live('click',function(e){
            var name = $(this).parents('.cell_block.background.clearfix').find('.departue').text(),
                alt_name = $(this).parents('.cell_block.clearfix').find('.block_info.right p:eq(1)').text(),
                popular = 'Популярное направление',
                in_search = 'Выдача';
            if(name != '') {
                _gaq.push(['_trackEvent', popular, 'Просмотр', name, 1]);
            } else {
                _gaq.push(['_trackEvent', in_search, 'Просмотр', alt_name, 1]);
            }
        });

        $('.reserve,.rezer.item.right.check_seats').click(function(){
            var name = $(this).parents('.cell_block.clearfix').find('.block_info.right p:eq(1)').text(),
                button_name = $(this).text();
            _gaq.push(['_trackEvent', button_name, 'Выбран', name, 1]);
        });

        $('.booking_order').click(function(e){
            _gaq.push(['_trackEvent', 'Забронировать бесплатно', 'Нажатие', 'оформление заказа', 1]);
        });

        $('.row_town').click(function(e){
            var name = $(this).find('.promoStartCityName').val()+' '+$(this).find('.promoEndCityName').val();
            _gaq.push(['_trackEvent', 'Горячие направления', 'Выбран', name, 1]);
        });

        $('#searchButton').click(function(){
            _gaq.push(['_trackEvent', 'Заказы', 'Поиск рейсов', $('#from').val()+' '+$('#to').val()+', дата: '+$('#tripDate').val()+'-'+$('#backTripDate').val(), 1]);
        });
    </script>

    <script type="text/javascript">
        VK.init({apiId: 4408632, onlyWidgets: true});
    </script>

</head>
<body>
<header>
    <div class="wrap clearfix">
        <?php $this->renderPartial('/layouts/header');?>
    </div>
</header>
<div id="content" style="background-color: #ffe5b4; padding-top: 20px;">
    <? echo $content;?>
</div>
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

        $('#there_trip,#back_trip').datepicker();

        $('.row_town').live('click', function(e) {
            var promoStartCityName = $(this).find('input.promoStartCityName').val();
            var promoStartCityId = $(this).find('input.promoStartCityId').val();
            var promoEndCityName = $(this).find('input.promoEndCityName').val();
            var promoEndCityId = $(this).find('input.promoEndCityId').val();
            var promoStartDate = $(this).find('input.promoStartDate').val();
            var promoEndDate = $(this).find('input.promoEndDate').val();


            $('input#startCityId').val(promoStartCityId);
            $('input#from').val(promoStartCityName).addClass('check_out');
            $('input#endCityId').val(promoEndCityId);
            $('input#to').val(promoEndCityName).addClass('check_out');
            $('input#tripDate').val(promoStartDate);
            $('input#backTripDate').val(promoEndDate);
        });

        $('.order_ticket').on('click', function() {
            $(this).parent('div').find('.elaboration').toggle();
            /*$('.close_popup').click();
             $('input#startCityId').val($(this).parent('div').find('input.promoStartCityId').val());
             $('input#from').val($(this).parent('div').find('input.promoStartCityName').val());
             $('input#endCityId').val($(this).parent('div').find('input.promoEndCityId').val());
             $('input#to').val($(this).parent('div').find('input.promoEndCityName').val());
             $('input#tripDate').val($(this).parent('div').find('input.promoStartDate').val());
             $('input#backTripDate').val($(this).parent('div').find('input.promoEndDate').val());
             $('html, body').animate({
             scrollTop: $(".tabs_menu").offset().top
             }, 2000);
             $('#tripDate').datepicker('show');*/
            //$('.get_ticket').
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
                history.pushState(stateObj, $(this).attr('trip'), 'page/'+$(this).attr('trip'));
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

        $('.check_seats .reserve').live('click', function() {
            $(this).closest('div.popup.order').hide();
        })

        $('#mycarousel').jcarousel({
            auto: 5,
//				wrap: 'last',
            wrap: 'both',
            vertical : true,
//				size : 5,
            scroll : 1
        });

    });
</script>
</body>
</html>