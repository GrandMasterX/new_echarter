<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HOME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="static/css/normalize.min.css">
    <link rel="stylesheet" href="static/css/echarter_style.css">
    <link rel="stylesheet" href="static/css/autocomplete.css">
    <link rel="stylesheet" href="static/css/discount.css">

    <link rel="stylesheet" href="static/css/radio.css">
    <script src="static/js/vendor/modernizr-2.6.2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="static/css/form/form.css"/>
    <!--<link rel="stylesheet" type="text/css" href="static/css/style.css"/>-->
    <link rel="stylesheet" type="text/css" href="static/css/jquery.editable-select.css"/>
    <link rel="stylesheet" type="text/css" href="static/css/jquery-ui.css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>

    <script type="text/javascript" src="static/js/date.js"></script>
    <script type="text/javascript" src="static/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="static/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="static/js/form_all2.js?<?= mt_rand(1, 22222); ?>"></script>
    <script type="text/javascript" src="static/js/newformscripts.js"></script>
    <script type="text/javascript" src="static/js/discounts.js"></script>
</head>
<body>
<?php $this->renderPartial('/layouts/header');?>
<div class="popular_container">
    <div class="wrap">
        <? echo $content;?>
    </div>
</div>
<?php $this->renderPartial('/layouts/footer');?>
<script src="static/js/wSelect.js"></script>
<script>
    $(document).ready(function() {
        $.fn.wSelect.defaults.changeWidth = false;
        $('select:not(".transport_details")').wSelect();
    });
</script>
</body>


</html>