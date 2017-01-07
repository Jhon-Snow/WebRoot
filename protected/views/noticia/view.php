<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->NOT_correl,
);

$this->menu=array(
	array('label'=>'List Noticia', 'url'=>array('index')),
	array('label'=>'Create Noticia', 'url'=>array('create')),
	array('label'=>'Update Noticia', 'url'=>array('update', 'id'=>$model->NOT_correl)),
	array('label'=>'Delete Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NOT_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Noticia', 'url'=>array('admin')),
);
?>

<h1>View Noticia #<?php echo $model->NOT_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NOT_correl',
		'NOT_COM_correl',
		'NOT_tipo',
		'NOT_asunto',
		'NOT_detalle',
		'NOT_fecha',
		'NOT_estado',
	),
)); ?>
