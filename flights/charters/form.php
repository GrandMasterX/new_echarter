<?php
$remoteUser =  $_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"];
session_start();
include ('../includes/functions.php');

if (!empty($_POST)) {
    $action = $_POST['action'];
	$type = empty($_POST['type']) ? 'avia_plus_charter' : $_POST['type'];
	$res = empty($_POST['res']) ? 'echarter2' : $_POST['res'];
    unset($_POST['action']);
    $x = getRemoteData('http://api.e-travels.com.ua/apio/'.$action.'.php?type='.$type.'&res='.$res.'&remoteUser='.$remoteUser.'', $_POST);
    if($action != 'getActionSalt'){
	$x = str_replace('/images/', '/images/form/', $x[1]);
    echo $x;}
	else{ 
		$data = array('salt' => $x[1]);
		echo json_encode($data);
	}
    die;
}
$static_na_kids_no_seats_lgnd3 = 'Если вы планируете путешествовать с маленькими детьми, рекомендуем внести данные, благодаря которым система автоматически проверит наличие специальных тарифов (без места) на выбранном вами маршруте. Обратите внимание на необходимость выбора двух и более пассажиров для получения спец. тарифа. Вне зависимости от тарифа система предложит выбрать место на карте транспортного средства; возможно, оно будет свободно.';
$static_na_adult_lgnd3 = 'Благодаря данному функционалу системы пассажиры имеют возможность воспользоваться тарифом со скидкой для возрастных групп пассажиров. Обратите внимание на то, что при заполнении даты рождения и наличии скидочных тарифов от перевозчика система автоматически подберет вам более дешевый тариф для проезда по выбранному маршруту. У некоторых перевозчиков существуют скидки для детей, молодежи, людей пожилого возраста, пенсионеров.';
$static_na_students_legnd3 = 'Некоторые перевозчики предоставляют скидки для студентов. Данный функционал разработан для возможности использовать скидки на проезд студентами. Для проверки наличия тарифа на выбраном вами направлении достаточно внести номер студенческого билета, и система автоматически проверит наличие студенческой скидки и подберет наиболее подходящий тариф.';
$static_na_kids_no_seats_lgnd2 = 'для детей до 2-х - 5-ти лет (если предоставленна льгота перевозчиком)';
$static_na_ctgs_mature_legnd2 = 'для проверки  наличия возрастных скидок у перевозчика для пассажиров с местами (дети, молодежь, пожилые и другие)';
$static_na_lg_twonbs2 = 'для проверки скидок для студентов можно внести № документа один или оба';
$passangers_rus =['пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажир','пассажира','пассажира','пассажира','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров','пассажиров'];
?>