<?php
/* @var $this DocumentoController */
/* @var $model Documento */

$this->breadcrumbs=array(
	'Documentos'=>array('index'),
	$model->DOC_correl=>array('view','id'=>$model->DOC_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Documento', 'url'=>array('index')),
	array('label'=>'Create Documento', 'url'=>array('create')),
	array('label'=>'View Documento', 'url'=>array('view', 'id'=>$model->DOC_correl)),
	array('label'=>'Manage Documento', 'url'=>array('admin')),
);
?>

<h1>Update Documento <?php echo $model->DOC_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>