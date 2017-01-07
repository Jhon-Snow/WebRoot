<?php
/* @var $this ResideController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Resides',
);

$this->menu=array(
	array('label'=>'Create Reside', 'url'=>array('create')),
	array('label'=>'Manage Reside', 'url'=>array('admin')),
);
?>

<h1>Resides</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
