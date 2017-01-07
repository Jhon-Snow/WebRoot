<?php
/* @var $this RecideController */
/* @var $model Recide */

$this->breadcrumbs=array(
	'Recides'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recide', 'url'=>array('index')),
	array('label'=>'Manage Recide', 'url'=>array('admin')),
);
?>

<h1>Create Recide</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>