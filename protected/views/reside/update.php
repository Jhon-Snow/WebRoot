<?php
/* @var $this ResideController */
/* @var $model Reside */

$this->breadcrumbs=array(
	'Resides'=>array('index'),
	$model->RES_correl=>array('view','id'=>$model->RES_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reside', 'url'=>array('index')),
	array('label'=>'Create Reside', 'url'=>array('create')),
	array('label'=>'View Reside', 'url'=>array('view', 'id'=>$model->RES_correl)),
	array('label'=>'Manage Reside', 'url'=>array('admin')),
);
?>

<h1>Update Reside <?php echo $model->RES_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>