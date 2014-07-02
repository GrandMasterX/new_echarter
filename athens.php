<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Авиабилеты в Афины</title>
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

<h1>Авиабилеты в Афины</h1>

<p>Если вы хотите <b>купить авиабилет из Украины в Афины</b> с помощью нашего 
сайта, вам необходимо заполнить форму онлайн бронирования. Это сэкономит вам 
время и деньги.</p>
<p>Компания &quot;Хорс&quot; осуществляет авиаперевозку пассажиров в столицу Греции из 
трех городов Украины: Киева, Одессы и Львова. </p>
<p><b>Купить билеты на самолет в Афины</b> или другие страны мира можно с 
помощью автоматической системы бронирования.</p>
<br /><br />	
<a name="low-cost"></a>

<br /><br />
<p>Также на сайте можно заказать трансфер автобусом или автомобилем к аэропорту 
из любого города Украины, или переезд между вокзалами. При этом вам не нужно 
оплачивать дополнительный комиссионный сбор.</p>		
<p>Если у вас возникли дополнительные вопросы, свяжитесь со службой поддержки. 
Наши специалисты помогут вам, предоставив исчерпывающую информацию.</p>

<h2>Забронировать авиабилет в Афины</h2>
<p>Внимательно изучите и заполните специальную форму для бронирования 
авиабилетов на нашем сайте. Обратите внимание, что поля, помеченные звездочкой, 
обязательны к заполнению. Выберите перед бронированием, какой маршрут вас 
устраивает: в одну сторону, туда и обратно или сложный маршрут, подразумевающий 
возможные пересадки.</p>
<p>После обработки вашего заказа система покажет вам все возможные варианты и 
информацию обо всех рейсах. Рейсы сортируются по ценовой политике.<br>
</p>
<h2>Купить авиабилет в Афины</h2>
<p>После выбора рейса в Афины, нажмите кнопку &quot;Бронировать&quot;. В лист бронирования 
впишите все данные пассажира и форму оплаты авиабилета.</p>
<p>Прочитайте внимательно условия бронирования, покупку авиабилетов и прочие 
документы, только после этого ставьте галочку &quot;Я принимаю условия…&quot; Подтвердите 
свой заказ, а через несколько секунд на вашу электронную почту придет лист 
бронирования со всей информацией. Это будет означать что Вы купили авиабилет.</p>
<p>Процесс покупки авиабилета будет завершен.</p>

<h2>Оплата авиабилетов - онлайн</h2>
<p>Оформить <a href="http://echarter.com.ua/greece.php">авиабилеты в Грецию</a> 
вы можете в удобное для себя время, дома или на работе. Онлайн бронирование 
сэкономит ваше время, а оплата билета происходит через банковскую карту. Не 
забудьте проверить правильность указания вашего электронного адреса, именно на 
него вы получите подтверждение о бронировании авиабилета в Афины.</p>
<p>Электронный билет, отправленный на ваш почтовый ящик, необходимо распечатать. 
Как вариант – при регистрации в аэропорту можно показать смс-сообщение на вашем 
телефоне, подтверждающее заказ и оплату авиабилета.</p>

<h2>Цена авиабилетов в Афины</h2>
<p>Стоимость авиа-перелета в Афины на самолете из Украины&nbsp; зависит от 
класса полета и некоторых других факторов. На нашем сайте вы получите 
исчерпывающую информацию о рейсе, классе, посадочном месте в самолете. Все 
консультации о цене билетов компании &quot;Хорс&quot;, которая осуществляет авиаперелеты в 
Афины из Украины, можно также получить в службе поддержки</p>
<p>Стоимость авиабилета в Афины - 125 Евро. Оплатить можно через публичные 
терминалы оплаты, в собственных и партнерских кассах компании, через банки либо 
на сайте по карточке - онлайн.</p>

<h4>Доставка авиабилетов курьером</h4>
<p>В том случае, если у клиента нет возможности оплаты забронированного билета 
по интернет, наша компания предоставляет специальный сервис – доставка 
авиабилетов курьером.</p>
<p>Заказанный авиабилет в Афины из Украины вы можете получить прямо домой. Эта 
услуга наиболее востребована для жителей Киева, но также мы можем его доставить 
в любой город Украины - почтой, курьером либо другим способом. Это поможет вам 
сэкономить свое время.</p>

<h3>Аэропорт Афин</h3>
<p>Афинский международный аэропорт &quot;Элефтериос Венизелос&quot; - крупный аэропорт, 
который обслуживает столицу и Аттику.<br>
является гражданским аэропортом, обслуживает город Афины и Аттику.</p>
<p>Он был открыт в 2001 году, и его пропускная возможность достигла 16 млн. 
пассажиров в год.</p>
<p>Свое название аэропорт Афин получил в честь греческого политика Элефтериоса 
Венизелоса.</p>
<p>Аэропорт Афин принимает международные рейсы из Европы и Ближнего Востока.</p>
<p>Попасть в Афины из аэропорта можно на метро, по железной дороге или 
автомагистрали.</p>
<p>Находится он далеко от города, но проезд очень удобен и не займет много 
времени.</p>
<p>Если вы по прилете в аэропорт захотите воспользоваться услугами такси, то 
следует знать, что существует установленный тариф на маршрут Аэропорт-Афины. Но 
с вас могут запросить цену выше, поэтому стоит торговаться.</p>
<p>Такси берет только 4 пассажиров, если полиция остановит машину с большим 
количеством сидящих – виновником признает пассажиров.</p>
<p>Из столичного аэропорта до Афин функционирует отдельная ветка метро. Первый 
утренний поезд отправляется в 6.30, последний – в 23.30. Ходят поезда с 
интервалом в полчаса. Конечная станция – Монастираки, но можно выйти на любой 
промежуточной остановке в случае необходимости.</p>
<p>Из города в аэропорт поезда в метро начинают курсировать с 5.50 до 22.58.</p>
<p>При проезде в метро билеты нужно закомпостировать, чтобы не платить штраф.</p>
<p>Из аэропорта можно добраться в город также электричкой Proastiakos. Она идет 
прямо на железнодорожный вокзал (станция называется Ларисса). Можно сделать 
пересадку на вторую линию метро, чтобы попасть на вокзал с поездами, идущими в 
северную Грецию.</p>
<p>Курсируют электрички каждые 15 минут. От аэропорта до ж/д вокзала дорога 
занимает около 40 минут. Пригородные электропоезда от аэропорта до Афин 
курсируют с 6.48 до 20.14. В обратном направлении – с 6.06 до 19.36.</p>
<p>Также из аэропорта Афин можно попасть в южную Грецию (до Коринфа). Электрички 
отправляются каждые два часа, через 90 минут вы уже попадете в пункт назначения.<br>
Очень удобно добираться из аэропорта до города автобусом. Автобусные остановки 
обозначены желтым цветом.</p>
<p>Из аэропорта Афин можно доехать автобусом до Ethniki Amina (маршрут Х94), до 
площади Синтагма (круглосуточный экспресс Х95), до порта Пирей (круглосуточный 
экспресс Х96).<br>
Автобусным маршрутом Х93 можно добраться из аэропорта к двум столичным 
автовокзалам.</p>
<p>Билеты на автобусные маршруты из аэропорта в Афины можно купить у водителя, 
на остановках общественного транспорта в билетных киосках или на станциях метро.<br>
Из аэропорта Афин осуществляются междугородние автобусные рейсы в порты Рафине и 
Лаврионе. Их остановки расположены чуть дальше, чем остановки городского 
общественного транспорта.</p>
<p>До Рафина из аэропорта с остановкой в Лутсе автобусы начинают курсировать с 
6.00 до 21.20 каждые 40 минут.</p>
<p>От выхода №3 отправляются автобусы на Лаврион.</p>

<p><b>Достопримечательности Афин</b></p>
<p>Обязательно посетите в Афинах развалины Акрополя, остатки Парфенона и 
Эрехтеона, храм богини Ники. Особого внимания заслуживает византийская церковь и 
собор Метрополис. Посетите также турецкий центр Плака, почти не тронутый 
цивилизацией.</p>
<p>И конечно пожелаем вам удачного перелета и самых лучших впечатлений о Греции.</p>
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