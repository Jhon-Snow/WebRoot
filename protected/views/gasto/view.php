<?php
/* @var $this GastoController */
/* @var $model Gasto */

$this->breadcrumbs=array(
	'Gastos'=>array('index'),
	$model->GAS_correl,
);

$this->menu=array(
	array('label'=>'List Gasto', 'url'=>array('index')),
	array('label'=>'Create Gasto', 'url'=>array('create')),
	array('label'=>'Update Gasto', 'url'=>array('update', 'id'=>$model->GAS_correl)),
	array('label'=>'Delete Gasto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GAS_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gasto', 'url'=>array('admin')),
);
?>

<h1>View Gasto #<?php echo $model->GAS_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GAS_correl',
		'GAS_CUE_correl',
		'GAS_nombre',
		'GAS_monto',
	),
)); ?>
