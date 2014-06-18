<header>
    <div class="wrap clearfix">
        <div class="wrap_top clearfix">
            <a name="top" id="top"></a>
            <div class="top_header clearfix right">
                <div class="dictum left">Удобный заказ чартеров</div>
                <div class="lk_office right">
                    <ul class="clearfix">
                        <li><a href="/redemption">Выкуп заказа</a></li>
                        <li><a href="#">Партнерам</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                        <? if(Yii::app()->user->isGuest) {?>
                        <li>
                            <a class="top_menu_item" href="javascript:;">
                                <span>Личный кабинет</span>
                                <span class="ico"></span>
                            </a>
                            <div class="popup_login clearfix">
                                <div class="top"></div>
                                <div class="block_login clearfix">
                                    <div class="social left">
                                        <h5>Войти с помощью социальных сетей</h5>
                                        <ul class="clearfix">
                                            <?php $this->widget('ext.hoauth.widgets.HOAuth'); ?>
                                        </ul>
                                        <h5>Регистрация</h5>
                                        <p>Зарегистрированные пользователи получают возможность заказывать быстрее и удобнее. Регистрация бесплатная и занимает не более 1 минуты Вашего времени.</p>
                                    </div>
                                    <div class="form_block right">
                                        <div class="form">
                                            <h5>Вход в личный кабинет:</h5>
                                            <?php $this->widget('application.components.widgets.LogInWidget'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?}else{?>
                            <li>
                                <a href="/privatoffice">Личный кабинет</a>
                            </li>
                        <?}?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu_header clearfix">
            <a href="/" class="logo_header left"></a>
            <div class="nav left">
                <ul class="clearfix">
                    <li><a href="/" class="first">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="number">
                <img alt="" src="static/img/phone_big.png" />
            </div>
        </div>
    </div>
</header>
