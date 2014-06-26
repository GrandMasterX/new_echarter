<?php $regularFlag="regular"; 
$remoteUser =  $_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"];

session_start();
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
<title>Авиабилеты <?php echo $inCountry; ?></title>
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

		<h1>Авиабилеты <?php echo $inCountry; ?></h1>
		<p>Купить авиабилет <b><?php echo $inCountry; ?></b> на сайте позволяет платежно-процессинговый 
		центр интернет платежей одного из самых известных банков Украины. Обмен 
		информацией о Вашей покупке происходит мгновенно и после успешно завершенной 
		транзакции - Вы станете обладателем места в самолете который направляется в 
		нужный Вам аэропорт.</p>
		<p>Покупка авиабилетов по Интернет, на сегодняшний день является самым 
		распространенным каналом для продажи пассажирских авиаперевозок. Независимо от 
		страны в которой Вы находитесь вы непременно сможете купить авиабилет 
		именно туда, куда нужно и при этом в считанные минуты.</p>
		<p>Ищите ли вы дешевые авиабилеты либо билеты для пассажиров первого 
		класса либо вам необходимы авиабилеты на чартеры - все эти классы и 
		виды международных пассажирских перевозок можно заказать на сайте
		<a href="http://echarter.com.ua">http://echarter.com.ua</a>.</p>
		<h2>Заказ авиабилетов <?php echo $inCountry; ?></h2>
		<p>Авиа-перелеты из Украины <b><?php echo $inCountry; ?></b> 
		осуществляются довольно часто, в этом направлении работают десятки авиакомпаний, 
		регулярные и чартерные рейсы отправляются не только из Киева, но и из всех 
		крупных аэропортов Украины: Севастополя, Днепропетровска, Львова и Одессы. 
		Купить авиабилет <b><?php echo $inCountry; ?></b> по интернет очень просто, для этого нужно 
		оформить онлайн заказ - заполнить лист бронирования на странице нашего сайта с 
		указанием аэропорта вылета и прибытия, персонально либо группы пассажиров и т.д.</p>
		<p>Оплата забронированных авиабилетов производится с помощью кредитной карты, 
		наличными в офисе, в кассе турагентства, в ближайшем банковском отделении или 
		терминале самообслуживания. Сэкономить на поездке <?php echo $inCityUrl; ?> возможно 
		благодаря гибкой системе скидок, которые предлагает наша компания и 
		компания-авиаперевозчик.</p>
		<h2>Как заказать авиабилет <?php echo $inCountry; ?> по Интернет</h2>
		<p>Покупка авиабилетов <b><?php echo $inCountry; ?></b> совершается в несколько этапов. Для 
		начала нужно заказать авиабилет на подходящий рейс <b><?php echo $inCountry; ?></b>. Для этого 
		необходимо ввести в поисковую форму страну, город или код аэропорта и дату 
		вылета и нажать кнопку &quot;Поиск&quot;. Наша поисковая система работает в онлайн режиме 
		круглосуточно, она обработает внесенные данные и выдаст все существующие 
		варианты вылета <b><?php echo $inCountry; ?></b> на конкретную дату вылета от самых дешевых 
		вариантов до более дорогих. После того, как из списка Вы выбрали самый 
		подходящий рейс, нужно внести данные о пассажирах, покупателе билетов и способе 
		оплаты. После подтверждения заказа билета на самолет <?php echo $inCity; ?>, на Ваш 
		электронный адрес придет письмо со всей необходимой информации о поездке. Этот 
		документ называется &quot;лист заказа авиабилета&quot;.</p>
		<h2>Как оплатить авиабилет по номеру заказа</h2>
		<p>Лист заказа авиабилета – это официальный документ, который гарантирует Вам 
		получение места на выбранный рейс при условии оплаты заказа. Его нужно 
		распечатать или просто выписать номер бронирования, и по нему произвести оплату.</p>
		<p>Заказ авиабилетов <b><?php echo $inCountry; ?></b> не подразумевает их обязательный выкуп, эта 
		услуга бесплатна, Вы можете отказаться от покупки, либо повторно забронировать 
		авиабилет на другую дату или рейс. Цена авиабилета <b><?php echo $inCountry; ?></b> из Украины 
		включает тариф, сервисный сбор аэропорта, комиссию за оформление, но Вы можете 
		быть уверены в том, что это все равно будет дешевле.</p>
		<?php if((isset($individual))&&($individual!='')): ?>
		<p><?php echo $individual; ?></p>
		<?php endif;?>
		<p>Если у Вас возникли вопросы относительно заказа и выкупа авиабилетов <b><?php echo $inCountry; ?></b> - обратитесь 
		в службу поддержки по телефону и получите консультацию.</p>		
</div>
<?php include('../includes/footer.php');?>   
</div>
</body>
</html>