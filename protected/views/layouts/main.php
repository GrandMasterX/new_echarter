<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
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
        <div id="overlay" style="display: none;"></div>
        <?php $this->renderPartial('/layouts/header');?>
        <div class="container">
            <div class="wrap">
                <? echo $content;?>
            </div>
        </div>
        <?php $this->renderPartial('/layouts/popular_container');?>
        <?php $this->renderPartial('/layouts/footer');?>
        <script>
            $(document).ready(function() {
                $('.menu_cont a').click(function() {
                    var _num = $(this).data('num');
                    $('.menu_cont .block').removeClass('active');
                    $(this).parent().addClass('active');
                });

                $('.more.item > a').click(function() {
                    $('#overlay').show();
                    $('.popup.order').show();
                    return false;
                });
                $('a.moreTripInfo').live('click', function(){
                    $('body').find('#overlay').show();
                    $(this).closest('div').find('div.popup.order').show();
                    return false;
                });
                $('.close_popup').click(function() {
                    $('#overlay').hide();
                    $(this).closest('.popup').hide();
                });

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
            });
        </script>
    </body>


</html>