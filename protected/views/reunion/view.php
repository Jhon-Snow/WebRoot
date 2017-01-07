<?php
/* @var $this ReunionController */
/* @var $model Reunion */

$this->breadcrumbs=array(
	'Reunions'=>array('index'),
	$model->REU_correl,
);

$this->menu=array(
	array('label'=>'List Reunion', 'url'=>array('index')),
	array('label'=>'Create Reunion', 'url'=>array('create')),
	array('label'=>'Update Reunion', 'url'=>array('update', 'id'=>$model->REU_correl)),
	array('label'=>'Delete Reunion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REU_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reunion', 'url'=>array('admin')),
);
?>

<h1>View Reunion #<?php echo $model->REU_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'REU_correl',
		'REU_COM_correl',
		'REU_asunto',
		'REU_detalle',
		'REU_asistencia',
		'REU_fecha',
	),
)); ?>
