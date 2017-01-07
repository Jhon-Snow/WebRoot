<?php
/* @var $this RecideController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recides',
);

$this->menu=array(
	array('label'=>'Create Recide', 'url'=>array('create')),
	array('label'=>'Manage Recide', 'url'=>array('admin')),
);
?>

<h1>Recides</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
