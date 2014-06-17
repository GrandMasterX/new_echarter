<header>
    <div class="wrap clearfix">
        <div class="wrap_top clearfix">
            <div class="top_header clearfix right">
                <div class="dictum left">Удобний заказ чартеров</div>
                <div class="lk_office right">
                    <ul class="clearfix">
                        <li><a href="/redemption">Выкуп заказа</a></li>
                        <li><a href="#">Партнерам</a></li>
                        <li><a href="#">Контакты</a></li>
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
                                            <?php $this->widget('application.components.widgets.RegistrationWidget'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu_header clearfix">
            <a href="#" class="logo_header left"></a>
            <div class="nav left">
                <ul class="clearfix">
                    <li><a href="#" class="first">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="number">8 (800) 88-888-88</div>
        </div>
    </div>
</header>
