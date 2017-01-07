<?php
/* @var $this MultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Multas',
);

$this->menu=array(
	array('label'=>'Create Multa', 'url'=>array('create')),
	array('label'=>'Manage Multa', 'url'=>array('admin')),
);
?>

<h1>Multas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
