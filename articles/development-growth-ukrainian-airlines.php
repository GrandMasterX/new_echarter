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
<title>Развитие и рост украинских авиакомпаний</title>
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
	<h1>Развитие и рост украинских авиакомпаний</h1>
<p>По показаниям статистики, количество рейсов, выполняемое среднестатистической 
авиакомпанией в течение всего периода её деятельности на рынке украинского 
авиатранспорта, неуклонно растёт, что является свидетельством развития 
авиакомпании на рынке пассажирских авиаперевозок. Также наблюдается тенденция 
постоянного увеличения количества рейсов в связи с открытием новых
<a href="http://echarter.com.ua">чартерных рейсов</a>.</p>
<p>Любая авиакомпания начинала свой рост из сравнительно небольшого количества 
пассажиров, но с определенного времени наблюдается постепенный приток пассажиров 
и увеличение популярности авиаперевозок, что связано с расширением карты полётов 
воздушного флота и повышением благосостояния граждан. Наблюдается постепенное 
увеличение доли на рынке в сравнении с ЖД транспортом, что обеспечивает рост 
доходов авиакомпаний.</p>
<p>На сегодняшний день существуют регулярные рейсы в более чем в 50 стран мира. 
За 9 месяцев было совершено 23,2 тыс. рейсов и перевезено более 1,6млн 
пассажиров. Открыты новые международные рейсы самолетов, а также увеличен 
пассажиропоток по основным рейсам. Регулярные рейсы осуществляют 47 иностранных 
авиакомпаний из 29 стран мира.</p>
<p>Тем не менее, стоит отметить, что рост количества пассажирских перевозок 
между Украиной и другими странами на рынке регулярных воздушных перевозок у 
иностранных компаний в среднем на 15-16% выше темпа роста отечественных 
компаний, но существует сфера с ещё более существенным отрывом.</p>
<p>Также наблюдается рост количества внутренних пассажирских перевозок. За год 
услугами авиакомпаний воспользовались более чем 0,8 миллиона пассажиров, а темп 
роста составляет 12,3%, 93% из которых — перевозки регулярными рейсами. Это 
способствует активному привлечению ведущих пассажирских авиакомпаний на 
внутренний рынок авиаперевозок за счёт увеличения количества и качества связей в 
аэропортах маршрута.</p>	

<br />	
<?php include('includes/linkblock.php');?>  	
</div>
<?php include('../includes/footer.php');?>  
</div>
</body>
</html>