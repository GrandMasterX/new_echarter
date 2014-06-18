<?php
$this->breadcrumbs=array(
	'Шаблоны'=>array('admin'),
	'Создать',
);

?>

<h1>Создать шаблон</h1>

<div class="create-form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>