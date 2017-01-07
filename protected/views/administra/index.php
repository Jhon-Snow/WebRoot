<?php
/* @var $this AdministraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Administras',
);

$this->menu=array(
	array('label'=>'Create Administra', 'url'=>array('create')),
	array('label'=>'Manage Administra', 'url'=>array('admin')),
);
?>

<h1>Administras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
