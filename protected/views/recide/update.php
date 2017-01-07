<?php
/* @var $this RecideController */
/* @var $model Recide */

$this->breadcrumbs=array(
	'Recides'=>array('index'),
	$model->RES_correl=>array('view','id'=>$model->RES_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recide', 'url'=>array('index')),
	array('label'=>'Create Recide', 'url'=>array('create')),
	array('label'=>'View Recide', 'url'=>array('view', 'id'=>$model->RES_correl)),
	array('label'=>'Manage Recide', 'url'=>array('admin')),
);
?>

<h1>Update Recide <?php echo $model->RES_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>