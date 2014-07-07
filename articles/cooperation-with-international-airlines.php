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
<title>Сотрудничество с международными авиакомпаниями</title>
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
	<h1>Сотрудничество с международными авиакомпаниями</h1>
	
<p>Плотное сотрудничество украинских авиакомпаний с их зарубежными коллегами 
помогает существенно сэкономить время, повысить качество услуг, сделать удобным 
сотрудничество с другими авиакомпаниями мира.</p>
<p>Любую авиакомпанию в Украине можно рассматривать как систему в целом или как 
подсистему в транспортной надсистеме наравне с ведущими авиакомпаниями. Как 
правило, авиакомпании тесно сотрудничают с другими перевозчиками, это даёт им 
возможности для расширения карты полётов, увеличения их дальности и пропускной 
способности по пассажирам. Так же она получает некоторые навыки и изучает новые 
возможности для улучшения качества услуг — на основе обмена опытом с партнёрами. 
Мелкие авиакомпании, сотрудничающие с крупными — например, с МАУ, Аэрофлот, 
Бритиш Айрвейс, получают возможность расширения собственной географии полётов, 
повышения собственной производительности и т.д. Также каждая авиакомпания 
сотрудничает с ведущими европейскими авиакомпаниями. Это происходит в рамках 
соглашений о совместной эксплуатации маршрутов. К таким компаниям относятся: &quot;Malev&quot;, 
&quot;Olympic Airways&quot;, &quot;CSA&quot;, &quot;LOT&quot;, &quot;Украина International&quot;, &quot;Air Baltic&quot;, &quot;Estonian 
Air&quot;, &quot;Дельта&quot;, &quot;Lufthansa&quot;, &quot;Finnair&quot;, &quot;British Airways&quot;, &quot;Austrian Airlines&quot;, 
&quot;Northwest Airlines&quot;, &quot;Air Canada&quot;.</p>
<p>На рынке авиационных перевозок присутствует довольно много авиакомпаний, так 
что постоянно приходится совершенствовать качество сервисов, внедрять новые 
технологии, и системы регистрации — например, <a href="http://echarter.com.ua">
заказ авиабилетов онлайн</a> или контролирование работы своих агентов для 
проверки квалификации собственных сотрудников, а также — проведения курсов для 
аспирантов. Также это процесс проверки технического оборудования ангаров и 
многое другое. Всё это — с целью удержания ведущих позиций как в Украине, так и 
за рубежом.</p>

<p><b>Безопасность перелетов на самолетах</b></p>
<p>Надёжность и безопасность перелётов обеспечивает интегрированная система 
ежегодной проверки технического состояния самолётов. Эта проверка производится 
лучшими сервис-центрами Западной Европы, регулярная переподготовка экипажей 
обеспечивается на базах таких компаний как &quot;Sarnival airlines&quot; (США), &quot;Olympic 
Airways&quot; (<a href="http://echarter.com.ua/greece.php">Греция</a>) и &quot;Чешские авиалинии&quot; (Чешская Республика). Теоретическая и 
практическая подготовка технического персонала ежегодно производится в учебных 
центрах крупных компаний, таких как &quot;Боинг&quot; (США), &quot;Aeroplex&quot; (Венгрия), &quot;Olympic 
Airways&quot; (Греция).</p>
<br />	
<?php include('includes/linkblock.php');?>  	
</div>
<?php include('../includes/footer.php');?>  
</div>
</body>
</html>