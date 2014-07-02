<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Чартеры в Черногорию. Авиабилеты на чартер в Черногорию</title>
        <meta name="description" content="">
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
	</head>
	<body>
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
            <img alt="" src="static/img/phone_big_1.png">
        </div>
    </div>        <div class="container page_2" style="margin: 0px auto;text-align: center;">
        <div class="wrap" style="padding: 40px 0px 5px 90px;">
            <div class="container_form clearfix new">
                <form class="clearfix">
                    <div class="element from pointCheck">
                        <label>Откуда</label>
                        <input id="from" type="text" name="from" class="town" placeholder="Введите страну или город" value="">
                        <input id="startCityId" type="hidden" name="startCityId" class="hid_city_id" value="">
                        <div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
                    </div>
                    <div class="element to pointCheck">
                        <label>Куда</label>
                        <input id="to" type="text" name="to" class="town" placeholder="Введите страну или город" value="">
                        <input id="endCityId" type="hidden" name="endCityId" class="hid_city_id" value="">
                        <div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
                    </div>


                    <div class="element dep item_1 clearfix">
                        <label>Дата отправления</label>
                        <input type="text" id="tripDate" name="dep_date" class="dep_date hdata contacts" placeholder="" value="">
                        <img src="/images/data-check.png" alt="" class="data-check">
                    </div>

                    <div class="element ret item_1  clearfix">
                        <label>Обратно</label>
                        <input type="text" name="ret_date" id="backTripDate" class="ret_date hdata contacts" placeholder="" value="">
                        <img src="/images/data-check.png" alt="" class="data-check del contacts">
                    </div>

                    <div class="block buttons right">
                        <input id="searchButton" class="sbm" type="submit" value="Поиск рейсов" style=" margin-right: 76px; margin-top: -7px; margin-bottom: 12px; ">
                    </div>

                    <div class="selectblock" style=" position: absolute; margin: 0px; margin-top: 39px; ">
                        <input type="hidden" class="TiketsCounter input" id="ticketAmount" value="1">
                        <span id="ticketCountNew">1</span>
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
                                <div class="countFrameLeft" id="discGroupe0"> </div>
                                <input type="text" value="1" class="birthday" id="discGroupe0" maxlength="2" readonly="">
                                <div class="countFrameRight" id="discGroupe0"> </div>
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
                                    <div class="disocuntBlockClose" style="position: relative;float: right;margin-right: -5px;"><img src="http://e-travels.com.ua/images/form/close_new.png" alt="">применить</div>
                                </td>
                            </tr>
                            </tbody></table>
                    </div>


                </form>


            </div>
        </div>
    </div>    </div>
    </header>
		<div class="popular_container">
			<div class="wrap">
				<div id="tripsResultContainer"></div>
				<div class="block clearfix">
					<div class="row_block left maintext">

<h1>Авиабилеты на чартер в Черногорию</h1>

<p><b>Купить авиабилет в Черногорию</b> на сайте позволяет 
платежно-процессинговый центр интернет платежей одного из самых известных банков 
Украины. Обмен информацией о Вашей покупке происходит мгновенно и, после успешно 
завершенной транзакции, Вы станете обладателем места в самолете, который 
направляется в нужный Вам аэропорт.</p>
<p>Покупка авиабилетов по Интернет на сегодняшний день является самым 
распространенным каналом для продажи пассажирских авиаперевозок. Независимо от 
страны, в которой Вы находитесь, вы непременно сможете <b>купить авиабилет</b> в 
считанные минуты.</p>
<p>Открыты продажи на <a href="tivat.php">чартер в Тиват</a>. <b>Аэропорты вылетов: Киев, Одесса, Донецк, Харьков, Запорожье</b></p>
<br /><br />
Чартер Киев - Тиват – Киев. Из Борисполя по понедельникам и четвергам начиная с 29.04.2013 по 23.09.2013. Время вылета в 15:50, прибытие в Тиват в 17:20. Вылет из Тивата в 18:20, прибытие в Киев 21:50. Стоимость авиабилета туда и обратно - от 2670,00.
<br />
По воскресеньям с 16.06.2013 по 29.09.2013. Вылет из Борисполя в 13:50, в Тиват в 15:20. Вылет из Тивата в 16:20, в Борисполь в 19:50. Стоимость авиабилета туда и обратно 2860,00 грн.
<br />
По субботам из аэропорта Жуляны с 01.06.2013 по 28.09.2013. Время вылета из Киева 13:20, прибытие в Тиват 14:50. Время вылета Тиват - Киев 15:50, прибытие в Киев 19:20. Стоимость перелета туда и обратно от 2400,00 грн.
<br />
<p>Если Вы ищете дешевые авиабилеты, либо билеты для пассажиров первого класса, 
или Вам необходимы авиабилеты на чартеры - все эти классы и виды международных 
пассажирских перевозок можно заказать на сайте <a href="http://echarter.com.ua">
http://echarter.com.ua</a>.</p>	

<h2>Заказ авиабилетов в Черногорию - онлайн</h2>
<p>Авиа-перелеты из Украины в Черногорию осуществляются довольно часто, по 
большей части – в летний сезон, в этом направлении работают десятки 
авиакомпаний, регулярные и чартерные рейсы отправляются не только из Киева, но и 
из многих крупных аэропортов Украины: Севастополя, Днепропетровска, Львова, 
Донецка и Одессы. <b>Купить авиабилет в Черногорию</b> по интернет очень просто, 
для этого нужно оформить онлайн заказ - заполнить лист бронирования на странице 
нашего сайта с указанием аэропорта вылета и прибытия, количества пассажиров и 
т.д. Оплата забронированных авиабилетов производится с помощью кредитной карты, 
наличными в офисе, в кассе турагентства, в ближайшем банковском отделении или 
терминале самообслуживания. Сэкономить на поездке в Черногорию возможно в том 
случае, если Вы выберете более дешевый авиатариф или воспользуетесь скидками на 
авиабилеты, которые предлагает наша компания или компания-авиаперевозчик.</p>

<h2>Заказ авиабилетов в Черногорию</h2>
<p>Покупка авиабилетов в Черногорию совершается в несколько этапов. Для начала 
нужно заказать авиабилет на подходящий рейс в Черногорию. Для этого необходимо 
ввести в поисковую форму страну, город или код аэропорта и дату вылета и нажать 
кнопку &quot;Поиск&quot;. Наша поисковая система работает в онлайн режиме круглосуточно, 
она обработает внесенные данные и выдаст все существующие варианты вылета в 
Черногорию на конкретную дату вылета от самых дешевых вариантов до более 
дорогих. После того, как из списка Вы выбрали самый подходящий рейс, нужно 
внести данные о пассажирах, покупателе билетов и способе оплаты. После 
подтверждения заказа билета на самолет в Черногорию, на Ваш электронный адрес 
придет письмо со всей необходимой информации о поездке. Этот документ называется 
&quot;лист бронирования&quot; и является подтверждением заказа на авиабилет.</p>

<h2>Выкуп авиабилета по номеру бронирования</h2>
<p>Лист бронирования – это официальный документ, который гарантирует Вам 
получение места на выбранный рейс при условии оплаты заказа. Его нужно 
распечатать или просто выписать номер бронирования, и по нему произвести оплату. </p>
<p>Заказ авиабилетов в Черногорию не подразумевает их обязательный выкуп, эта 
услуга бесплатна, Вы можете отказаться от покупки, либо повторно забронировать 
авиабилет на другую дату или рейс. <b>Цена авиабилета в Черногорию</b> из 
Украины включает тариф, сервисный сбор аэропорта, комиссию за оформление.</p>
<p>Если у Вас возникли вопросы относительно заказа и выкупа билета в Черногорию 
- обратитесь в службу поддержки по телефону и получите консультацию.</p>

<h2>Билеты на самолет в Черногорию</h2>
<p><b>Купить авиабилет</b> можно онлайн на нашем сайте. Но если возникнут 
сложности с выбором рейсов, предложенных системой бронирования авиабилетов, 
стоит обратиться в нашу службу поддержки и уточнить все вопросы, касающиеся с 
покупки билета. Операторы службы поддержки помогут выбрать самый удобный рейс, 
стыковочный аэропорт, <b>купить дешевле авиабилет в Черногорию</b>, заказать 
трансфер с учетом времени поездки. Вы можете забронировать билет с последующей 
оплатой или сразу оплатить через Интернет с помощью банковской карточки.</p>
<p>Проще всего <b>купить авиабилеты в Черногорию</b> онлайн, заполнив форму 
бронирования на нашем сайте. Оплату также можно осуществить по Интернет. Если 
Вам необходима помощь с выбором стыковочного аэропорта, хотите узнать, <b>
сколько стоит авиабилет</b>, как влияет сезонность на стоимость перелета, 
обратитесь в нашу службу поддержки. Также Вы можете забронировать авиабилеты 
онлайн либо заказать по телефону, а затем оформить покупку у нас в офисе.</p>
<p>С началом сезона отпусков на сайте можно заказать авиабилет на чартеры в 
Тиват от украинской авиакомпании &quot;Хорс&quot;, которая возобновила перелеты после 
небольшого перерыва, на самолете типа ВАЕ 146-300. Чартеры в вылетают из 
аэропорта &quot;Киев&quot;, что расположен в Жулянах, или Львова, это рейсы без пересадок. 
Есть возможность <b>купить авиабилеты на чартерные рейсы</b> и без в один конец 
либо туда и обратно. Можно купить авиабилет до Загреба, который связан 
авиасообщением с Тиват.</p>

<h2>Самолеты и авиарейсы в Черногорию</h2>
<p>Возможность международного перелета в Черногорию без пересадок предоставляют 
чартерные рейсы. Начиная с весны турфирмы предлагают купить авиабилеты на 
чартеры в Черногорию стоимость которых дешевле, чем на регулярный рейс. Самые 
популярные направления чартерных рейсов в Черногорию - это Подгорица и Тиват. 
Перелет осуществляется из Киева (Жуляны), Одессы, Харькова, Львова, Донецка 
самолетами Boeing 734 или Airbus A320/A321.</p>
<p>Прямых регулярных международных <a href="tivat.php">авиарейсов в Тиват</a> или Подгорицу нет. Летом 
можно купить авиабилеты на чартеры из Киева, Одессы, Львова, Винницы, Запорожья, 
Донецка, Харькова. Перелет осуществляют авиакомпании «МАУ» (самолетом 
Boeing-737), «Windrose» (Airbus A320/A321), «Air Onix» (Boeing -737), «Донбассаэро» 
(A-320/A-321/B-734) и «Хорс» (Airbus A-320). Авиабилеты на чартерные рейсы стоят 
дешевле регулярных. Перелет осуществляется без пересадок и занимает около 2,5 
часов.<br>
Помимо отдыхающих в Черногории, в аэропорт Тиват прилетают туристы, которые 
потом на автобусе и пароме добираются в Черногорию до города Дубровник, 
расположенного в 80 км. </p>

<h4>Достопримечательности и курорты Черногории</h4>
<p>Республика Черногория – бывшая республика Югославии, экономика которой 
направлена на международный туризм. Территорию страны можно условно разделить на 
три направления - пляжный отдых на Адриатике, культурный туризм в центре страны 
и горнолыжный отдых на востоке. Граждане Украины могут находиться в Черногории 
без виз до 30 дней.</p>
<p>Подгорица – это административная и деловая столица Черногориии, в 12 км от 
нее расположен международный аэропорт, из которого можно добраться на любой 
курорт Черногории или европейский город. В 170 км от Подгорицы находится 
известный черногорский горнолыжный курорт Жабляк. В 31 км от Подгорицы находится 
культурная и историческая столица Черногории -Цетинье. Цетинье – это город-музей 
под открытым небом. А в местном монастыре хранятся одни из самых почитаемых 
святынь христианского мира: нетленная правая рука Иоанна Крестителя и частицы 
Святого Креста.</p>
<p>Туристической столицей Черногории считается Будва. Это 11 км ухоженных 
песчаных пляжей на берегу Адриатического моря и развитая курортная 
инфраструктура. Все это органично сочетается со старым городом с черепичными 
крышами и крепостными стенами 15 века. </p>
<p>Если Вы решили отдохнуть на морских курортах Черногории, то лучше <b>купить 
авиабилеты</b> в Тиват, а не в Подгорицу. Тиват находится всего в 20 км от Будвы 
и в 10 км от Котора. Аэропорт расположен прямо на побережье Адриатического моря. 
И первое, что после облаков видят в иллюминаторе самолета прилетающие туристы - 
просто нереальную красоту гор и Боко-Которского залива.</p>
<p>Одним из самых красивых курортных городов на побережье является Герцег-Нови. 
Из-за большого количество солнечных дней в году его еще называют «Город Солнца». 
Уникальный климат, идеальный для отдыха с детьми, способствовал еще одному 
названию города – «Ботанический сад Черногории». Герцег-Нови – очень зеленый 
город, засаженный множеством экзотических деревьев и цветов. Особенно местные 
жители любят мимозу. В честь нее в феврале проводится ежегодный фестиваль 
Мимозы. </p>
<p>Рядом с Герцег-Нови находится Игало — крупнейший оздоровительный курорт. 
Высококлассные специалисты, используя современное оборудование и природные 
богатства региона (мягкий климат, море, лечебные грязи и минеральную воду), 
успешно справляются со многими заболеваниями.</p>

<h3>Аэропорты Черногории</h3>
<p>Самый крупный международный аэропорт Черногории находится в 12 км от 
Подгорицы, он соединен сообщением со всей Европой, а также из аэропорта Вы 
можете добраться на автобусе до пляжных курортов Тивата или горнолыжных трас 
курорта Жабляк. </p>
<p>Если Вы решили отдохнуть на морских курортах Черногории, то лучше купить 
авиабилеты в Тиват, а не в Подгорицу. Тиват находится всего в 20 км от Будвы и в 
10 км от Котора.</p>
<p>Аэропорт расположен прямо на побережье Адриатического моря. И первое, что 
после облаков видят в иллюминаторе самолета прилетающие туристы - просто 
нереальную красоту гор и Боко-Которского залива.</p>
<p>Из международного аэропорта Тиват осуществляются ежедневные авиарейсы в 
Подгорицу и Белград и регулярные международные рейсы в аэропорты
<a href="http://echarter.com.ua/regular-flights/paris.php">Парижа</a>,
<a href="http://echarter.com.ua/regular-flights/rome.php">Рима</a>, Франкфурта, 
Вены, Будапешта, Любляны и
<a href="http://echarter.com.ua/regular-flights/moscow.php">Москвы</a>. 
Существуют сезонные авиарейсы
<a href="http://echarter.com.ua/regular-flights/prague.php">в Прагу</a>. 80 % 
пассажиропотока приходится на курортный сезон, когда аэропорт принимает 
множество чартерных рейсов со всей Европы.</p>
					</div>
				</div>
			</div>
		</div>
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
                    $(this).parent().children('.page').slideToggle(300);
                });
            });

            $(document).click(function(event) {
                //if(!$(event.target).closest('.top_menu_item').length) {
                //    if($('.top_menu_item').parent('li').hasClass('active')) {
                //        $('.top_menu_item').parent('li').removeClass('active');
                //    }
                // }
            })

        });
    </script>
	</body>
</html>