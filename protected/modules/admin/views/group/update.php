<?php
$this->breadcrumbs=array(
	'Группы пользователей'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Редактировать',
);

?>

<h1>Редактировать: <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>