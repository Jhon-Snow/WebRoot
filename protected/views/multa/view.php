<?php
/* @var $this MultaController */
/* @var $model Multa */

$this->breadcrumbs=array(
	'Multas'=>array('index'),
	$model->MUL_correl,
);

$this->menu=array(
	array('label'=>'List Multa', 'url'=>array('index')),
	array('label'=>'Create Multa', 'url'=>array('create')),
	array('label'=>'Update Multa', 'url'=>array('update', 'id'=>$model->MUL_correl)),
	array('label'=>'Delete Multa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->MUL_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Multa', 'url'=>array('admin')),
);
?>

<h1>View Multa #<?php echo $model->MUL_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MUL_correl',
		'MUL_USU_correl',
		'MUL_glosa',
		'MUL_detalle',
		'MUL_fecha',
	),
)); ?>
