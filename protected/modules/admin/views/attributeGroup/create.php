<?php
$this->breadcrumbs=array(
	'Группы атрибутов'=>array('admin'),
	'Создать',
);

?>

<h1>Создать группу</h1>

<div class="create-form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>