<?php
/* @var $this AdministraController */
/* @var $model Administra */

$this->breadcrumbs=array(
	'Administras'=>array('index'),
	$model->ADM_correl,
);

$this->menu=array(
	array('label'=>'List Administra', 'url'=>array('index')),
	array('label'=>'Create Administra', 'url'=>array('create')),
	array('label'=>'Update Administra', 'url'=>array('update', 'id'=>$model->ADM_correl)),
	array('label'=>'Delete Administra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ADM_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Administra', 'url'=>array('admin')),
);
?>

<h1>View Administra #<?php echo $model->ADM_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ADM_correl',
		'ADM_inicio',
		'ADM_fin',
		'ADM_USU_correl',
		'ADM_COM_correl',
	),
)); ?>
