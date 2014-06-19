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
    <script type="text/javascript" src="/static/js/functions.js"></script>
    <link rel="shortcut icon" href="favicon.png">    <link rel="stylesheet" type="text/css" href="/static/css/form/form.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.editable-select.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery-ui.css">


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
    <script type="text/javascript" src="/static/js/date.js"></script>
    <script type="text/javascript" src="/static/js/ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="/static/js/form.js"></script>
    <script type="text/javascript" src="/static/js/newformscripts.js"></script>
    <? $this->renderPartial('/static/google_analitics');?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.datepicker').datepicker();
        });
    </script>



    <script type="text/javascript" src="http://plugins.old-ice.ru/free/resources/js/LoadEvent.js" charset="utf-8"></script></head>
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