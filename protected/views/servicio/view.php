<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicioses'=>array('index'),
	$model->SER_correl,
);

$this->menu=array(
	array('label'=>'List Servicios', 'url'=>array('index')),
	array('label'=>'Create Servicios', 'url'=>array('create')),
	array('label'=>'Update Servicios', 'url'=>array('update', 'id'=>$model->SER_correl)),
	array('label'=>'Delete Servicios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SER_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Servicios', 'url'=>array('admin')),
);
?>

<h1>View Servicios #<?php echo $model->SER_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SER_correl',
		'SER_COM_correl',
		'SER_PRO_correl',
		'SER_nombre',
		'SER_tipo',
		'SER_monto',
		'SER_estado',
		'SER_fecha',
	),
)); ?>
