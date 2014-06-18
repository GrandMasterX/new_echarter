<?php
$this->breadcrumbs=array(
	'Города'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Редактировать город',
);

?>

<h1>Редактировать: <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>