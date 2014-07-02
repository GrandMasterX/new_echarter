<header>
    <div class="wrap clearfix">
        <?php $this->renderPartial('/layouts/header');?>
        <div class="container">
            <div class="wrap">
                <div class="block_login clearfix">
                    <div class="form_block">
                        <div class="form">
                            <h5>Регистрация:</h5>

                            <?php $form = $this->beginWidget('CActiveForm', array(
                                'id'=>'signin-form',
                                'htmlOptions' => array(
                                    'class' => 'clearfix',
                                ),
                                //'enableAjaxValidation'=>true,
                                'clientOptions'=>array('validateOnSubmit'=>true),
                                'focus'=>array($registration,'firstName'),
                            )); ?>

                            <div class="item">
                                <label>Фамилия:</label>
                                <?php echo $form->textField($registration,'lastName',array('placeholder'=>'Фамилия','class'=>'enter_email','name'=>'lastName')); ?>
                                <?php echo $form->error($registration,'lastName'); ?>
                            </div>
                            <div class="item">
                                <label>Имя:</label>
                                <?php echo $form->textField($registration,'firstName',array('placeholder'=>'Имя','class'=>'enter_email','name'=>'firstName')); ?>
                                <?php echo $form->error($registration,'firstName'); ?>
                            </div>
                            <div class="item">
                                <label>Электронная почта:</label>
                                <?php echo $form->textField($registration,'email',array('placeholder'=>'Электронная почта','class'=>'enter_email','name'=>'email')); ?>
                                <?php echo $form->error($registration,'email'); ?>
                            </div>
                            <div class="item">
                                <label>Пароль:</label>
                                <?php echo $form->textField($registration,'password',array('placeholder'=>'Пароль','class'=>'enter_email','name'=>'password')); ?>
                                <?php echo $form->error($registration,'password'); ?>
                            </div>
                            <div class="item">
                                <label>Пароль еще раз:</label>
                                <?php echo $form->textField($registration,'password_retype',array('placeholder'=>'Пароль еще раз','class'=>'enter_email','name'=>'password_retype')); ?>
                                <?php echo $form->error($registration,'password_retype'); ?>
                            </div>
                            <div class="btn clearfix" style="margin-top: 16px;">
                                <?php echo CHtml::submitButton('', array('class'=>'enter_sign','value'=>'Вход','id'=>'sign')); ?>
                                <?// echo CHtml::ajaxSubmitButton('sign up', 'site/register',array('class'=>'enter_sign','value'=>'Вход','id'=>'sign'));?>
                                <a class="forgot" href="/remind">Забыли пароль?</a>
                            </div>
                            <? $this->endWidget(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
