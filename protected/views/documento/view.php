<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->DOC_correl,
);

$this->menu=array(
	array('label'=>'List Documento', 'url'=>array('index')),
	array('label'=>'Create Documento', 'url'=>array('create')),
	array('label'=>'Update Documento', 'url'=>array('update', 'id'=>$model->DOC_correl)),
	array('label'=>'Delete Documento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DOC_correl),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Documento', 'url'=>array('admin')),
);
?>

<h1>View Documento #<?php echo $model->DOC_correl; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DOC_correl',
		'DOC_REU_correl',
		'DOC_nombre',
		'DOC_url',
	),
)); ?>
