<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mail-form',
    'action' => ($model->isNewRecord) ? $this->createUrl('templates/create') : $this->createUrl('templates/update', array('id' => $model->id)),
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => false,
    ),
)); ?>
    <? //var_dump($model);die;?>
	<?php echo $form->errorSummary($model); ?>
	<?php //echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'firstName',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'lastName',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'middleName',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'birthdate',array('class'=>'span5 birthdate','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'passport',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'psprt_date',array('class'=>'span5 psprt_date','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'citizenship',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textFieldRow($model,'gender',array('class'=>'span5','maxlength'=>60)); ?>
    <label for="grous">Группа:</label>
<?php
    echo CHtml::activeDropDownList($model, 'group_id',
        Chtml::listData(Groups::model()->findAllByAttributes(array('user_id'=>Yii::app()->user->id)), 'id', 'title'),
        array('empty'=>'Выберите группу'),array('class'=>'span5'))
?>

	<hr class="clear" />
	
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
	)); ?>
	
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'type'=>'danger',
		'url' => array('/privatoffice/templates/all'),
		'label'=>'Отмена',
		'htmlOptions' =>array(
			'class' => 'cancel-button'
		)
	)); ?>

<?php $this->endWidget(); ?>
