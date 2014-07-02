<div class="elaboration" style="display: none;">
    <input type="text" id="there_trip" name="dep_date" class="dep_date hdata" placeholder="" value="">
    <input type="text" name="ret_date" id="back_trip" class="ret_date hdata" placeholder="" value="">
    <div class="selectblock" style="left:-19px;top:4px;">
        <input type="hidden" class="TiketsCounter input" id="ticketAmount" value="1">
        <span id="ticketCountNew">1</span>
        <span id="passengerTitle">пассажир</span>
    </div>
    <div class="disocuntBlock" style="display: none;background-color: white;margin-top: 4px;margin-left: -1px;padding-left: 5px;padding-right: 5px;display: none;border: 1px solid grey;z-index: 200;width: 182px;">
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
                        для проверки  наличия возрастных скидок у перевозчика для пассажиров с местами (дети, молодежь, пожилые и другие)											</div>
                </td>
                <td class="disc2" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                    <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                        для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)											</div>
                </td>
                <td class="disc3" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                    <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                        для проверки скидок для студентов можно внести № документа один или оба											</div>
                </td>
                <td class="disc4" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                    <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                        для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)											</div>
                </td>
                <td class="disc5" style="vertical-align:top; padding-bottom: 0px; display:none;">
                    <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                        для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)											</div>
                </td>
            </tr>
            <tr>
                <td colspan="5" style="border-top:1px solid grey;">
                    <div class="disocuntBlockClose" style="position: relative;float: right;margin-right: -5px;"><img src="http://e-travels.com.ua/images/form/close_new.png" alt="">применить</div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <input value="Поиск" class="get_ticket" style="padding: 0px 22px 0px 18px;border: none;outline: none;font-size: 14px;color: #fff;line-height: 30px;height: 30px;width: 157px;display: block;text-align: center;text-decoration: none;background-color: #3b7db5;text-transform: uppercase;margin-top: 10px;cursor: pointer;" type="submit">
</div>