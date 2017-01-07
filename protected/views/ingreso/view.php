<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Ingresos'=>array('index'),
	$model->ING_correl,
);

$this->menu=array(
	array('label'=>'List Ingreso', 'url'=>array('index')),
	array('label'=>'Create Ingreso', 'url'=>array('create')),
	array('label'=>'Update Ingreso', 'url'=>array('update', 'id'=>$model->ING_correl)),
	array('label'=>'Delete Ingreso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ING_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ingreso', 'url'=>array('admin')),
);
?>

<h1>View Ingreso #<?php echo $model->ING_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ING_correl',
		'ING_COM_correl',
		'ING_glosa',
		'ING_detalle',
		'ING_fecha',
	),
)); ?>
