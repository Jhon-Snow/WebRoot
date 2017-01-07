<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Administrar'=>array('admin'),
	'Editar'." ".$model->PRO_nombre
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Proveedor'." ".$model->PRO_nombre,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>