<?php
    $this->breadcrumbs=array(
        'Производители'=>array('admin'),
        'Список',
    );
?>

<h1>Производители</h1>

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
			'name'=>'title',
			'type'=>'raw',
			'value'=>function($data, $roe) {
				return CHtml::link("{$data->title} ({$data->productsCount})", array('/admin/manufacturer/update', 'id'=>$data->id));
			}
		),
		'description',
		array(
            'class'=>'modules.admin.components.ActiveGridColumn',
		),
		array(
			'class'=>'modules.admin.components.AdminButtonColumn',
		),
	),
)); ?>