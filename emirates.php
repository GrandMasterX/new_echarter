<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Чартеры в ОАЭ. Авиабилеты на чартерные рейсы в ОАЭ</title>
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

<h1>Авиабилеты на прямой рейс чартера в ОАЭ</h1>
<p>&nbsp;</p>
<p>Объединенные Арабские Эмираты – молодое государство с древнейшей культурой и 
историей. Государственные особенности делают отдых в ОАЭ безопасным и очень 
спокойным.</p>
<p>Это страна с высочайшим уровнем жизни, стабильной политической и 
экономической обстановкой. Прекрасный климат, чистое и теплое море, 
суперсовременные отели с отличным сервисом, развитая инфраструктура – все это 
отдых в ОАЭ. Перелет на самолете это наиболее доступный вариант как по цене, так 
и по времени, а прибытие в Арабские Эмираты будет в аэропорты Дубая либо Шарджи, 
к тому же это и будут наиболее популярные города с точки зрения туризма и 
отдыха.</p>
<p>&nbsp;</p>
<h2>Чартерные рейсы самолетов в ОАЭ</h2>
<p>На сайте мы предоставляем возможность клиентам не только купить авиабилеты на 
чартер, но также предварительно ознакомиться с подробным расписанием самолетов, 
узнать о наличии свободных мест, авиатарифы и получить дополнительную информацию 
о чартерных рейсах.</p>
<p>Самолетом долететь из Украины в ОАЭ возможно из нескольких городов с пересадками 
либо на прямом рейсе из Киева. Авиа-перелеты осуществляет известная компания, 
предлагая рекордно низкие цены на авиабилеты.</p>
<p>На сайте вы можете забронировать билет на прямой чартерный рейс самолета в ОАЭ, 
а после его выкупить, оплатив наличными или с помощью кредитной карты.</p>
<p>Также у нас вы можете заказать билеты на другие виды транспорта из любого города 
Украины. Гибкая система скидок позволит вам сэкономить средства и сделает 
поездку более приятной.</p>
<p>&nbsp;</p>
<h2>Как забронировать авиабилет на чартер в ОАЭ</h2>
<p>У нас на сайте мы предоставляем возможность клиентам не только купить авиабилеты 
на чартер в Аэропорт <a href="dubai.php">Дубай</a> либо
<a href="sharjah.php">Шарджа</a>, но также узнать расписание чартеров и данные о наличии 
свободных мест в самолетах. Данная услуга предоставляется бесплатно.</p>
<p>Заказать авиабилет на прямой чартер в ОАЭ можно по телефону. Для этого 
пассажирам желательно заранее подобрать наиболее удобный рейс, определиться со 
временем и датой вылета. Также следует указать при заказе билета класс 
обслуживания и авиа-тариф, ведь от этого может зависеть цена.</p>
<p>Мы предоставляем пассажирам всю справочную информацию об условиях авиа-перелета 
современными лайнерами и условия возврата денег в случае переноса времени или 
даты вылета.</p>
<p>&nbsp;</p>
<h2>Как купить авиабилеты на чартеры в ОАЭ</h2>
<p>Для покупки или бронирования авиабилетов на рейсы в ОАЭ, в форму поиска 
необходимо ввести страну, город и планируемую дату вылета, далее нажмите кнопку 
&quot;Поиск&quot;.</p>
<p>Поисковая система за секунду подберет вам все возможные варианты чартеров в ОАЭ 
из Украины, от наиболее экономных тарифов до более дорогих. Естественно наиболее 
подходящим будет прямой рейс чартера в аэропорт ОАЭ.</p>
<p>Часто мы предоставляем пассажирам возможность купить авиабилеты обратно, или же 
подберем рейс в другую страну. При этом вы имеете возможность узнать более 
подробную информацию не только о стране и городе прибытия, но и об аэропортах и 
трансфере в другие города.</p>
<p>Когда вы подберете удобный для себя авиарейс в Арабские Эмираты, класс и место полета, 
забронируйте авиабилет и выберите способ оплаты. Данная услуга предоставляется 
бесплатно.</p>
<p>Обязательно ознакомьтесь на сайте с условиями осуществления операции, 
внимательно прочитайте условия выкупа авиабилета на чартер, правила его возврата 
или обмена, ознакомьтесь с условиями выбранного тарифа.</p>
<p>Если вы только забронировали авиабилет, то имеете право отказаться от него или 
изменить дату и время вылета. Данная услуга бесплатна и не подразумевает оплату 
штрафов или неустоек.</p>
<p>В стоимость авиаперелета в аэропорты ОАЭ (Дубай либо Шарджа) включены все обязательные платежи, 
включая сервисный сбор в аэропорту и комиссионную выписку билета.</p>
<p>Цена авиабилета на чартер будет с начислением аэропортового и топливного сбора, 
но вы сможете самостоятельно убедится, что это действительно дешево, при чем 
намного дешевле, чем на самолеты с пересадкой.</p>
<p>После того, как вы забронируете и подтвердите заказ авиабилета на прямой чартер 
в Египет, на ваш электронный ящик придет письмо о подтверждении бронирования.</p>
<p>При возникновении каких-либо вопросов по бронированию и выкупу авиабилета в ОАЭ 
-
звоните в нашу службу поддержки, где вам предоставят бесплатно исчерпывающую 
информацию о других способах оплаты билетов либо подскажут адрес офиса, в 
котором можно купить авиабилет на прямой чартерный рейс, без досрочного заказа 
по Интернет.</p>
<p>&nbsp;</p>
<h5>Оплата авиабилетов на чартер по Интернет</h5>
<p>На сайте предлагается услуга &quot;электронный авиабилет&quot;, с помощью которой вы 
имеете возможность оплатить авиабилет на прямой чартер в ОАЭ через эквайринг, имея банковскую карту.</p>
<p>При покупке билетов через Интернет вы получите билет на свой почтовый ящик, 
после чего с вами по телефону свяжется служба поддержки авиакомпании.</p>
<p>Полученный по электронной почте билет необходимо распечатать и предъявить при 
регистрации на рейс в аэропорту. Если вы не распечатали билет – достаточно будет 
показать сотруднику аэропорта при посадке на рейс текст смс-сообщения в 
мобильном телефоне для авторизации вас как пассажира, но для этого вам 
необходимо получить персональное уведомление о том, что такое допускается на 
вашем рейсе.</p>
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