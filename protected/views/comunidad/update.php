<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

$this->breadcrumbs=array(
	'Comunidad'=>array('admin'),
	'Editar '.$model->COM_nombre
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Comunidad'." ".$model->COM_nombre,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>