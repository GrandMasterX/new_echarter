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
<title>Расписание самолетов Аэропорт Киев</title>
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
<h1>Расписание самолетов Аэропорт Киев</h1>
<table align="center" border="1" bordercolor="#f4f4f4" cellpadding="2" cellspacing="1" width="100%" id="table1">
					<tr bordercolor="#ffffff" bgcolor="#f4f4f4">
						<td align="center"><strong>&nbsp;Вылет из Аэропорта</strong></td>
						<td align="center"><strong>Авиарейсы</strong></td>
						<td align="center"><strong>Дни вылета (расписание)</strong></td>
						<td align="center"><strong>Время вылета</strong></td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Анталия (Турция)</strong></td>
						<td align="center">Вт, Сб</td>
						<td align="center">06:10 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев -
						Афины (Греция)</strong></td>
						<td align="center">Вт</td>
						<td align="center">13:50 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Афины</strong></td>
						<td align="center">Пт</td>
						<td align="center">16:20 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Афины</strong></td>
						<td align="center">Вс</td>
						<td align="center">19:20 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Барселона (Аэропорт Жирона)</strong></td>
						<td align="center">Вт, Чт, Сб</td>
						<td align="center">19:05 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Валенсия (Испания)</strong></td>
						<td align="center">Ср, Вс</td>
						<td align="center">16:15 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Венеция (Италия)</strong></td>
						<td align="center">Пн, Ср, Пт, Вс</td>
						<td align="center">14:45 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Венеция</strong></td>
						<td align="center">Вт, Чт, Сб</td>
						<td align="center">10:20 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Гамбург (аэропорт Любек)</strong></td>
						<td align="center">Чт, Вс</td>
						<td align="center">06:50 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Дортмунд</strong></td>
						<td align="center">Вт, Ср, Чт, Сб, Вс</td>
						<td align="center">12:30 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев -
						<font color="#000000">Запорожье</font></strong></td>
						<td align="center">Вт, Чт</td>
						<td align="center">19:30 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Катовице (аэропорт Краков)</strong></td>
						<td align="center">Пн, Ср, Пт, Вс</td>
						<td align="center">10:20 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Кёльн</strong></td>
						<td align="center">Пн, Ср, Пт</td>
						<td align="center">06:10 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Лондон (аэропорт Лутон)</strong></td>
						<td align="center">Пн, Ср, Пт</td>
						<td align="center">07:10 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Мемминген (Мюнхен Вест)</strong></td>
						<td align="center">Пн, Пт</td>
						<td align="center">18:30 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Мемминген (Мюнхен Вест)</strong></td>
						<td align="center">Ср, Вс</td>
						<td align="center">19:20 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев -
						<font color="#000000">С</font>имферополь</strong></td>
						<td align="center">Пн, Вт, Ср, Чт, Пт</td>
						<td align="center">19:30 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - 
						<font color="#000000">С</font>имферополь</strong></td>
						<td align="center">Чт, Пт</td>
						<td align="center">10:45 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - 
						<font color="#000000">С</font>имферополь</strong></td>
						<td align="center">Пн, Ср, Пт, Сб</td>
						<td align="center">08:00 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - Стокгольм</strong></td>
						<td align="center">Пн, Пт</td>
						<td align="center">12:50 </td>
					</tr>
					<tr>
						<td align="center">Аэропорт Киев </td>
						<td align="center"><strong>Киев - 
						<font color="#000000">Харьков</font></strong></td>
						<td align="center">Пн, Вт, Чт, Пт</td>
						<td align="center">20:15 </td>
					</tr>
				</table><br /><br />
<h2>Табло вылетов самолетов из аэропорта Киев</h2>
<br />
<center>
<div style="position:relative;width: 700px;"><div style="background:#F3F3F9;height: 30px;position: absolute;right: 5px;top: 5px;width: 162px;"></div>
<iframe frameborder="0" style="-moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); box-shadow: 0 2px 3px rgba(0, 0, 0, 0.5); overflow: hidden; border: 0; width: 700px; height: 303px;" src="http://rasp.yandex.ua/informers/station/9600364/?type=tablo"></iframe>		
</div>
</center>
<br />					

<?php include('includes/linkblock.php');?>  	
</div>
<?php include('../includes/footer.php');?>  
</div>
</body>
</html>