<?php
/* @var $this CuentaController */
/* @var $model Cuenta */

$this->breadcrumbs=array(
	'Cuentas'=>array('index'),
	$model->CUE_correl,
);

$this->menu=array(
	array('label'=>'List Cuenta', 'url'=>array('index')),
	array('label'=>'Create Cuenta', 'url'=>array('create')),
	array('label'=>'Update Cuenta', 'url'=>array('update', 'id'=>$model->CUE_correl)),
	array('label'=>'Delete Cuenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CUE_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cuenta', 'url'=>array('admin')),
);
?>

<h1>View Cuenta #<?php echo $model->CUE_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CUE_correl',
		'CUE_fecha',
		'CUE_estado',
		'CUE_saldo',
		'CUE_HOG_correl',
		'CUE_fin',
	),
)); ?>
