<?php
$this->breadcrumbs=array(
	'Администраторы'=>array('admin'),
	'Создать',
);

?>

<h1>Создать администратора</h1>

<div class="create-form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>