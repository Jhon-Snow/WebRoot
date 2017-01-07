<?php
/* @var $this ResideController */
/* @var $model Reside */

$this->breadcrumbs=array(
	'Resides'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reside', 'url'=>array('index')),
	array('label'=>'Manage Reside', 'url'=>array('admin')),
);
?>

<h1>Create Reside</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>