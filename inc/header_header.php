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
