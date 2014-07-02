<div id="overlay" style="display: <?if(isset($page) && !empty($page)){?>block<?}else{?>none<?}?>;"></div>
<header>
    <div class="wrap clearfix">
        <?php $this->renderPartial('/layouts/header');?>
        <div class="container">
            <div class="wrap">
                <? echo $form;?>
            </div>
        </div>
    </div>
</header>
<?php $this->renderPartial('/layouts/popular_container',array('page'=>$page));?>
