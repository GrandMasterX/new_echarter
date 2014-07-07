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
<title>Обзор аэропортов в Украине</title>
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
	<h1>Обзор аэропортов в Украине</h1>
<p>Любой аэро-транспорт развивается под влиянием ближайших аэропортов — это 
общее правило, являющееся определяющим фактором в перевозках пассажиров. </p>
<p>Пассажир, решающий, какой аэропорт он выберет для отправления или прибытия, 
руководствуется такими факторами:</p>
<p>1) Работает ли в аэропорту выбранная им авиакомпания;</p>
<p>2) Где расположен аэропорт, как далеко он находится от города;</p>
<p>3) Внешний вид аэропорта и предоставляемые им сервисы.</p>
<p>В настоящее время в Украине находится 36 аэропортов, 27 обычных и 9 — 
государственной важности. Это Международный аэропорт Борисполь, Международный 
аэропорт Донецк, Киевский Международный аэропорт Львов, Международный аэропорт 
Харьков, Международный аэропорт Одесса, Днепропетровск - Международный аэропорт, 
Международный аэропорт Запорожье, и Симферополь - Международный аэропорт.</p>
<p>Тарифная политика зависит от дохода и роста компании, так что она является 
важным фактором для транспортного сектора. В плане тарифной политике 
предусматривается обеспечение свободного ценообразования транспорта в рыночных 
секторах с высоким уровнем конкуренции, в случае необходимости — устанавливать 
на <a href="http://echarter.com.ua">авиабилеты</a> фиксированные цены 
естественных монополий, координирующих деятельность с остальным тарифным 
регулированием, а также стимулировать ограничительные меры.</p>
<p>Цены для дополнительных <a href="http://echarter.com.ua">чартерных рейсов</a> 
являются пока относительно высокими — выше цен на регулярные рейсы в другое 
время и дни недели. Но их преимущество — удобное расписание полётов, позволяющее 
пассажирам, например, прибывать в Европу рано утром, а в Киев возвращаться — 
ночью. Цена в этом случае соответствует удобному графику и наоборот, а пассажир 
уже сам выбирает, за что он предпочтёт платить.</p>	

<br />	
<?php include('includes/linkblock.php');?>  	
</div>
<?php include('../includes/footer.php');?>  
</div>
</body>
</html>