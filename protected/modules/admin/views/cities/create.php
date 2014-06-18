<?php
$this->breadcrumbs=array(
	'Города'=>array('admin'),
	'Создать',
);

?>

<h1>Создать Город</h1>

<div class="create-form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>