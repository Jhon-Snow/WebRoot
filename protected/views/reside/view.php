<?php
/* @var $this ResideController */
/* @var $model Reside */

$this->breadcrumbs=array(
	'Resides'=>array('index'),
	$model->RES_correl,
);

$this->menu=array(
	array('label'=>'List Reside', 'url'=>array('index')),
	array('label'=>'Create Reside', 'url'=>array('create')),
	array('label'=>'Update Reside', 'url'=>array('update', 'id'=>$model->RES_correl)),
	array('label'=>'Delete Reside', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RES_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reside', 'url'=>array('admin')),
);
?>

<h1>View Reside #<?php echo $model->RES_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RES_correl',
		'RES_USU_correl',
		'RES_HOG_correl',
		'RES_inicio',
		'RES_fin',
		'RES_tipo',
	),
)); ?>
