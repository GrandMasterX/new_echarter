<?php
    $this->breadcrumbs=array(
        'Глобальные переменные'=>array('admin'),
        'Список',
    );
?>

<h1>Список переменных</h1>

<?php $this->widget('modules.admin.components.Toolbar', array(
	'model'=>$model 
)) ?>

<div class="create-form" style="display: none">
<?php $this->renderPartial('_form',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'admin-grid',
	'type'=>'striped',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'modules.admin.components.AdminCheckBoxColumn',
        ),	
		array(
			'header'=>'#',
			'name'=>'id',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
		array(
			'name'=>'key',
			'type'=>'raw',
			'value'=>function($data, $roe) {
				return CHtml::link($data->key, array('/admin/config/update', 'id'=>$data->id));
			}
		),
		'value',
		'description',
		array(
			'class'=>'modules.admin.components.AdminButtonColumn',
		),
	),
)); ?>