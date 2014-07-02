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
        <a href="javascript:;" style="font-weight: bold;">(<? echo $user->displayName;?>)</a>
    </li>
<?}?>