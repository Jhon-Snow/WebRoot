<?php
/* @var $this HogarController */
/* @var $model Hogar */

$this->breadcrumbs=array(
	'Hogars'=>array('index'),
	$model->HOG_correl,
);

$this->menu=array(
	array('label'=>'List Hogar', 'url'=>array('index')),
	array('label'=>'Create Hogar', 'url'=>array('create')),
	array('label'=>'Update Hogar', 'url'=>array('update', 'id'=>$model->HOG_correl)),
	array('label'=>'Delete Hogar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->HOG_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hogar', 'url'=>array('admin')),
);
?>

<h1>View Hogar #<?php echo $model->HOG_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'HOG_correl',
		'HOG_COM_correl',
		'HOG_pasaje',
		'HOG_numero',
		'HOG_metros',
		'HOG_habitaciones',
		'HOG_bagnos',
	),
)); ?>
