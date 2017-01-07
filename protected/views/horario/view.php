<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->HOR_correl,
);

$this->menu=array(
	array('label'=>'List Horario', 'url'=>array('index')),
	array('label'=>'Create Horario', 'url'=>array('create')),
	array('label'=>'Update Horario', 'url'=>array('update', 'id'=>$model->HOR_correl)),
	array('label'=>'Delete Horario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->HOR_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Horario', 'url'=>array('admin')),
);
?>

<h1>View Horario #<?php echo $model->HOR_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'HOR_correl',
		'HOR_USU_correl',
		'HOR_entrada',
		'HOR_salida',
		'HOR_fecha',
	),
)); ?>
