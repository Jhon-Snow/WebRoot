<?php
/* @var $this HogarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hogars',
);

$this->menu=array(
	array('label'=>'Create Hogar', 'url'=>array('create')),
	array('label'=>'Manage Hogar', 'url'=>array('admin')),
);
?>

<h1>Hogars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
