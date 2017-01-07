<?php
/* @var $this CuentaController */
/* @var $model Cuenta */

$this->breadcrumbs=array(
	'Cuentas'=>array('index'),
	$model->CUE_correl=>array('view','id'=>$model->CUE_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cuenta', 'url'=>array('index')),
	array('label'=>'Create Cuenta', 'url'=>array('create')),
	array('label'=>'View Cuenta', 'url'=>array('view', 'id'=>$model->CUE_correl)),
	array('label'=>'Manage Cuenta', 'url'=>array('admin')),
);
?>

<h1>Update Cuenta <?php echo $model->CUE_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>