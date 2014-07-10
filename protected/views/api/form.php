<?
$static_na_kids_no_seats_lgnd3 = 'Если вы планируете путешествовать с маленькими детьми, рекомендуем внести данные, благодаря которым система автоматически проверит наличие специальных тарифов (без места) на выбранном вами маршруте. Обратите внимание на необходимость выбора двух и более пассажиров для получения спец. тарифа. Вне зависимости от тарифа система предложит выбрать место на карте транспортного средства; возможно, оно будет свободно.';
$static_na_adult_lgnd3 = 'Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.';
$static_na_students_legnd3 = 'Некоторые перевозчики предоставляют скидки для студентов. Данный функционал разработан для возможности использовать скидки на проезд студентами. Для проверки наличия тарифа на выбраном вами направлении достаточно внести номер студенческого билета, и система автоматически проверит наличие студенческой скидки и подберет наиболее подходящий тариф.';
$static_na_kids_no_seats_lgnd2 = 'для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)';
$static_na_ctgs_mature_legnd2 = 'для проверки  наличия возрастных скидок у перевозчика для пассажиров с местами (дети, молодежь, пожилые и другие)';
$static_na_lg_twonbs2 = 'для проверки скидок для студентов можно внести № документа один или оба';
$passangers_rus =array('пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров');
?>
<body>
	<div class="slider clearfix">
		<?php $this->widget('application.components.widgets.PopularBlockWidget'); ?>
		<div class="form right clearfix" style="margin-top: 22px;">
			<div class="tabs clearfix">
				<div class="right menu_cont">
					<!--<div class="block active"><a href="javascript:;">Чартеры</a></div>-->
					<!--<div class="block"><a href="javascript:;">Все рейсы</a></div>-->
				</div>
			</div>

			<div class="container_form clearfix">
				<div class="tabs_menu">
					<div style="display: block;" class="clearfix item">
						<form class="clearfix">
							<div class="block clearfix">
								<div class="element left from pointCheck">
									<label>Откуда</label>
									<input id="from" type="text" name="from" autocomplete="off" class="town" placeholder="Введите страну или город" value="" />
									<input id="startCityId" type="hidden" name="startCityId" class="hid_city_id" value="" />
									<div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
								</div>
								<div class="element right to pointCheck">
									<label>Куда</label>
									<input id="to" type="text" name="to" autocomplete="off" class="town" placeholder="Введите страну или город" value="" />
									<input id="endCityId" type="hidden" name="endCityId" class="hid_city_id" value="" />
									<div class="autocompl-block" style="position:absolute;z-index: 10000!important;"></div>
								</div>
							</div>

							<label style="margin-left: 19px; color: #fff; line-height: 16px;
								 text-align: left; display: block; padding-bottom: 3px;">Категории пассажиров</label>
							<div class="selectblock header" style="" style= >
								<input type="hidden" class="TiketsCounter input" id="ticketAmount" value="<?= isset($_POST['totalTicketsAmount']) ? $_POST['totalTicketsAmount'] : 1 ?>" />
								<span class="ticketCountNew"><?= isset($_POST['totalTicketsAmount']) ? $_POST['totalTicketsAmount'] : 1 ?></span>
								<span id="passengerTitle">
									<?
									$index = isset($_POST['totalTicketsAmount'])?intval($_POST['totalTicketsAmount']):1; echo $passangers_rus[$index];
									?>
								</span>
							</div>
							<div class="disocuntBlock header">
								<input type="hidden" id="totalTicketsAmount" value="1" />
								<input type="hidden" id="discTicketsAmount" value="0" />
								<div class="countFrameSet header" style="border-bottom: 1px solid grey;margin-bottom: 7px;">
									<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
									<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_adult_lgnd3 ?></div></div>
									Взрослые<br />
									<span>(25-60 лет)</span>
									<div class="countFrame">
										<div class="countFrameLeft" id="discGroupe0" data-target="disc0"> </div>
										<input type="text" value="1"  class="birthday" id="discGroupe0" maxlength="2" readonly />
										<div class="countFrameRight" id="discGroupe0" data-target="disc0"> </div>
									</div>
								</div>
								<div style="color: grey;font-size: 13px;padding-left: 17px;">Возможные скидки</div>
								<div class="countFrameSet header" style="">
									<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
									<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_adult_lgnd3 ?></div></div>
									Дети<br />
									<span>(2-12 лет)</span>
									<div class="countFrame">
										<div class="countFrameLeft" id="discGroupe1" data-target="disc1"> </div>
										<input type="text" value="0" class="birthday" id="discGroupe1" maxlength="2" readonly />
										<div class="countFrameRight" id="discGroupe1" data-target="disc1"> </div>
									</div>
								</div>
								<div class="countFrameSet header" style="">
									<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
									<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_kids_no_seats_lgnd3 ?></div></div>
									Дети без места<br />
									<span>(2-5 лет)</span>
									<div class="countFrame">
										<div class="countFrameLeft" id="discGroupe2" data-target="disc2"> </div>
										<input type="text" value="0" class="birthday" id="discGroupe2" maxlength="2" readonly />
										<div class="countFrameRight" id="discGroupe2" data-target="disc2"> </div>
									</div>
								</div>
								<div class="countFrameSet header" style="">
									<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
									<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_students_legnd3 ?></div></div>
									Студенты<br />
									<span>(16-25 лет)</span>
									<div class="countFrame">
										<div class="countFrameLeft" id="discGroupe3" data-target="disc3"> </div>
										<input type="text" value="0" class="birthday" id="discGroupe3" maxlength="2" readonly />
										<div class="countFrameRight" id="discGroupe3" data-target="disc3"> </div>
									</div>
								</div>
								<div class="countFrameSet header" style="">
									<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
									<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_adult_lgnd3 ?></div></div>
									Молодежь<br />
									<span>(12-25 лет)</span>
									<div class="countFrame">
										<div class="countFrameLeft" id="discGroupe4" data-target="disc4"> </div>
										<input type="text" value="0" class="birthday" id="discGroupe4" maxlength="2" readonly />
										<div class="countFrameRight" id="discGroupe4" data-target="disc4"> </div>
									</div>
								</div>
								<div class="countFrameSet header" style="">
									<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
									<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_adult_lgnd3 ?></div></div>
									Пожилые<br />
									<span>(60+ лет)</span>
									<div class="countFrame">
										<div class="countFrameLeft" id="discGroupe5" data-target="disc5"> </div>
										<input type="text" value="0" class="birthday" id="discGroupe5" maxlength="2" readonly />
										<div class="countFrameRight" id="discGroupe5" data-target="disc5"> </div>
									</div>
								</div>

								<table class="discountsTbl" cellpadding="0" cellspacing="0" style="display:none;margin-left: 257px;">
									<tr>
										<td colspan="5" style="background-color: #41a1e0;border-bottom: 1px solid #41a1e0;color: white;">Льготные категории пассажиров</td>
									</tr>
									<tr>
										<td class="disc1" style="vertical-align: top;background-color: #e1eff3;display:none;">
											<div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
												<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_adult_lgnd3 ?></div></div>
											</div>Дети <br /><span style="padding-left: 16px;">(от 2 до 12 лет)</span>
										</td>
										<td class="disc2" style="vertical-align: top;background-color: #e1eff3;display:none;">
											<div>
												<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
												<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_kids_no_seats_lgnd3 ?></div></div>
											</div>
											Дети без места <br /><span style="padding-left: 16px;">(до 2 - 5 лет)</span>
										</td>
										<td class="disc3" style="vertical-align: top;background-color: #e1eff3;display:none;">
											<div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
												<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_students_legnd3 ?></div></div>
											</div>
											Студенты <br /><span style="padding-left: 16px;">(от 16 до 25 лет)</span>
										</td>
										<td class="disc4" style="vertical-align: top;background-color: #e1eff3;display:none;">
											<div>
												<img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
												<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_adult_lgnd3 ?></div></div>
											</div>
											Молодежь <br /><span style="padding-left: 16px;">(от 16 до 25 лет)</span>
										</td>
										<td class="disc5" style="vertical-align: top;background-color: #e1eff3;display:none;">
											<div><img src="http://e-travels.com.ua/images/form/ask5.png" alt="" class="ask-info" />
												<div class="ask-content" style="margin-top:-76px;"><div><?= $static_na_adult_lgnd3 ?></div></div>
											</div>
											Пожилые <br /><span style="padding-left: 16px;">(60+ лет)</span>
										</td>
									</tr>
									<tr>
										<td style="width: 204px;vertical-align: top;padding-bottom: 0px;border-right: 1px solid grey; display:none;" class="discGroupe1 disc1">
											<? if(isset($_POST['discGroupe1'])){
											$index = $discGroupeIndex[1];
											for($i = 1; $i <= $discGroupe[1]; $i++){
											$k = $index+$i-1;
											$k2 = 'discGroupe1birthdayData'.$k;
											echo '<div class="studBlock"><input type="text" value="'.$_POST[$k2].'" style="position: relative; top:10px;left:4px; float:left;" class="birthdayData" id="birthdayData'.$k.'" placeholder="дата рождения" /></div>';
											}
											}
											?>
										</td>
										<td style="width: 209px;padding-bottom: 0px;border-right: 1px solid grey;vertical-align: top; display:none;" class="discGroupe2 disc2">
											<? if(isset($_POST['discGroupe2'])){
											$index = $discGroupeIndex[2];
											for($i = 1; $i <= $discGroupe[2]; $i++){
											$k = $index+$i-1;
											$k2 = 'discGroupe2birthdayData'.$k;
											echo '<div class="studBlock"><input type="text" value="'.$_POST[$k2].'" style="position: relative; top:10px;left:4px; float:left;" class="birthdayData" id="birthdayData'.$k.'" placeholder="дата рождения" /></div>';
											}
											}
											?>
										</td>
										<td style="width: 255px;vertical-align: top;padding-bottom: 0px; display:none;" class="discGroupe3 disc3">
											<? if(isset($_POST['discGroupe3'])){
											$index = $discGroupeIndex[3];
											for($i = 1; $i <= $discGroupe[3]; $i++){
											$k = $index+$i-1;
											$k2 = 'discGroupe3ISIC'.$k;
											$k3 = 'discGroupe3studentTicket'.$k;
											echo '<div class="studBlock" style="margin-left: 4px;"><input type="text" value="'.$_POST[$k2].'" style="top:10px;left:4px;width: 85px!important;" class="ISIC" id="ISIC" placeholder="номер ISIC" /><span class="andor">и<br />или</span><input type="text" value="'.$_POST[$k3].'" style="top:10px;left:3px;width: 85px!important;" class="studentTicket" id="studentTicket" placeholder="№ студен." /></div>';
											}
											}
											?>
										</td>
										<td style="width: 204px;vertical-align: top;padding-bottom: 0px; display:none;" class="discGroupe4 disc4">
											<? if(isset($_POST['discGroupe4'])){
											$index = $discGroupeIndex[4];
											for($i = 1; $i <= $discGroupe[4]; $i++){
											$k = $index+$i-1;
											$k2 = 'discGroupe4birthdayData'.$k;
											echo '<div class="studBlock"><input type="text" value="'.$_POST[$k2].'" style="position: relative; top:10px;left:4px; float:left;" class="birthdayData" id="birthdayData'.$k.'" placeholder="дата рождения" /></div>';
											}
											}
											?>
										</td>
										<td style="width: 204px;vertical-align: top;padding-bottom: 0px; display:none;" class="discGroupe5 disc5">
											<? if(isset($_POST['discGroupe5'])){
											$index = $discGroupeIndex[5];
											for($i = 1; $i <= $discGroupe[5]; $i++){
											$k = $index+$i-1;
											$k2 = 'discGroupe5birthdayData'.$k;
											echo '<div class="studBlock"><input type="text" value="'.$_POST[$k2].'" style="position: relative; top:10px;left:4px; float:left;" class="birthdayData" id="birthdayData'.$k.'" placeholder="дата рождения" /></div>';
											}
											}
											?>
										</td>
									</tr>
									<tr>
										<td class="disc1" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
											<div class="information" style="margin-left: 0px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
												<?= $static_na_ctgs_mature_legnd2 ?>
											</div>
										</td>
										<td class="disc2" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
											<div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
												<?= $static_na_kids_no_seats_lgnd2 ?>
											</div>
										</td>
										<td class="disc3" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
											<div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
												<?= $static_na_lg_twonbs2 ?>
											</div>
										</td>
										<td class="disc4" style="vertical-align:top; border-right: 1px solid grey;padding-bottom: 0px; display:none;">
											<div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
												<?= $static_na_kids_no_seats_lgnd2 ?>
											</div>
										</td>
										<td class="disc5" style="vertical-align:top; padding-bottom: 0px; display:none;">
											<div class="information" style="margin-left: 5px;font-weight: normal;color: grey;float: left;margin-top: 20px;font-size: 11px;">
												<?= $static_na_kids_no_seats_lgnd2 ?>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="5" style="border-top:1px solid grey;">
                                            <div class="disocuntBlockAccept" ><img style="width: 10px;margin-left: -11px;" src="http://e-travels.com.ua/images/form/data-check.png" alt="" />&nbsp<!--Применить--></div>
											<div class="disocuntBlockClose" style="float: right;"><img src="http://e-travels.com.ua/images/form/close_new.png" alt="" />&nbsp</div>
										</td>
									</tr>
								</table>
							</div>

							<div class="clearfix">
                                <div class="checkbox left" style="z-index: 1000000;">
                                    <ul class="clearfix">
                                        <li class="clearfix" >
                                            <div style="float:left;">
                                                <div class="element" style="padding: 0px;">
                                                    <span style="color: #fff;line-height: 11px;font-size: 10px;">Взрослые:</span>
                                                    <span class="disc0" style="color: #fff;line-height: 11px;font-size: 10px;">1</span>
                                                </div>
                                                <div class="element" style="padding: 0px;display: none;">
                                                    <span style="color: #fff;line-height: 11px;font-size: 10px;">Дети:</span>
                                                    <span class="disc1" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                                </div>
                                                <div class="element" style="padding: 0px;display: none;">
                                                    <span style="color: #fff;line-height: 11px;font-size: 10px;">Дети без места:</span>
                                                    <span class="disc2" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                                </div>
                                            </div>
                                            <div style="float:left;margin-left: 30px;">
                                                <div class="element" style="padding: 0px; display: none;">
                                                    <span style="color: #fff;line-height: 11px;font-size: 10px;">Студенты:</span>
                                                    <span class="disc3" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                                </div>
                                                <div class="element" style="padding: 0px;display: none;">
                                                    <span style="color: #fff;line-height: 11px;font-size: 10px;">Молодежь:</span>
                                                    <span class="disc4" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                                </div>
                                                <div class="element" style="padding-top: 8px;display: none;">
                                                    <span style="color: #fff;line-height: 11px;font-size: 10px;">Пожилые: </span>
                                                    <span class="disc5" style="color: #fff;line-height: 11px;font-size: 10px;"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
								<div class="block date clearfix right" style="padding-top: 0; margin-top: -56px;">
									<div class="dep item_1 clearfix">
										<label>Дата отправки</label>
										<input type="text" id="tripDate" name="dep_date" class="dep_date hdata" placeholder="--/--/----" value="" />
                                        <img src="/images/data-check.png" alt="" class="data-check" style="display:none;position: absolute;right: 25px;">
									</div>
									<div class="ret item_1  clearfix">
										<label>Дата обратно</label>
										<input type="text" name="ret_date" id="backTripDate" class="ret_date hdata" placeholder="--/--/----" value="" />
										<img src="/images/data-check.png" alt="" class="data-check" style="display:none;position: absolute;right: 25px;">
									</div>
								</div>
							</div>
					</div>

					<div class="clearfix right" style="width: 100%;">
						<div class="btn_cards clearfix">
							<div class="cards right">
								<ul class="clearfix">
									<li>
										<a name="card_1" class="card_1"></a>
									</li>
									<li>
										<a name="card_3" class="card_3"></a>
									</li>
								</ul>
							</div>
							<div class="clearfix">
								<div class="block buttons left">
									<input id="searchButton" class="sbm" type="submit" value="Поиск рейсов" />
								</div>
							</div>
						</div>

					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>