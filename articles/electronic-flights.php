<?php
$remoteUser =  $_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"]; $regularFlag="regular"; 
session_start();
$country22 = "Россия";
$city22 = "Москва";
include ('../includes/functions.php');
if (!empty($_POST)) {
    $action = $_POST['action'];
    //echo 'dev.e-travels.com.ua/api/' . $action . '.php';
    unset($_POST['action']);
    $x = getRemoteData('http://dev.e-travels.com.ua/apio/' . $action . '.php?type=avia&res=echarter_reg&remoteUser='.$remoteUser.'&countriesStart=Украина,' . $country22 . '&countriesEnd=' . $country22 . '&citiesStart=Киев,Берлин,Вена,Баку,Буэнос-Айрес,Ереван,Минск,Брюссель,София,Рио-де-Жанейро,Лондон,Будапешт,Ханой,Тбилиси,Копенгаген,Тель-Авив,Мадрид,Рим,Алматы,Оттава,Сеул,Рига,Вильнюс,Кишинёв,Амстердам,Осло,Дубай,Варшава,Лиссабон,Москва,Бухарест,Вашингтон,Белград,Братислава,Бангкок,Стамбул,Ташкент,Киев,Хельсинки,Париж,Загреб,Подгорица,Прага,Женева,Таллин,Токио&citiesEnd=' . $city22 . ',Берлин,Вена,Баку,Буэнос-Айрес,Ереван,Минск,Брюссель,София,Рио-де-Жанейро,Лондон,Будапешт,Ханой,Тбилиси,Копенгаген,Тель-Авив,Мадрид,Рим,Алматы,Оттава,Сеул,Рига,Вильнюс,Кишинёв,Амстердам,Осло,Дубай,Варшава,Лиссабон,Москва,Бухарест,Вашингтон,Белград,Братислава,Бангкок,Стамбул,Ташкент,Киев,Хельсинки,Париж,Загреб,Подгорица,Прага,Женева,Таллин,Токио', $_POST);
    //print_r($x); die;
    //header('Content-type', $x[0]);
    $x = str_replace('/images/', '/images/form/', $x[1]);
    $x = str_replace('/images/form/form/', '/images/form/', $x);
    echo $x;
    die;
}
$form = getRemoteData('dev.e-travels.com.ua/apio/getForm.php?type=avia&res=echarter_reg&remoteUser='.$remoteUser.'');
$form = $x[1] = str_replace('/images/', '/images/form/', $form[1]);
//print_r($form);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Электронные авиабилеты</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
<?php include('../includes/scripts.php');?> 
    <link rel="stylesheet" type="text/css" href="/css/form/form.css"/>
    <link rel="stylesheet" type="text/css" href="/css/jquery.editable-select.css"/>
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
	<script type="text/javascript" src="/js/date.js"></script>
    <script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="/js/form_all.js?<?= mt_rand(1, 22222)
    ; ?>"></script>
    <script type="text/javascript" src="/js/newformscripts.js"></script>
</head>
<body>
<div class="main">
<?php include('../includes/header.php');?> 
<div class="new_form" id="new_form">
    <?= $form ?>
</div>
<div style="clear:both"></div>	
    <div class="wrapper pad1">
<h3 class="top" style="text-align:left;">Портал чартерных авиаперевозок<span>Авиакомпании, туроператоры и агентства</span></h3>
<h1>Электронные авиабилеты</h1>
<p>Электронный билет (e-ticket) – это документ в электронной форме. Он 
удостоверяет наличие между пассажиром и авиакомпанией договора о воздушной 
перевозке. Этот авиабилет — представляет собой запись в базу данных 
авиакомпании. Для электронного билета специальный бланк не нужен — нужная 
информация хранится в базе данных и при необходимости её можно передавать с 
компьютера на компьютер. Это позволяет авиакомпаниям куда меньше тратиться на 
специальные бланки и их оформление. Также их большим преимуществом является то, 
что оплатить такие авиабилеты можно любым безналичным способом или же с помощью 
автоматизированных устройств (банкоматов, терминалов, банковских компьютерных 
систем) — это сокращает затраты авиакомпаний и их агентов на обеспечение 
денежного оборота. Для пассажиров же это — в первую очередь, существенная 
экономия времени, а вот вторую — такая покупка билета позволяет сэкономить и на 
его стоимости, ведь туда не включены затраты авиакомпании на его бумажную часть, 
так как выпуск авиабилетов на бумажном бланке — весьма дорогостоящая процедура.</p>
<p>Также в <b>электронный авиабилет</b> входит распечатка маршрута, электронные 
купоны и документы о посадке, если таковые используются. Из всего этого 
электронный купон — это то, что, собственно, обеспечивает перевозку пассажира 
данным рейсом, а в распечатке маршрута присутствуют данные пассажира, а также 
информация по конкретному рейсу.<br />
Возможность забронировать авиабилеты заранее есть у каждого пассажира.
<a href="http://echarter.com.ua">Купить авиабилеты</a> на любой рейс можно на 
нашем сайте. Пассажиры могут заказать авиабилеты через Интернет, оплатив их в 
терминале, в ближайшей кассе или же со своего банковского счёта. При этом 
электронный авиабилет будет выдан пассажиру вместо стандартного бумажного 
билета.</p>
<p>Проверку действительности авиабилета можно сделать в диапазоне от 180 до 45 
минут до вылета рейса. Осуществляется это в приёмной аэропорта или на 
информационной стойке. Также в международных аэропортах пассажиру доступны 
инфо-киоски. Там пассажир может получить автоматически сгенерированный номер 
бронирования и багажную бирку. </p>
<p>Спрос на авиаперевозки растёт, а эффективная транспортная система и внедрение 
передовых технологий электронных билетов для управления перевозками и их 
дистрибуции является основой для любой авиакомпании.</p>
<br />	
<?php include('includes/linkblock.php');?>  	
</div>
<?php include('../includes/footer.php');?>  
</div>
</body>
</html>