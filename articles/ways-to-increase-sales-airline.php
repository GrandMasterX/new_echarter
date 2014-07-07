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
<title>Способы увеличения объемов продаж авиакомпании</title>
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
	<h1>Способы увеличения объемов продаж авиакомпании</h1>
<p>Значительного прогресса в работе удалось добиться, в первую очередь, увеличив 
собственный авиационный парк (новые самолеты Boeing и AirBus), открыв новые 
воздушные линии, а также сотрудничая с национальными компаниями и между собой 
(например, стратегический альянс &quot;Украинская авиационная группа&quot;).</p>
<p>Так же увеличение объёма перевозок пассажиров увеличивается за счёт 
интенсивного развития внутренних рейсов. Запущены рейсы из Киева до Запорожья, 
Луганска и Донецка, также до других городов Украины. В зимний сезон 
интенсивность полётов Киев-Симферополь, Киев-Харьков и Киев-Ужгород 
увеличивается, а продажи авиабилетов - ростут.</p>
<p>Большинство авиакомпаний внедряют собственную систему обслуживания пассажиров 
на основе соглашения с &quot;Амадеус&quot; - ведущим поставщиком распределительных 
технологий в туризме и авиации в частности. По этому документу каждая 
авиакомпания будет действовать по направлению, направленному на перевод системы 
на новую платформу Amadeus Altea, а также применять IT-решения от Amadeus 
Revenue Integrity и Amadeus E-Retail Engine. Это два модуля одной платформы 
Amadeus Altea Customer Management (CMS), которая предназначена для контроля 
потоков пассажиров.</p>
<p>Благодаря этим технологиям, авиакомпании могут оптимизировать управление 
пассажирскими местами как ресурсом, повысить рентабельность собственной компании 
и распределить операции бронирования партнёрами компании как перевозчика. Это 
развитие новых технологий, а также возможность совершения онлайн-продаж и 
использования технологии &quot;электронный авиабилет&quot;.</p>

<p>С целью сохранить свои позиции на рынке, каждой украинской авиакомпании 
следует принять определённые меры:</p>
<p>1) Мониторить представительства и кассы по продаже авиабилетов;<br />
2) Создавать аналитические отделы для проверки результатов работы;<br />
3) Расширять спектр предоставляемых услуг;<br />
4) Разрабатывать и осуществлять меры по повышению экономической эффективности 
уже существующих рейсов, а также осуществлять такую активность для открытия 
новых;<br />
5) Уделять имиджу компании большее влияние;<br />
6) Стремиться улучшить качество обслуживания;<br />
7) Делать регулярные обзоры структуры тарифов;<br />
8) Создавать более удобный график для клиентов;<br />
9) Координировать и контролировать бизнес-офисы компании за рубежом;<br />
10) Расширять собственный авиапарк за счет новых самолетов;<br />
11) Расширять сеть маршрутов за счет чартерных авиарейсов;<br />
12) Модернизировать оборудование;<br />
13) Вступать в уже существующие союзы или создавать новые;<br />
14) Внедрять новые системы обслуживания пассажиров, основанные на технологиях 
нового поколения.</p>	

<br />	
<?php include('includes/linkblock.php');?>  	
</div>
<?php include('../includes/footer.php');?>  
</div>
</body>
</html>