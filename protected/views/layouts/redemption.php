<html>
<head>
    <title>Выкуп забронированных билетов</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/normalize.min.css">
    <link rel="stylesheet" href="/static/css/echarter_style.css">
    <link rel="stylesheet" href="/static/css/autocomplete.css">
    <link rel="stylesheet" href="/static/css/discount.css">
    <link rel="stylesheet" href="/static/css/radio.css">
    <script src="/static/js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/form/form.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.editable-select.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery-ui.css">
    <script type="text/javascript" src="/static/js/jquery-latest.js"></script>
    <link rel="icon" type="image/png" href="/images/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/static/css/form/form.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.editable-select.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery-ui.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
    <script type="text/javascript" src="/static/js/date.js"></script>
    <script type="text/javascript" src="/static/js/ui.datepicker-ru.js"></script>
    <? $this->renderPartial('/static/google_analitics');?>
<body>
<div id="overlay" style="display: <?if(isset($_GET['page'])){?>block<?}else{?>none<?}?>;"></div>

<header>
    <div class="wrap clearfix">
        <?php $this->renderPartial('/layouts/header');?>
    </div>
</header>
<div class="container" style="padding-top: 20px;">
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

        $('.datepicker').datepicker();

        $('.lk_office li span').click(function(e) {
            var _target = e.target;
            if (!$(_target).parent().is('a.top_menu_item')) {
                return;
            }
            if ($(_target).closest('li').hasClass('active')) {
                $('.lk_office li').removeClass('active');
            } else {
                $('.lk_office li').removeClass('active');
                $(_target).closest('li').addClass('active');
            }
        });

        $(document).click(function(event) {
            if(!$(event.target).closest('.top_menu_item').length) {
                if($('.top_menu_item').parent('li').hasClass('active') && !$(event.target).parents('.block_login').length) {
                    $('.top_menu_item').parent('li').removeClass('active');
                }
            }
        });
    });
</script>
</body>


</html>