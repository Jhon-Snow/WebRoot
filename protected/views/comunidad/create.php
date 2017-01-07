<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

$this->breadcrumbs=array(
	'Comunidad'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<center>
<?php echo TbHtml::pageheader('Registrar','Comunidad',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>