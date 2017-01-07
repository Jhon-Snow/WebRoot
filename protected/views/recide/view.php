<?php
/* @var $this RecideController */
/* @var $model Recide */

$this->breadcrumbs=array(
	'Recides'=>array('index'),
	$model->RES_correl,
);

$this->menu=array(
	array('label'=>'List Recide', 'url'=>array('index')),
	array('label'=>'Create Recide', 'url'=>array('create')),
	array('label'=>'Update Recide', 'url'=>array('update', 'id'=>$model->RES_correl)),
	array('label'=>'Delete Recide', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RES_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recide', 'url'=>array('admin')),
);
?>

<h1>View Recide #<?php echo $model->RES_correl; ?></h1>

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
