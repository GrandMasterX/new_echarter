<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Чартер <?php echo $inTarget; ?></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="/static/css/normalize.min.css">
    <link rel="stylesheet" href="/static/css/echarter_style.css">
    <link rel="stylesheet" href="/static/css/autocomplete.css">
    <link rel="stylesheet" href="/static/css/discount.css">

    <link rel="stylesheet" href="/static/css/radio.css">
    <script src="/static/js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="icon" type="image/png" href="/images/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/static/css/form/form.css"/>
    <!--<link rel="stylesheet" type="text/css" href="static/css/style.css"/>-->
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.editable-select.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/jquery-ui.css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>

    <script type="text/javascript" src="/static/js/date.js"></script>
    <script type="text/javascript" src="/static/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="/static/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="/static/js/form_all3.js?<?= mt_rand(1, 22222); ?>"></script>
    <script type="text/javascript" src="/static/js/newformscripts.js"></script>
    <script type="text/javascript" src="/static/js/discounts.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-51910940-1', 'auto', {'allowLinker': true});
        ga('require', 'linker');
        ga('linker:autoLink', ['echarter.com.ua', 'echarters.com.ua','www.echarter.com.ua','www.echarters.com.ua'] );
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-51910940-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
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
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?113"></script>
    <script type="text/javascript">
        VK.init({apiId: 4408632, onlyWidgets: true});
    </script>
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=xBqWQl2CYVfxlUl6gIv4bnnnJ*BK9sfNr/GdUltVma9xHG2wseU8ncntKFl83NlOBAOhT0LxIqaGU759Q*btEcs3Y8PFOIwvMPdq4cWauhCemV5Ynr51YKNlFkmqPRE3Aa*XIznUuYf95dwju9ILIaBIO3/yaoUVM88csrJ2qQs-';</script>
</head>