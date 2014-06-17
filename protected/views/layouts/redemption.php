<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HOME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="static/css/redemption/normalize.min.css">
    <link rel="stylesheet" href="static/css/redemption/echarter_style.css">
    <link rel="stylesheet" href="static/css/redemption/wSelect_search.css">

    <link rel="stylesheet" href="static/css/redemption/radio.css">
    <script src="static/js/vendor/modernizr-2.6.2.min.js"></script>
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