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
<title>Принципы развития в авиационной отрасли</title>
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
	<h1>Принципы развития в авиационной отрасли</h1>
<p>Каждая конкурирующая авиакомпания всё же представляет из себя подсистему в 
общей транспортной системе и все они имеют тесные взаимосвязи друг с другом.<br />
Самолёты в другие страны всегда прибыльнее, так что любая авиакомпания стремится 
заложить одну из основ с точки зрения логистики — географические
<a href="http://echarter.com.ua">чартерные рейсы</a>, которые могут оказаться 
эффективными в стратегии продаж и ценообразования.</p>
<p>Одним из направлений увеличения продаж и сетевого трафика является 
подключение к собственной сети других операторов с их системами продаж 
авиабилетов.</p>
<p>Наибольшее внимание уделяется стремлению объединить сети авиакомпаний и сети 
глобальных альянсов на основах сотрудничества, таких как KL, BA, LH, AF, а также 
местных и региональных сетей PS, 6U, SU, ООН и других местных сетей, поддерживая 
их линии в определенных точках. Это позволит авиакомпаниям завоевать более 
&quot;платежеспособных&quot; пассажиров. Все авиакомпании открыты для сотрудничества в 
сфере авиаперевозок на национальном рынке. Планирование крупномасштабных 
расширений на внутренние рейсы на данный момент не позволяет общеэкономическая 
ситуация по Украине, так что одной из основных задач является сотрудничество с 
компанией &quot;Национальные авиалинии Украины&quot; для совместной реализации 
внутриукраинской программы полётов.</p>
<p>Важнейшим условием формирования крупного транспортного узла в аэропорту &quot;Борисполь&quot; 
является создание эффективной сети внутриукраинских перелётов. Это — ключ для 
привлечения партнёров с целью эффективного сотрудничества на рынке и для того 
чтобы повысить продажи авиабилетов.</p>
<p>Исходя из этой цели, перед авиакомпаниями стоит задача — построить внутреннюю 
сеть собственного флота, состоящего из самолетов Boeing 737-200. Для этого 
требуются изменения в общей экономической ситуации Украины, а также необходимо 
определить тарифы и сборы, которые операторы взимают за международные перевозки.</p>
<p>Возможно, участие вместе с другими украинскими авиакомпаниями является менее 
рискованным, хоть у него есть и свои недостатки. Например, необходимо 
скоординировать общую политику в сфере перевозок, выработать концепцию трафика, 
отстраивать аэропорты, инфраструктуру и т.д.</p>	

<br />	
<?php include('includes/linkblock.php');?>  	
</div>
<?php include('../includes/footer.php');?>  
</div>
</body>
</html>