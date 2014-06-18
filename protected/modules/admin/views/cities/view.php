<?php
$this->breadcrumbs=array(
	'Города'=>array('admin'),
	$model->name,
);
?>

<h1>Шаблон: <?php echo $model->name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'alias',
	),
)); ?>

<?php echo $model->template ?>

<br>

<?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'primary',
	'url' => array('/admin/cities/update', 'id' => $model->id),
	'icon' => 'pencil white',
	'label'=>'Редактировать',
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
	'type'=>'danger',
	'url' => array('/admin/cities/admin'),
	'label'=>'Отмена',
)); ?>
