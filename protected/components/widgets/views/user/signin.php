<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'signin-form',
    'htmlOptions' => array(
        'class' => 'clearfix',
    ),
    //'enableAjaxValidation'=>true,
    'clientOptions'=>array('validateOnSubmit'=>true),
    'focus'=>array($model,'firstName'),
)); ?>
<div class="item">
    <label>Электронная почта:</label>
    <?php echo $form->textField($model,'email',array('placeholder'=>'email','class'=>'enter_email','name'=>'enter_email')); ?>
    <?php echo $form->error($model,'email'); ?>
</div>
<div class="item">
    <label>Пароль:</label>
    <?php echo $form->textField($model,'password',array('placeholder'=>'password','class'=>'enter_pass','name'=>'enter_pass')); ?>
    <?php echo $form->error($model,'password'); ?>
</div>
<div class="btn clearfix" style="margin-top: 16px;">
    <?php echo CHtml::submitButton('', array('class'=>'enter_sign','value'=>'Вход','id'=>'sign')); ?>
    <?// echo CHtml::ajaxSubmitButton('sign up', 'site/register',array('class'=>'enter_sign','value'=>'Вход','id'=>'sign'));?>
    <a class="forgot" href="#">Забыли пароль?</a>
</div>
<? $this->endWidget(); ?>
