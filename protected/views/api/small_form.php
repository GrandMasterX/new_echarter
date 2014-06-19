<div class="container page_2">
<div class="wrap" style="padding: 40px 0px 5px 122px;">
<style>
    .hdata{background: url('/static/images/u28.png') no-repeat!important;
        background-color: white!important;
        border: 1px solid #BEB8B8;
        background-position: 5px center!important;
        background-size: 15px!important;
        width: 114px!important;
        padding-left: 26px!important;}
    div.container_form.clearfix.new div.element{position: relative; float:left;margin-right: 50px; top:-25px;}
    div.container_form.clearfix.new label{top: -24px; display: block;}
    input.town{width: 192px;
        padding: 2px 5px;
        border: 1px solid #BEB8B8;}
</style>
<div class="container_form clearfix new">
    <form class="clearfix">
        <?php
        $startCityName = empty($startCityName)?'':$startCityName;
        $endCityName = empty($endCityName)?'':$endCityName;
        $startCityId = empty($startCityId)?'':$startCityId;
        $endCityId = empty($endCityId)?'':$endCityId;
        $static_na_kids_no_seats_lgnd3 = 'Если вы планируете путешествовать с маленькими детьми, рекомендуем внести данные, благодаря которым система автоматически проверит наличие специальных тарифов (без места) на выбранном вами маршруте. Обратите внимание на необходимость выбора двух и более пассажиров для получения спец. тарифа. Вне зависимости от тарифа система предложит выбрать место на карте транспортного средства; возможно, оно будет свободно.';
        $static_na_adult_lgnd3 = 'Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.';
        $static_na_students_legnd3 = 'Некоторые перевозчики предоставляют скидки для студентов. Данный функционал разработан для возможности использовать скидки на проезд студентами. Для проверки наличия тарифа на выбраном вами направлении достаточно внести номер студенческого билета, и система автоматически проверит наличие студенческой скидки и подберет наиболее подходящий тариф.';
        $static_na_kids_no_seats_lgnd2 = 'для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)';
        $static_na_ctgs_mature_legnd2 = 'для проверки  наличия возрастных скидок у перевозчика для пассажиров с местами (дети, молодежь, пожилые и другие)';
        $static_na_lg_twonbs2 = 'для проверки скидок для студентов можно внести № документа один или оба';
        $passangers_rus =array('пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров');
        ?>
        <div class="element from pointCheck">
            <label>Откуда</label>
            <input id="from" type="text" name="from" class="town" placeholder="Введите страну или город" value="<?=$startCityName?>" />
            <input id="startCityId" type="hidden" name="startCityId" class="hid_city_id" value="<?=$startCityId?>" />
            <div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
        </div>
        <div class="element to pointCheck">
            <label>Куда</label>
            <input id="to" type="text" name="to" class="town" placeholder="Введите страну или город" value="<?=$endCityName?>" />
            <input id="endCityId" type="hidden" name="endCityId" class="hid_city_id" value="<?=$endCityId?>" />
            <div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
        </div>


        <div class="element dep item_1 clearfix">
            <label>Дата отправления</label>
            <input type="text" id="tripDate" name="dep_date" class="dep_date hdata" placeholder="" value="" />
            <img src="/images/data-check.png" alt="" class="data-check">
        </div>

        <div class="element ret item_1  clearfix">
            <label>Обратно</label>
            <input type="text" name="ret_date" id="backTripDate" class="ret_date hdata" placeholder="" value="" />
            <img src="/images/data-check.png" alt="" class="data-check del">
        </div>

        <div class="block buttons right">
            <input id="searchButton" class="sbm" type="submit" value="Поиск рейсов" style=" margin-right: 143px; margin-top: -7px; margin-bottom: 12px; " />
        </div>

        <div class="selectblock" style=" position: absolute; margin: 0px; margin-top: 39px; " style= >
            <input type="hidden" class="TiketsCounter input" id="ticketAmount" value="1" />
            <span id="ticketCountNew">1</span>
            <span id="passengerTitle"> Пассажир</span>
        </div>
        <div class="disocuntBlock" style="margin-left: 0px;margin-top: 69px;">
            <input type="hidden" id="totalTicketsAmount" value="1" />
            <input type="hidden" id="discTicketsAmount" value="0" />
            <div class="countFrameSet" style="border-bottom: 1px solid grey;margin-bottom: 7px;">
                <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_adult_lgnd3?></div></div>
                Взрослые<br />
                <span>(25-60 лет)</span>
                <div class="countFrame">
                    <div class="countFrameLeft" id="discGroupe0"> </div>
                    <input type="text" value="1"  class="birthday" id="discGroupe0" maxlength="2" readonly />
                    <div class="countFrameRight" id="discGroupe0"> </div>
                </div>
            </div>
            <div style="color: grey;font-size: 13px;padding-left: 17px;">Возможные скидки</div>
            <div class="countFrameSet" style="">
                <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_adult_lgnd3?></div></div>
                Дети<br />
                <span>(2-12 лет)</span>
                <div class="countFrame">
                    <div class="countFrameLeft" id="discGroupe1" data-target="disc1"> </div>
                    <input type="text" value="0" class="birthday" id="discGroupe1" maxlength="2" readonly />
                    <div class="countFrameRight" id="discGroupe1" data-target="disc1"> </div>
                </div>
            </div>
            <div class="countFrameSet" style="">
                <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_kids_no_seats_lgnd3?></div></div>
                Дети без места<br />
                <span>(2-5 лет)</span>
                <div class="countFrame">
                    <div class="countFrameLeft" id="discGroupe2" data-target="disc2"> </div>
                    <input type="text" value="0" class="birthday" id="discGroupe2" maxlength="2" readonly />
                    <div class="countFrameRight" id="discGroupe2" data-target="disc2"> </div>
                </div>
            </div>
            <div class="countFrameSet" style="">
                <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_students_legnd3?></div></div>
                Студенты<br />
                <span>(16-25 лет)</span>
                <div class="countFrame">
                    <div class="countFrameLeft" id="discGroupe3" data-target="disc3"> </div>
                    <input type="text" value="0" class="birthday" id="discGroupe3" maxlength="2" readonly />
                    <div class="countFrameRight" id="discGroupe3" data-target="disc3"> </div>
                </div>
            </div>
            <div class="countFrameSet" style="">
                <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_adult_lgnd3?></div></div>
                Молодежь<br />
                <span>(12-25 лет)</span>
                <div class="countFrame">
                    <div class="countFrameLeft" id="discGroupe4" data-target="disc4"> </div>
                    <input type="text" value="0" class="birthday" id="discGroupe4" maxlength="2" readonly />
                    <div class="countFrameRight" id="discGroupe4" data-target="disc4"> </div>
                </div>
            </div>
            <div class="countFrameSet" style="">
                <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_adult_lgnd3?></div></div>
                Пожилые<br />
                <span>(60+ лет)</span>
                <div class="countFrame">
                    <div class="countFrameLeft" id="discGroupe5" data-target="disc5"> </div>
                    <input type="text" value="0" class="birthday" id="discGroupe5" maxlength="2" readonly />
                    <div class="countFrameRight" id="discGroupe5" data-target="disc5"> </div>
                </div>
            </div>
            <table class="discountsTbl" cellpadding="0" cellspacing="0" style="display:none;">
                <tr>
                    <td colspan="5" style="background-color: #41a1e0;border-bottom: 1px solid #41a1e0;color: white;">Льготные категории пассажиров</td>
                </tr>
                <tr>
                    <td class="disc1" style="vertical-align: top;background-color: #e1eff3;display:none;">
                        <div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                            <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_adult_lgnd3?></div></div>
                        </div>Дети <br /><span style="padding-left: 16px;">(от 2 до 12 лет)</span>
                    </td>
                    <td class="disc2" style="vertical-align: top;background-color: #e1eff3;display:none;">
                        <div>
                            <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                            <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_kids_no_seats_lgnd3?></div></div>
                        </div>
                        Дети без места <br /><span style="padding-left: 16px;">(до 2 - 5 лет)</span>
                    </td>
                    <td class="disc3" style="vertical-align: top;background-color: #e1eff3;display:none;">
                        <div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                            <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_students_legnd3?></div></div>
                        </div>
                        Студенты <br /><span style="padding-left: 16px;">(от 16 до 25 лет)</span>
                    </td>
                    <td class="disc4" style="vertical-align: top;background-color: #e1eff3;display:none;">
                        <div>
                            <img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                            <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_adult_lgnd3?></div></div>
                        </div>
                        Молодежь <br /><span style="padding-left: 16px;">(от 16 до 25 лет)</span>
                    </td>
                    <td class="disc5" style="vertical-align: top;background-color: #e1eff3;display:none;">
                        <div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
                            <div class="ask-content" style="margin-top:-76px;"><div><?=$static_na_adult_lgnd3?></div></div>
                        </div>
                        Пожилые <br /><span style="padding-left: 16px;">(60+ лет)</span>
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
                            <?=$static_na_ctgs_mature_legnd2?>
                        </div>
                    </td>
                    <td class="disc2" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                        <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                            <?=$static_na_kids_no_seats_lgnd2?>
                        </div>
                    </td>
                    <td class="disc3" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                        <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                            <?=$static_na_lg_twonbs2?>
                        </div>
                    </td>
                    <td class="disc4" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
                        <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                            <?=$static_na_kids_no_seats_lgnd2?>
                        </div>
                    </td>
                    <td class="disc5" style="vertical-align:top; padding-bottom: 0px; display:none;">
                        <div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
                            <?=$static_na_kids_no_seats_lgnd2?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="border-top:1px solid grey;">
                        <div class="disocuntBlockClose" style="position: relative;float: right;margin-right: -5px;"><img src="http://e-travels.com.ua/images/form/close_new.png" alt="" />применить</div>
                    </td>
                </tr>
            </table>
        </div>


    </form>


</div>
</div>
</div>