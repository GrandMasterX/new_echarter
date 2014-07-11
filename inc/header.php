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
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?113"></script>
    <script type="text/javascript">
        VK.init({apiId: 4408632, onlyWidgets: true});
    </script>
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
        <img alt="" src="/static/img/phone_big_1.png">
    </div>
</div>
<div class="container page_2" style="margin: 0px auto;text-align: center;">
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
                                }, '1741423617');
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
                    <? //$this->renderPartial('/forms/popup_selectors');?>
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
                                }, '1841423617');
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
                    <? //$this->renderPartial('/forms/popup_selectors');?>
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
                                }, '1541423617');
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
                    <? //$this->renderPartial('/forms/popup_selectors');?>
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
            <span class="price_holder"><span class="from">от</span> </br>1809.86 грн</span>
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
                                    pageTitle:'Киев - Бургас - Киев от 1809.86 грн',
                                    pageDescription:'Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, пятницам и воскресеньям в международный аэропорт «Сарафово». Вылет из Киева утром в 11:00. Из Бургаса в 08:05.',
                                    pageImage: 'http://echarter.com.ua/static/images/pics/byrgas3.png',
                                    text:'Прямой чартерный авиарейс с 25.05.2014 по 26.10.2014 из Киева. Рейс выполняется из международного аэропорта Борисполь (Терминал D) по вторникам, пятницам и воскресеньям в международный аэропорт «Сарафово». Вылет из Киева утром в 11:00. Из Бургаса в 08:05.'
                                }, '1241023617');
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

                                <p><b>Полная стоимость перелета туда и обратно от 3381.66 грн. (включая все таксы и
                                        сборы). </b></p>
                            </div>
                        </div>
                    </div>
                    <input value="Рассписание/Бронь" class="order_ticket" type="submit" style="margin-left: 20px;width: inherit;">
                    <? //$this->renderPartial('/forms/popup_selectors');?>
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
                                }, '1041423617');
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
                    <? //$this->renderPartial('/forms/popup_selectors');?>
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

            <div class="popup order" style="display:none;">
                <div class="popup_wrap">
                    <div class="top clearfix">
                        <div class="close_popup right"><span>Популярное направление</span></div>
                    </div>
                    <div class="center clearfix">
                        <div class="block_foto left">
                            <div class="img">
                                <img alt="" src="/images/popup_more.png"/>
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
                                }, '1101403617');
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
                    <? //$this->renderPartial('/forms/popup_selectors');?>
                    <div class="footer_popup"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
