<header>
    <div class="wrap clearfix">
        <?php $this->renderPartial('/layouts/header');?>
        <div class="container">
            <div class="wrap">
                <div class="block_login clearfix">
                    <div class="form_block">
                        <div class="form">
                            <h5>Восстановление пароля:</h5>

                            <?php $form = $this->beginWidget('CActiveForm', array(
                                'id'=>'remind-form',
                                'enableAjaxValidation'=>true,
                                'clientOptions'=>array(
                                    'validateOnSubmit'=>true,
                                    'class' => 'clearfix',
                                ),
                                'focus'=>array($remind,'email'),
                            )); ?>
                            <div class="item">
                                <label>Электронная почта:</label>
                                <?php echo $form->error($remind,'email'); ?>
                                <?php echo $form->textField($remind,'email',array('placeholder'=>'Электронная почта','class'=>'enter_email','name'=>'email')); ?>
                            </div>

                            <div class="btn clearfix" style="margin-top: 16px;">
                                <?php echo CHtml::submitButton('', array('class'=>'enter_sign','value'=>'Напомнить','id'=>'sign')); ?>

                            </div>
                            <? $this->endWidget(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
