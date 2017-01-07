<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->HOR_correl=>array('view','id'=>$model->HOR_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Horario', 'url'=>array('index')),
	array('label'=>'Create Horario', 'url'=>array('create')),
	array('label'=>'View Horario', 'url'=>array('view', 'id'=>$model->HOR_correl)),
	array('label'=>'Manage Horario', 'url'=>array('admin')),
);
?>

<h1>Update Horario <?php echo $model->HOR_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>