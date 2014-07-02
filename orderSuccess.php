<?php
session_start();
include ('includes/functions.php');

$data = array();

if (!empty($_POST) ) {

    if ($_GET['r']) {
        $_POST['reservation'] = 1;
    }
    $x = getRemoteData('http://api.e-travels.com.ua/apio/pbankResponse.php?p=user&sid='.@$_GET['sid'], $_POST);

    if (!empty ($x[1])) {
        $data = json_decode($x[1], 1);

    }

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Результат оплаты</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<!--<link rel="stylesheet" href="css/reset.css" type="text/css" media="all"  />
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all"  /> -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all"  />

<?php include('includes/scripts.php');?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
    <script type="text/javascript" src="/js/date.js"></script>
    <script type="text/javascript" src="/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="/js/form.js"></script>	
    <script type="text/javascript" src="/js/newformscripts.js"></script>	
	

	
</head>
<body>
<div class="main">
<?php include('includes/header.php');?>
<div style="clear:both"></div>	
    <div class="wrapper pad1">
    <div class="new_form" id="new_form">
        <style>

            #reservation_form td {
                padding: 5px;
            }

            .info_date_to_pay {
                color: #7E7E28;
                text-align: center;
                font-weight: bold;
            }

            .info_total_pay span {
                font-weight: bold;
            }
        </style>
<?php
 if ($_GET['ra'] == 2) {
 $ostatus = 1;
 $omessage = "Ошибка Выкупа";
 } elseif ($_GET['ra'] == 1) {
 $ostatus = 2;
 $order_Id = $_GET['orderId'];
 $omessage = "Успешно!";
 } elseif ($data['confirmed']) {
 $ostatus = 2;
 $order_Id = $data['orderid'];
 } elseif ($_GET['otmena'] == 1) {
 $ostatus = 1;
 $omessage = "Заказ аннулирован. Отправлен запрос на возврат средств";
 }


 else {
$id = $_GET['orderId'];
$url="https://pay.alfabank.ua/payment/rest/getOrderStatus.do";

 $params = array(
	'language' => 'ru',
	'orderId' => $id,
	'password'=> '(GTH)cgtrnb{DF}+220',
	'userName' => 'E_TRAVELS-api'
	);

    $sparams = http_build_query($params);
$cu = curl_init();
    curl_setopt( $cu, CURLOPT_URL, $url );
    curl_setopt( $cu, CURLOPT_POST, true );
    curl_setopt( $cu, CURLOPT_POSTFIELDS,  $sparams );
    curl_setopt( $cu, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $cu, CURLOPT_FOLLOWLOCATION, true );
    curl_setopt( $cu, CURLOPT_HEADER, 0 );
    curl_setopt( $cu, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)' );

    $return = curl_exec($cu);
    curl_close($cu);
  $obj = json_decode($return);
$omessage = $obj->{'ErrorMessage'};?><p><?
	$ostatus = $obj->{'OrderStatus'};
	$order_Id = $obj->{'OrderNumber'};
}
?>

        <div class="order_block" style="min-height:350px;">
        <? if  ($ostatus == 2)  { ?>
		
            <div class="order_header">
                <div class="order_hf_content">Покупка успешно завершена</div>
            </div>
            <div class="order_separator_top"></div>
            <div class="order_body">
                <div class="order_content">
                    Оплата прошла успешно.<br/><br/>
					Обязательно сохраните и распечатайте маршрутный лист
                </div>
            </div>

            <div class="order_body">
                <div class="order_content">
					<?  if ($_GET['ra']) {?>
                    <a href="/ticket.php?on=<?=$order_Id?>" target="_blank" class="btn" style="margin-left: 10px; height: 40px;">Скачать маршрутный лист</a>
                        <?} else {?>
					<a href="/ticket.php?oid=<?=$order_Id?>" target="_blank" class="btn" style="margin-left: 10px; height: 40px;">Скачать маршрутный лист</a>
						<?}?>
                </div>
            </div>
			
			
            <div class="order_body">
                <div class="order_content">
				
			Проездные документы действительны только в распечатанном виде
			<br/><br/>
			Копия документа отправляется на указанный вами E-mail в автоматическом режиме.
				
				</div>
            </div>			

            <div class="order_separator_bottom"></div>
            <div class="order_footer"></div>			
			
            <? }
			else
			{?>

            <div class="order_header">
                <div class="order_hf_content">Ошибка оплаты</div>

            </div>
			<p><?print $omessage?></p>
            <? if ($data['reasoncodedesc'] ) { ?>
            <div class="order_separator_top"></div>

            <div class="order_body">
                <div class="order_content">
                    <?=$data['reasoncodedesc']?>
                </div>
            </div>

            <div class="order_separator_bottom"></div>
            <? } ?>
            <div class="order_footer"></div>
            <? } ?>
        </div>


    </div>
    <div style="clear:both"></div>
	</div>
<?php include('includes/footer.php');?>  
</div>
</body>
</html>