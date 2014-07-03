<?php $form = $this->beginWidget('CActiveForm', array(
        'id'=>'signin-form',
        'htmlOptions' => array(
            'class' => 'clearfix',
        ),
        'clientOptions'=>array('validateOnSubmit'=>true),
        'focus'=>array($signin,'email'),
        'action' => '/login',
    ));
?>
    <div class="item">
        <label>Электронная почта:</label>
        <?php echo $form->textField($signin,'email',array('placeholder'=>'электронная почта','class'=>'enter_email','name'=>'enter_email')); ?>
        <?php echo $form->error($signin,'email'); ?>
    </div>
    <div class="item">
        <label>Пароль:</label>
        <?php echo $form->passwordField($signin,'password',array('placeholder'=>'пароль','class'=>'enter_pass','name'=>'enter_pass')); ?>
        <?php echo $form->error($signin,'password'); ?>
    </div>
    <div class="btn clearfix" style="margin-top: 16px;">
        <?php echo CHtml::submitButton('', array('class'=>'enter_sign','value'=>'Вход','id'=>'sign')); ?>
        <a class="forgot" href="/remind">Забыли пароль?</a>
    </div>
<? $this->endWidget(); ?>
