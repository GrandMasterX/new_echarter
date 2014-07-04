<div class="wrap" style=" padding-left: 20px; padding-bottom: 20px; border: 1px solid #bbbbbb; box-sizing: border-box; background-color: #fff6c6; height: 312px;">
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

