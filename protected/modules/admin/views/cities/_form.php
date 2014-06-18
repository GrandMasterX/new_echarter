<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cities-form',
    'action' => ($model->isNewRecord) ? $this->createUrl('cities/create') : $this->createUrl('cities/update', array('id' => $model->id)),
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => false,
    ),
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'alias',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'is_blocked',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'available',array('class'=>'span5')); ?>

	<?php echo $form->labelEx($model,'content'); ?>
	<?php $this->widget('ext.editMe.widgets.ExtEditMe', array(
		'model'=>$model,
		'attribute'=>'template',
		'uiColor'=>'#FFFFFF',
		'filebrowserImageUploadUrl' => '/admin/default/imageUpload',
		'ckeConfig' => array(
			'extraAllowedContent' => 'span'
		)
	)); ?>
	
	<hr class="clear" />
	
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
	)); ?>
	
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'type'=>'danger',
		'url' => array('/admin/cities/admin'),
		'label'=>'Отмена',
		'htmlOptions' =>array(
			'class' => 'cancel-button'
		)
	)); ?>

<?php $this->endWidget(); ?>
