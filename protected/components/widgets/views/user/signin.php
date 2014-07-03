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
        <?php echo $form->error($signin,'email'); ?>
        <?php echo $form->textField($signin,'email',array('placeholder'=>'электронная почта','class'=>'enter_email','name'=>'email')); ?>
    </div>
    <div class="item">
        <label>Пароль:</label>
        <?php echo $form->error($signin,'password'); ?>
        <?php echo $form->passwordField($signin,'password',array('placeholder'=>'пароль','class'=>'enter_pass','name'=>'password')); ?>
    </div>
    <div class="btn clearfix" style="margin-top: 16px;">
        <?php echo CHtml::ajaxSubmitButton(
            "Войти",
            "/login",
            array(
                'type'=>'POST',
                'data'=>'js:$("#signin-form").serialize()',
                'dataType'=>'json',
                'success'=>'js:function(data){
                   console.log(data)
                   if(data.result==="success"){
                      // do something on success, like redirect
                   }else{$("#some-container").html(data.msg);}
                }',
            ),
            array(
                'class'=>'enter_sign'
            )
        );
        ?>
        <a class="forgot" href="/remind">Забыли пароль?</a>
    </div>
<? $this->endWidget(); ?>
