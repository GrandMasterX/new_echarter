<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
<body>
<div id="overlay" style="display:none;"></div>
<header>
<div class="wrap clearfix">
<div class="wrap_top clearfix">
    <a name="top" id="top"></a>
    <div class="top_header clearfix right">
        <div class="dictum left">Акционные авиабилеты</div>
        <div class="lk_office right">
            <ul class="clearfix">
                <li><a href="/reservation">Выкуп заказа</a></li>
                <li>
                    <a class="top_menu_item" href="javascript:;">
                        <span>Личный кабинет</span>
                        <span class="ico"></span>
                    </a>
                    <div class="popup_login clearfix">
                        <div class="top"></div>
                        <div class="block_login clearfix">
                            <div class="social left">
                                <h5>Войти с помощью социальных сетей</h5>
                                <ul class="clearfix">
                                    <li>
                                        <a href="/site/oauth?provider=Google" class="gl"></a>
                                    </li>
                                    <li>
                                        <a href="/site/oauth?provider=Facebook" class="fb"></a>
                                    </li>

                                </ul>
                                <h5>Регистрация</h5>
                                <p>Зарегистрированные пользователи получают возможность заказывать быстрее и удобнее. Регистрация бесплатная и занимает не более 1 минуты Вашего времени.</p>
                            </div>
                            <div class="form_block right">
                                <div class="form">
                                    <h5>Вход в личный кабинет:</h5>
                                    <form class="clearfix" id="register-form" action="/register" method="post"><div class="item">
                                            <label>Электронная почта:</label>
                                            <input placeholder="email" class="enter_email" name="enter_email" id="enter_email" type="text">    </div>
                                        <div class="item">
                                            <label>Пароль:</label>
                                            <input placeholder="password" class="enter_pass" name="enter_pass" id="enter_pass" type="text">    </div>
                                        <div class="btn clearfix" style="margin-top: 16px;">
                                            <input class="enter_sign" value="Вход" id="sign" type="submit" name="yt0">        <a class="forgot" href="#">Забыли пароль?</a>
                                        </div>
                                    </form>                    </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="menu_header clearfix">
    <a href="/" class="logo_header left">
        <span></span>ECHARTER
    </a>
    <div class="nav left">
        <ul class="clearfix">
            <li><a href="/" class="first">Главная</a></li>
            <li><a href="/about">О проекте</a></li>
            <li><a href="/contacts">Контакты</a></li>
        </ul>
    </div>
    <div class="number">
        <img alt="" src="/static/img/phone_big_1.png">
    </div>
</div>
<div class="container page_2" style="margin: 0px auto;text-align: center;">
    <div class="wrap" style="padding: 40px 0px 5px 90px;">
        <div class="container_form clearfix new">
            <form class="clearfix">
                <div class="element from pointCheck">
                    <label>Откуда</label>
                    <input id="from" type="text" name="from" class="town" placeholder="Введите страну или город" value="Киев, Украина">
                    <input id="startCityId" type="hidden" name="startCityId" class="hid_city_id" value="928F32EDA461026FE040A8C01E02395E">
                    <div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
                </div>
                <div class="element to pointCheck">
                    <label>Куда</label>
                    <input id="to" type="text" name="to" class="town" placeholder="Введите страну или город" value="<? echo $toCity;?>">
                    <input id="endCityId" type="hidden" name="endCityId" class="hid_city_id" value="<? echo $toCityId?>">
                    <div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
                </div>


                <div class="element dep item_1 clearfix">
                    <label>Дата отправления</label>
                    <input type="text" id="tripDate" name="dep_date" class="dep_date hdata contacts" placeholder="--/--/----" value="">
                    <img src="/images/data-check.png" alt="" class="data-check">
                </div>

                <div class="element ret item_1  clearfix">
                    <label>Обратно</label>
                    <input type="text" name="ret_date" id="backTripDate" class="ret_date hdata contacts" placeholder="--/--/----" value="">
                    <img src="/images/data-check.png" alt="" class="data-check del contacts">
                </div>

                <div class="block buttons right">
                    <input id="searchButton" class="sbm" type="submit" value="Поиск рейсов" style=" margin-right: 76px; margin-top: -7px; margin-bottom: 12px; ">
                </div>

                <div class="selectblock" style=" position: absolute; margin: 0px; margin-top: 39px; ">
                    <input type="hidden" class="TiketsCounter input" id="ticketAmount" value="1">
                    <span class="ticketCountNew">1</span>
                    <span id="passengerTitle"> Пассажир</span>
                </div>
                <div class="disocuntBlock" style="margin-left: 0px; margin-top: 69px;">
                    <input type="hidden" id="totalTicketsAmount" value="1">
                    <input type="hidden" id="discTicketsAmount" value="0">
                    <div class="countFrameSet" style="border-bottom: 1px solid grey;margin-bottom: 7px;">
                        <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                        <div class="ask-content" style="margin-top:-76px;"><div>Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.</div></div>
                        Взрослые<br>
                        <span>(25-60 лет)</span>
                        <div class="countFrame">
                            <div class="countFrameLeft" id="discGroupe0" data-target="disc0"> </div>
                            <input type="text" value="1" class="birthday" id="discGroupe0" maxlength="2" readonly="">
                            <div class="countFrameRight" id="discGroupe0" data-target="disc0"> </div>
                        </div>
                    </div>
                    <div style="color: grey;font-size: 13px;padding-left: 17px;">Возможные скидки</div>
                    <div class="countFrameSet" style="">
                        <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                        <div class="ask-content" style="margin-top:-76px;"><div>Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.</div></div>
                        Дети<br>
                        <span>(2-12 лет)</span>
                        <div class="countFrame">
                            <div class="countFrameLeft" id="discGroupe1" data-target="disc1"> </div>
                            <input type="text" value="0" class="birthday" id="discGroupe1" maxlength="2" readonly="">
                            <div class="countFrameRight" id="discGroupe1" data-target="disc1"> </div>
                        </div>
                    </div>
                    <div class="countFrameSet" style="">
                        <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                        <div class="ask-content" style="margin-top:-76px;"><div>Если вы планируете путешествовать с маленькими детьми, рекомендуем внести данные, благодаря которым система автоматически проверит наличие специальных тарифов (без места) на выбранном вами маршруте. Обратите внимание на необходимость выбора двух и более пассажиров для получения спец. тарифа. Вне зависимости от тарифа система предложит выбрать место на карте транспортного средства; возможно, оно будет свободно.</div></div>
                        Дети без места<br>
                        <span>(2-5 лет)</span>
                        <div class="countFrame">
                            <div class="countFrameLeft" id="discGroupe2" data-target="disc2"> </div>
                            <input type="text" value="0" class="birthday" id="discGroupe2" maxlength="2" readonly="">
                            <div class="countFrameRight" id="discGroupe2" data-target="disc2"> </div>
                        </div>
                    </div>
                    <div class="countFrameSet" style="">
                        <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                        <div class="ask-content" style="margin-top:-76px;"><div>Некоторые перевозчики предоставляют скидки для студентов. Данный функционал разработан для возможности использовать скидки на проезд студентами. Для проверки наличия тарифа на выбраном вами направлении достаточно внести номер студенческого билета, и система автоматически проверит наличие студенческой скидки и подберет наиболее подходящий тариф.</div></div>
                        Студенты<br>
                        <span>(16-25 лет)</span>
                        <div class="countFrame">
                            <div class="countFrameLeft" id="discGroupe3" data-target="disc3"> </div>
                            <input type="text" value="0" class="birthday" id="discGroupe3" maxlength="2" readonly="">
                            <div class="countFrameRight" id="discGroupe3" data-target="disc3"> </div>
                        </div>
                    </div>
                    <div class="countFrameSet" style="">
                        <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                        <div class="ask-content" style="margin-top:-76px;"><div>Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.</div></div>
                        Молодежь<br>
                        <span>(12-25 лет)</span>
                        <div class="countFrame">
                            <div class="countFrameLeft" id="discGroupe4" data-target="disc4"> </div>
                            <input type="text" value="0" class="birthday" id="discGroupe4" maxlength="2" readonly="">
                            <div class="countFrameRight" id="discGroupe4" data-target="disc4"> </div>
                        </div>
                    </div>
                    <div class="countFrameSet" style="">
                        <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                        <div class="ask-content" style="margin-top:-76px;"><div>Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.</div></div>
                        Пожилые<br>
                        <span>(60+ лет)</span>
                        <div class="countFrame">
                            <div class="countFrameLeft" id="discGroupe5" data-target="disc5"> </div>
                            <input type="text" value="0" class="birthday" id="discGroupe5" maxlength="2" readonly="">
                            <div class="countFrameRight" id="discGroupe5" data-target="disc5"> </div>
                        </div>
                    </div>
                    <table class="discountsTbl" cellpadding="0" cellspacing="0" style="display:none;">
                        <tbody><tr>
                            <td colspan="5" style="background-color: #41a1e0;border-bottom: 1px solid #41a1e0;color: white;">Льготные категории пассажиров</td>
                        </tr>
                        <tr>
                            <td class="disc1" style="vertical-align: top;background-color: #e1eff3;display:none;">
                                <div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                                    <div class="ask-content" style="margin-top:-76px;"><div>Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.</div></div>
                                </div>Дети <br><span style="padding-left: 16px;">(от 2 до 12 лет)</span>
                            </td>
                            <td class="disc2" style="vertical-align: top;background-color: #e1eff3;display:none;">
                                <div>
                                    <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                                    <div class="ask-content" style="margin-top:-76px;"><div>Если вы планируете путешествовать с маленькими детьми, рекомендуем внести данные, благодаря которым система автоматически проверит наличие специальных тарифов (без места) на выбранном вами маршруте. Обратите внимание на необходимость выбора двух и более пассажиров для получения спец. тарифа. Вне зависимости от тарифа система предложит выбрать место на карте транспортного средства; возможно, оно будет свободно.</div></div>
                                </div>
                                Дети без места <br><span style="padding-left: 16px;">(до 2 - 5 лет)</span>
                            </td>
                            <td class="disc3" style="vertical-align: top;background-color: #e1eff3;display:none;">
                                <div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                                    <div class="ask-content" style="margin-top:-76px;"><div>Некоторые перевозчики предоставляют скидки для студентов. Данный функционал разработан для возможности использовать скидки на проезд студентами. Для проверки наличия тарифа на выбраном вами направлении достаточно внести номер студенческого билета, и система автоматически проверит наличие студенческой скидки и подберет наиболее подходящий тариф.</div></div>
                                </div>
                                Студенты <br><span style="padding-left: 16px;">(от 16 до 25 лет)</span>
                            </td>
                            <td class="disc4" style="vertical-align: top;background-color: #e1eff3;display:none;">
                                <div>
                                    <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                                    <div class="ask-content" style="margin-top:-76px;"><div>Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.</div></div>
                                </div>
                                Молодежь <br><span style="padding-left: 16px;">(от 16 до 25 лет)</span>
                            </td>
                            <td class="disc5" style="vertical-align: top;background-color: #e1eff3;display:none;">
                                <div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info">
                                    <div class="ask-content" style="margin-top:-76px;"><div>Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.</div></div>
                                </div>
                                Пожилые <br><span style="padding-left: 16px;">(60+ лет)</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 204px;vertical-align: top;padding-bottom: 0px;border-right: 1px solid grey; display:none;" class="discGroupe1 disc1">
                            </td>
                            <td style="width: 209px;padding-bottom: 0px;border-right: 1px solid grey;vertical-align: top; display:none;" class="discGroupe2 disc2">
                            </td>
                            <td style="width: 255px;vertical-align: top;padding-bottom: 0px; display:none;" class="discGroupe3 disc3">
                            </td>
                            <td style="width: 204px;vertical-align: top;padding-bottom: 0px; display:none;" class="discGroupe4 disc4">
                            </td>
                            <td style="width: 204px;vertical-align: top;padding-bottom: 0px; display:none;" class="discGroupe5 disc5">
                            </td>
                        </tr>
                        <tr>
                            <td class="disc1" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                                <div class="information" style="margin-left: 0px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                                    для проверки  наличия возрастных скидок у перевозчика для пассажиров с местами (дети, молодежь, пожилые и другие)                        </div>
                            </td>
                            <td class="disc2" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                                <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                                    для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)                        </div>
                            </td>
                            <td class="disc3" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                                <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                                    для проверки скидок для студентов можно внести № документа один или оба                        </div>
                            </td>
                            <td class="disc4" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                                <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                                    для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)                        </div>
                            </td>
                            <td class="disc5" style="vertical-align:top; padding-bottom: 0px; display:none;">
                                <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                                    для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)                        </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" style="border-top:1px solid grey;">
                                <div class="disocuntBlockAccept"><img style="width: 10px;margin-left: -11px;" src="http://e-travels.com.ua/images/form/data-check.png" alt="">&nbsp;<!--Применить--></div>
                                <div class="disocuntBlockClose" style="float: right;"><img src="http://e-travels.com.ua/images/form/close_new.png" alt="">&nbsp;</div>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div class="clearfix">
                    <div class="checkbox left" style="z-index: 1000000;margin-top: 43px;">
                        <ul class="clearfix" style="list-style-type: none;margin: 0px;padding: 0px;">
                            <li class="clearfix">
                                <div class="clearfix">
                                    <div style="float:left;width: 135px;">
                                        <div class="element additional_data" style="padding: 0px;">
                                            <span style="color: #fff;line-height: 11px;font-size: 10px;">Взрослые:</span>
                                            <span class="disc0" style="color: #fff;line-height: 11px;font-size: 10px;">1</span>
                                        </div>
                                        <div class="element additional_data" style="padding: 0px;display: none;">
                                            <span style="color: #fff;line-height: 11px;font-size: 10px;">Дети:</span>
                                            <span class="disc1" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                        </div>
                                        <div class="element additional_data" style="padding: 0px;display: none;">
                                            <span style="color: #fff;line-height: 11px;font-size: 10px;">Дети без места:</span>
                                            <span class="disc2" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                        </div>
                                    </div>
                                    <div style="float:left;margin-left: 30px;width: 135px;height: 100px;">
                                        <div class="element additional_data" style="padding: 0px; display: none;">
                                            <span style="color: #fff;line-height: 11px;font-size: 10px;">Студенты:</span>
                                            <span class="disc3" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                        </div>
                                        <div class="element additional_data" style="padding: 0px;display: none;">
                                            <span style="color: #fff;line-height: 11px;font-size: 10px;">Молодежь:</span>
                                            <span class="disc4" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                        </div>
                                        <div class="element additional_data" style="padding-top: 8px;display: none;">
                                            <span style="color: #fff;line-height: 11px;font-size: 10px;">Пожилые: </span>
                                            <span class="disc5" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>    </div>
</header>
<div class="popular_container">
<div class="wrap">
    <div id="loader" style="position:relative;z-index:1000;top:-1px;">
    </div>
    <div id="tripsResultContainer" style="display: none;"></div>
    <div class="title_">Популярные направления</div>
    <div class="block clearfix populars">
    <div class="row_block left">


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/tivat3.png') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев - Тиват - Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span></br>3200.00 грн</span>
            </div>
        </div>
        <div class="bottom_btn clearfix">
            <div class="more item left" >
                <a name="more" class="moreTripInfo populars" trip="kiev-tivat-kiev" >Подробнее</a>

                <div class="popup order"
                     style="display: <? if (isset($page) && $page == 'kiev-tivat-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/tivat3.png"/>
                                </div>
                                <div id="vk_like"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-tivat-kiev',
                                        pageTitle:'Киев - Тиват - Киев от 3200.00 грн',
                                        pageDescription:'Прямой чартерный авиарейс с 08.06.2014 по 29.09.2014 из Киева. Рейс выполняется из международного аэропорта Киев ("Жуляны", Терминал А) каждое ВОСКРЕСЕНИЕ в 11:00 вмеждународный аэропорт «Тиват». Обратно вылет в 13:30.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/tivat3.png',
                                        text:'Прямой чартерный авиарейс с 08.06.2014 по 29.09.2014 из Киева. Рейс выполняется из международного аэропорта Киев ("Жуляны", Терминал А) каждое ВОСКРЕСЕНИЕ в 11:00 вмеждународный аэропорт «Тиват». Обратно вылет в 13:30.'
                                    }, '1325423617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-tivat-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true">
                                </div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Тиват, Черногория"/>
                                    <input type="hidden" class="promoEndCityId" value="C1E1CDA59082D9CAE040B859C1436099"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>

                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Тиват - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс с 08.06.2014 по 29.09.2014 из Киева. Рейс выполняется из
                                        международного аэропорта Киев ("Жуляны", Терминал А) каждое <b>ВОСКРЕСЕНИЕ</b> в 11:00 в
                                        международный аэропорт «Тиват». Обратно вылет в 13:30. </p>

                                    <p><b>Полная стоимость перелета туда и обратно от 310 $ (включая все таксы и сборы)</b></p>

                                    <p>Прямой чартерный авиарейс с 07.06.2014 по 28.09.2014 из Киева. Рейс выполняется из
                                        международного аэропорта Борисполь (Терминал D) каждую <b>СУББОТУ</b> в международный
                                        аэропорт «Тиват». Заявленное время вылета из Киева 06:30. Вылет из Тивата в 08:45. </p>

                                    <p><b>Полная стоимость перелета туда и обратно от 370 $ (включая все таксы и сборы). )</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/antaliya3.png') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев - Анталия - Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>2628.37 грн</span>
            </div>
        </div>
        <div class="bottom_btn clearfix">
            <div class="more item left" >
                <a name="more" class="moreTripInfo populars" trip="kiev-antalia-kiev">Подробнее</a>

                <div class="popup order"
                     style="display: <? if (isset($page) && $page == 'kiev-antalia-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/antaliya3.png"/>
                                </div>
                                <div id="vk_like1"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like1", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-antalia-kiev',
                                        pageTitle:'Киев - Анталия - Киев от 2628.37 грн',
                                        pageDescription:'Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, средам, четвергам, субботам и воскресеньям в международный аэропорт «Анталья». Вылет из Киева утром в 06:00. Из Антальи в 10:00.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/antaliya3.png',
                                        text:'Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, средам, четвергам, субботам и воскресеньям в международный аэропорт «Анталья». Вылет из Киева утром в 06:00. Из Антальи в 10:00.'
                                    }, '1671223617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-antalia-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Анталья, Турция"/>
                                    <input type="hidden" class="promoEndCityId" value="C4127300130E9B3FE040B859C1431FF7"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="26.10.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Анталия - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из
                                        международного аэропорта Борисполь (Терминал D) по вторникам, средам, четвергам,
                                        субботам и воскресеньям в международный аэропорт «Анталья». Вылет из Киева утром в
                                        06:00. Из Антальи в 10:00. </p>

                                    <p><b>Полная стоимость перелета туда и обратно от 335 $ (включая все таксы и сборы). </b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/bangkok3.png') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев - Бангкок - Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>8850.37 грн</span>
            </div>
        </div>
        <div class="bottom_btn clearfix">
            <div class="more item left" >
                <a name="more" class="moreTripInfo populars" trip="kiev-bangkok-kiev">Подробнее</a>

                <div class="popup order"
                     style="display: <? if (isset($page) && $page == 'kiev-bangkok-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/bangkok3.png"/>
                                </div>
                                <div id="vk_like2"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like2", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-bangkok-kiev',
                                        pageTitle:'Киев - Бангкок - Киев от 8850.37 грн',
                                        pageDescription:'Прямой чартерный авиарейс с 07.12.2013 по 30.06.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по средам и субботам. По направлению Бангкок-Киев рейсы вылетают по понедельникам и пятницам.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/bangkok3.png',
                                        text:'Прямой чартерный авиарейс с 07.12.2013 по 30.06.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по средам и субботам. По направлению Бангкок-Киев рейсы вылетают по понедельникам и пятницам.'
                                    }, '1731423617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-bangkok-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Таиланд, Бангкок"/>
                                    <input type="hidden" class="promoEndCityId" value="DAB6A899A3EED17EE040B85960520A5D"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="30.06.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Бангкок - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс с 07.12.2013 по 30.06.2014 из Киева. Рейс выполняется из
                                        международного аэропорта Борисполь (Терминал D) по средам и субботам. По направлению
                                        Бангкок-Киев рейсы вылетают по понедельникам и пятницам. </p>

                                    <p><b>Полная стоимость перелета туда и обратно от 650$ (включая все таксы и сборы). </b></p>

                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/byrgas3.png') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев - Бургас - Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>2763.26 грн</span>
            </div>
        </div>
        <div class="bottom_btn clearfix">
            <div class="more item left" >
                <a name="more" class="moreTripInfo populars" trip="kiev-burgas-kiev" >Подробнее</a>

                <div class="popup order"
                     style="display: <? if (isset($page) && $page == 'kiev-burgas-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/byrgas3.png"/>
                                </div>
                                <div id="vk_like3"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like3", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-burgas-kiev',
                                        pageTitle:'Киев - Бургас - Киев от 2763.26 грн',
                                        pageDescription:'Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, пятницам и воскресеньям в международный аэропорт «Сарафово». Вылет из Киева утром в 11:00. Из Бургаса в 08:05.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/byrgas3.png',
                                        text:'Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, пятницам и воскресеньям в международный аэропорт «Сарафово». Вылет из Киева утром в 11:00. Из Бургаса в 08:05.'
                                    }, '1956023617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-burgas-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Бургас, Болгария"/>
                                    <input type="hidden" class="promoEndCityId" value="D832C903F86618F1E040B859605270A9"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="26.10.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Бургас - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из
                                        международного аэропорта Борисполь (Терминал D) по вторникам, пятницам и воскресеньям в
                                        международный аэропорт «Сарафово». Вылет из Киева утром в 11:00. Из Бургаса в
                                        08:05. </p>

                                    <p><b>Полная стоимость перелета туда и обратно от 2763.26 грн. (включая все таксы и
                                            сборы). </b></p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/iraklion3.png') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев - Ираклион - Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>4062.13 грн</span>
            </div>
        </div>
        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-heraklion-kiev">Подробнее</a>

                <div class="popup order"
                     style="display: <? if (isset($page) && $page == 'kiev-heraklion-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/iraklion3.png"/>
                                </div>
                                <div id="vk_like4"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like4", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-heraklion-kiev',
                                        pageTitle:'Киев - Ираклион - Киев от 4062.13 грн',
                                        pageDescription:'Прямой чартерный авиарейс с 26.04.2014 по 18.10.2014из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, четвергам, субботам и воскресеньям. Вылет Киева в 14:00, прибытие на остров Крит - в Ираклион 17:00. Время вылета самолета Ираклион - Киев, в 18:00, прилет в Киев 21:00.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/iraklion3.png',
                                        text:'Прямой чартерный авиарейс с 26.04.2014 по 18.10.2014из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, четвергам, субботам и воскресеньям. Вылет Киева в 14:00, прибытие на остров Крит - в Ираклион 17:00. Время вылета самолета Ираклион - Киев, в 18:00, прилет в Киев 21:00.'
                                    }, '1746423617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-heraklion-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Ираклион, Греция"/>
                                    <input type="hidden" class="promoEndCityId" value="DB2BC65F9664925DE040B859605261DA"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="18.10.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Ираклион - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс с 26.04.2014 по 18.10.2014из Киева. Рейс выполняется из
                                        международного аэропорта Борисполь (Терминал D) по вторникам, четвергам, субботам и
                                        воскресеньям. Вылет Киева в 14:00, прибытие на остров Крит - в Ираклион 17:00.
                                        Время вылета самолета Ираклион - Киев, в 18:00, прилет в Киев 21:00.</p>

                                    <p><b>Полная стоимость перелета туда и обратно от 350$ (включая все таксы и сборы). </b></p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/enfida.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев - Энфида - Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>5184.15 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-enfida-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-enfida-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/enfida.jpg"/>
                                </div>
                                <div id="vk_like5"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like5", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-enfida-kiev',
                                        pageTitle:'Киев - Энфида - Киев от 5184.15 грн',
                                        pageDescription:'Чартерные авиарейсы Киев-Энфида(Тунис)-Киев авиакомпании "Международные авиалинии Украины" вылетают из аэропорта Борисполь (Терминал Д) по четвергам и воскресеньям с 27.04.2014 по 28.09.2014. Билеты можно приобрести только туда и обратно до 90 дней.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/enfida.jpg',
                                        text:'Чартерные авиарейсы Киев-Энфида(Тунис)-Киев авиакомпании "Международные авиалинии Украины" вылетают из аэропорта Борисполь (Терминал Д) по четвергам и воскресеньям с 27.04.2014 по 28.09.2014. Билеты можно приобрести только туда и обратно до 90 дней.'
                                    }, '1151403617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-enfida-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Энфида, Тунис"/>
                                    <input type="hidden" class="promoEndCityId" value="F73E9B9CCBAFA338E040B85960523C24"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Энфида - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Чартерные авиарейсы Киев-Энфида(Тунис)-Киев авиакомпании "Международные авиалинии
                                        Украины" вылетают из аэропорта Борисполь (Терминал Д) по четвергам и воскресеньям с
                                        27.04.2014 по 28.09.2014. Билеты можно приобрести только туда и обратно до 90 дней. </p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/telaviv.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев-Тель-Авиа-Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>4710.70 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-telaviv-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-telaviv-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/telaviv.jpg"/>
                                </div>
                                <div id="vk_like6" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like6", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-tel-aviv-kiev',
                                        pageTitle:'Киев-Тель-Авиа-Киев от 4710.70 грн',
                                        pageDescription:'Прямой чартерный авиарейс с 20.07.2014 по 23.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по понедельникам и четвергам.Вылет из Киева в 09:45, прибытие в Израиль в Тель-Авив в 13:05. Время вылета самолета Тель-Авив – Киев, в 14:00, прилет в Киев 17:10. Есть рейсы на 7, 10, 11 и 14 дней пребывания.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/telaviv.jpg',
                                        text:'Прямой чартерный авиарейс с 20.07.2014 по 23.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по понедельникам и четвергам.Вылет из Киева в 09:45, прибытие в Израиль в Тель-Авив в 13:05. Время вылета самолета Тель-Авив – Киев, в 14:00, прилет в Киев 17:10. Есть рейсы на 7, 10, 11 и 14 дней пребывания.'
                                    }, '1213103617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-tel-aviv-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Тель-Авив"/>
                                    <input type="hidden" class="promoEndCityId" value="DD3AAA550F36A304E040B85960522283"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев – Тель-Авив – Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс с 20.07.2014 по 23.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по понедельникам и четвергам. Вылет из Киева в 09:45, прибытие в Израиль в Тель-Авив в 13:05. Время вылета самолета Тель-Авив – Киев, в 14:00, прилет в Киев 17:10. Есть рейсы на 7, 10, 11 и 14 дней пребывания.Полная стоимость перелета туда и обратно от 4720.7 грн. (включая все таксы и сборы).</p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/varna.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев-Варна-Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>2763.26 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-varna-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-varna-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/varna.jpg"/>
                                </div>
                                <div id="vk_like7" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like7", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-varna-kiev',
                                        pageTitle:'Киев-Варна-Киев от 2763.26 грн',
                                        pageDescription:'Прямой чартерный авиарейс с 18.07.2014 по 25.07.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по пятницам. Вылет из Киева в 18:30, прибытие в Болгарию в 20:10. Обратный рейс из Варны в 21:10, прилет в 22:50. С 01.08.2014 по 12.09.2014. Вылет из Борисполя (Терминал D) в 12:05, прилет 13:50. Вылет из Варны 14:50, прилет – 16:35. Все рейсы на 7 дней пребывания.',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/varna.jpg',
                                        text:'Прямой чартерный авиарейс с 18.07.2014 по 25.07.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по пятницам. Вылет из Киева в 18:30, прибытие в Болгарию в 20:10. Обратный рейс из Варны в 21:10, прилет в 22:50. С 01.08.2014 по 12.09.2014. Вылет из Борисполя (Терминал D) в 12:05, прилет 13:50. Вылет из Варны 14:50, прилет – 16:35. Все рейсы на 7 дней пребывания.'
                                    }, '1411143617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-vanra-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Варна, Болгария"/>
                                    <input type="hidden" class="promoEndCityId" value="D832C903F86418F1E040B859605270A9"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Варна - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс с 18.07.2014 по 25.07.2014 из Киева. Рейс
                                        выполняется из международного аэропорта Борисполь (Терминал D) по пятницам.
                                        Вылет из Киева в 18:30, прибытие в Болгарию в 20:10. Обратный рейс из Варны в
                                        21:10, прилет в 22:50. С 01.08.2014 по 12.09.2014. Вылет из Борисполя (Терминал
                                        D) в 12:05, прилет 13:50. Вылет из Варны 14:50, прилет – 16:35. Все рейсы на 7
                                        дней пребывания. </p>
                                    <p><b>Полная стоимость перелета туда обратно от 2763.26 грн. (включая все таксы и
                                            сборы).</b></p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/pula.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев-Пула-Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>4273.30 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-pula-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-pula-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/pula.jpg"/>
                                </div>
                                <div id="vk_like8" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like8", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-pula-kiev',
                                        pageTitle:'Киев-Пула-Киев от 4273.30 грн',
                                        pageDescription:'Прямой чартерный рейс с 19:07.2014 по 06.09.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по субботам. Вылет из Киева в 11:25, прибытие в Хорватию в 12:25. Вылет из Пулы в 13:55, прилет 17:15. Есть рейсы на 7 и 14 дней пребывания в Хорватии.Полная стоимость перелета туда и обратно от 4273.3 грн. (включая все таксы и сборы).',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/pula.jpg',
                                        text:'Прямой чартерный рейс с 19:07.2014 по 06.09.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по субботам. Вылет из Киева в 11:25, прибытие в Хорватию в 12:25. Вылет из Пулы в 13:55, прилет 17:15. Есть рейсы на 7 и 14 дней пребывания в Хорватии.Полная стоимость перелета туда и обратно от 4273.3 грн. (включая все таксы и сборы).'
                                    }, '1134043617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-pula-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Пула, Хорватия"/>
                                    <input type="hidden" class="promoEndCityId" value="DA897B1964F672B0E040B85960520B40"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев - Пула - Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный рейс с 19:07.2014 по 06.09.2014 из Киева. Рейс выполняется
                                        из международного аэропорта Борисполь (Терминал D) по субботам. Вылет из Киева в
                                        11:25, прибытие в Хорватию в 12:25. Вылет из Пулы в 13:55, прилет 17:15. Есть
                                        рейсы на 7 и 14 дней пребывания в Хорватии.</p>
                                    <p><b>Полная стоимость перелета туда и обратно от 4273.3 грн. (включая все таксы и
                                            сборы).</b></p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/batumi.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев – Батуми – Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>4000,86 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-batumi-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-batumi-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/batumi.jpg"/>
                                </div>
                                <div id="vk_like9" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like9", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-batumi-kiev',
                                        pageTitle:'Киев – Батуми – Киев от 4000,86 грн',
                                        pageDescription:'<p>Прямой чартерный авиарейс из Киева выполняется <b>только с 27.07.2014 по 03.08.2014</b>. Вылет осуществляется из аэропорта Борисполь в 19:40, в Батумирейс прибывает в 22:50. Обратный рейс выполняется из Батуми в 06:50, прибытие самолета в Киев – в 08:15.</p><p><b>Полная стоимость перелета составляет 4000,86 грн (включая все налоги и сборы).</b></p>',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/batumi.jpg',
                                        text:'<p>Прямой чартерный авиарейс из Киева выполняется <b>только с 27.07.2014 по 03.08.2014</b>. Вылет осуществляется из аэропорта Борисполь в 19:40, в Батумирейс прибывает в 22:50. Обратный рейс выполняется из Батуми в 06:50, прибытие самолета в Киев – в 08:15.</p><p><b>Полная стоимость перелета составляет 4000,86 грн (включая все налоги и сборы).</b></p>'
                                    }, '1134043617');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-batumi-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Батуми, Грузия"/>
                                    <input type="hidden" class="promoEndCityId" value="DD39A56F6AB99490E040B859605230C0"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев – Батуми – Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс из Киева выполняется <b>только с 27.07.2014 по 03.08.2014</b>. Вылет осуществляется из аэропорта Борисполь в 19:40, в Батумирейс прибывает в 22:50. Обратный рейс выполняется из Батуми в 06:50, прибытие самолета в Киев – в 08:15.</p><p><b>Полная стоимость перелета составляет 4000,86 грн (включая все налоги и сборы).</b></p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/split.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев – Сплит – Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>4098.88 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-split-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-split-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/split.jpg"/>
                                </div>
                                <div id="vk_like10" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like10", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-split-kiev',
                                        pageTitle:'Киев – Сплит – Киев от 4098.88 грн',
                                        pageDescription:'<p>Открыт прямой чартерный рейс из Киева с вылетом в 12:40 из аэропорта Борисполь, прибытие в Сплит – в 14:00. Заявленное время вылета из Сплита - в 14:50, в Киеве прибытие рейса ожидается в 18:05.</p><p>Вылеты осуществляются <b>по ВОСКРЕСЕНЬЯМ</b>, выполняются на 7 или 14 дней и <b>только в указанные даты:</b></p>',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/split.jpg',
                                        text:'<p>Открыт прямой чартерный рейс из Киева с вылетом в 12:40 из аэропорта Борисполь, прибытие в Сплит – в 14:00. Заявленное время вылета из Сплита - в 14:50, в Киеве прибытие рейса ожидается в 18:05.</p><p>Вылеты осуществляются <b>по ВОСКРЕСЕНЬЯМ</b>, выполняются на 7 или 14 дней и <b>только в указанные даты:</b></p>'
                                    }, '1411083621');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-split-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Сплит, Хорватия"/>
                                    <input type="hidden" class="promoEndCityId" value="C4B509120AACC157E040B859C1435C00"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев – Батуми – Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Открыт прямой чартерный рейс из Киева с вылетом в 12:40 из аэропорта Борисполь, прибытие в Сплит – в 14:00. Заявленное время вылета из Сплита - в 14:50, в Киеве прибытие рейса ожидается в 18:05.</p><p>Вылеты осуществляются <b>по ВОСКРЕСЕНЬЯМ</b>, выполняются на 7 или 14 дней и <b>только в указанные даты:</b></p>
                                    <p>20.07, 31.08 на 7 дней - 4098.88 грн</p>
                                    <p>27.07, 03.08 на 7 дней - 4273.3 грн</p>
                                    <p>07.09, 14.09 на 7 дней - 4447.72 грн</p>
                                    <p>10.08, 17.08 на 7 дней - 4622.14 грн</p>
                                    <p>24.08 на 7 дней - 4970.98 грн</p>
                                    <p>13.07, 20.07, 31.08 на 14 дней - 8372.16 грн</p>
                                    <p>27.07, 03.08 на 14 дней - 8546.58 грн</p>
                                    <p>10.08, 17.08, 07.09 на 14 дней - 8895.42 грн.</p>
                                    <p><b>При датах вылета указана полная стоимость перелета туда и обратно (включая
                                            все налоги и сборы).</b></p>
                                    <p>Рейсы RT на 14 дней обойдутся дороже, чем Wind Rose, и ограничены количеством
                                        дней (7 или 14).</p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/larnaka.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев – Ларнака – Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>5232.62 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-larnaka-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-larnaka-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/larnaka.jpg"/>
                                </div>
                                <div id="vk_like11" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like11", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-larnaka-kiev',
                                        pageTitle:'Киев – Ларнака  – Киев от 5232.62 грн',
                                        pageDescription:'<p>Прямой чартерный авиарейс выполняется из международного аэропорта Борисполь (Терминал D), вылет производится в 10:10, в Ларнаку рейс прибывает в 13:05. Обратный вылет из Ларнаки заявлен в 14:40, прибытие в Борисполь планируется в 17:45.</p>',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/larnaka.jpg',
                                        text:'<p>Прямой чартерный авиарейс выполняется из международного аэропорта Борисполь (Терминал D), вылет производится в 10:10, в Ларнаку рейс прибывает в 13:05. Обратный вылет из Ларнаки заявлен в 14:40, прибытие в Борисполь планируется в 17:45.</p>'
                                    }, '1429087131');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-larnaka-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Ларнака, Кипр"/>
                                    <input type="hidden" class="promoEndCityId" value="DD3BC3350A0D3452E040B859605233B8"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев – Ларнака – Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс выполняется из международного аэропорта Борисполь
                                        (Терминал D), вылет производится в 10:10, в Ларнаку рейс прибывает в 13:05.
                                        Обратный вылет из Ларнаки заявлен в 14:40, прибытие в Борисполь планируется в
                                        17:45.</p>
                                    <p>Режим вылетов<b> до сентября</b> включительно - <b>по понедельникам,
                                            вторникам, четвергам, субботам и воскресеньям</b>. <b>После сентября </b>рейсы в
                                        Ларнаку из Киева планируются <b>по вторникам, средам, субботам и воскресеньям.</b></p>
                                    <p><b>Полная стоимость перелета туда и обратно составляет: до 31.07 - 5232.62
                                            грн, с 31.07 - 5755.86 грн (включая все налоги и сборы).</b></p>
                                    <p>Продажа осуществляется только РТ на 7 дней (OW и плавающих РТ нет).<br>
                                        <br>
                                        &nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/rimini.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев – Римини – Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>4481.62 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-rimini-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-rimini-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/rimini.jpg"/>
                                </div>
                                <div id="vk_like12" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like12", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-rimini-kiev',
                                        pageTitle:'Киев – Римини  – Киев от 4481.62 грн',
                                        pageDescription:'<p>Прямой чартерный авиарейс до 30.08.2014 из Киева. Рейс выполняется  авиакомпанией МАУ из международного аэропорта Борисполь (Терминал D) по субботам. Вылет из Киева вечером в 18:30, прилет в 20:20. Вылет из Римини в 21:50, прилет в Борисполь в 01:30.</p>',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/rimini.jpg',
                                        text:'<p>Прямой чартерный авиарейс до 30.08.2014 из Киева. Рейс выполняется  авиакомпанией МАУ из международного аэропорта Борисполь (Терминал D) по субботам. Вылет из Киева вечером в 18:30, прилет в 20:20. Вылет из Римини в 21:50, прилет в Борисполь в 01:30.</p>'
                                    }, '1812307531');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-rimini-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Римини, Италия"/>
                                    <input type="hidden" class="promoEndCityId" value="95E00C1ABB3640ADE040A8C01E027A78"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев – Римини – Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс до 30.08.2014 из Киева. Рейс выполняется
                                        авиакомпанией МАУ из международного аэропорта Борисполь (Терминал D) по
                                        субботам. Вылет из Киева вечером в 18:30, прилет в 20:20. Вылет из Римини в
                                        21:50, прилет в Борисполь в 01:30.</p>
                                    <p><b>Полная стоимость перелета туда и обратно от 4481.62 гривен, с сентября –
                                            от 4534.94 гривен (включая все таксы и сборы). Последний вылет 13.09.2014
                                            (20.09.2014 – уже мест нет). Стоимость указана с учетом перелета туда и обратно
                                            на семь дней.</b></p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="cell_block background clearfix" style="background: url('/../../static/images/pics/tenerife.jpg') no-repeat;background-size: cover;">
        <div class="clearfix">
            <div class="price_">
                <span class="departue">Киев – Тенерифе – Киев</span>
            </div>
            <div class="price_">
                <span class="price_holder"><span class="from">от</span> </br>9373.16 грн</span>
            </div>
        </div>

        <div class="bottom_btn clearfix">
            <div class="more item left">
                <a name="more" class="moreTripInfo populars" trip="kiev-tenerife-kiev">Подробнее</a>

                <div class="popup order" style="display: <? if (isset($page) && $page == 'kiev-tenerife-kiev') { ?>block<? } else { ?>none<? } ?>;">
                    <div class="popup_wrap">
                        <div class="top clearfix">
                            <div class="close_popup right"><span>Популярное направление</span></div>
                        </div>
                        <div class="center clearfix">
                            <div class="block_foto left">
                                <div class="img">
                                    <img alt="" src="/static/images/pics/tenerife.jpg"/>
                                </div>
                                <div id="vk_like13" style="padding-bottom: 10px;"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Like("vk_like13", {
                                        type: "button",
                                        height: 20,
                                        pageUrl: 'http://echarter.com.ua/page/kiev-tenerife-kiev',
                                        pageTitle:'Киев – Тенерифе  – Киев от 9373.16 грн',
                                        pageDescription:'<p>Прямой чартерный авиарейс из Киева. Рейс выполняется из международного  аэропорта Борисполь (Терминал D) по вторникам и пятницам. Вылет из Киева вечером в 18:55, прилет 23:40. Возврат из Тенерифе в 23:59, прилет 08:55+1.</p>',
                                        pageImage: 'http://echarter.com.ua/static/images/pics/tenerife.jpg',
                                        text:'<p>Прямой чартерный авиарейс из Киева. Рейс выполняется из международного  аэропорта Борисполь (Терминал D) по вторникам и пятницам. Вылет из Киева вечером в 18:55, прилет 23:40. Возврат из Тенерифе в 23:59, прилет 08:55+1.</p>'
                                    }, '1913697501');
                                </script>
                                <div class="fb-like" data-href="http://echarter.com.ua/page/kiev-tenerife-kiev"
                                     data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="hidden_data">
                                    <input type="hidden" class="promoStartCityName" value="Киев, Украина"/>
                                    <input type="hidden" class="promoStartCityId" value="928F32EDA461026FE040A8C01E02395E"/>
                                    <input type="hidden" class="promoEndCityName" value="Тенерифе, Испания"/>
                                    <input type="hidden" class="promoEndCityId" value="DD3BC33509DF3452E040B859605233B8"/>
                                    <input type="hidden" class="promoStartDate" value="28.06.2014"/>
                                    <input type="hidden" class="promoEndDate" value="28.09.2014"/>
                                </div>
                            </div>
                            <div class="block_info right" style="text-align:justify;height: 360px;overflow-y: auto;padding-bottom: 0px;">
                                <h3>Киев – Тенерифе – Киев</h3>
                                <div style="margin-right: 10px;">
                                    <p>Прямой чартерный авиарейс из Киева. Рейс выполняется из международного
                                        аэропорта Борисполь (Терминал D) по вторникам и пятницам. Вылет из Киева вечером
                                        в 18:55, прилет 23:40. Возврат из Тенерифе в 23:59, прилет 08:55+1.</p>
                                    <p>Полная стоимость перелета туда и обратно от 9373.16 гривен (включая все таксы
                                        и сборы).</p>
                                    <p><b>Стоимость перелета от 3 до 7 дней – 9372.16 гривен, от 10 до 11 дней –
                                            9804.66 грн., от 14 до 28 дней – 10303.7 грн.</b></p>
                                </div>
                            </div>
                        </div>
                        <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                        <? include('popup_selectors.php');?>
                        <div class="footer_popup"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
