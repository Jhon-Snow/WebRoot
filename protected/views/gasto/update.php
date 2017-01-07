<?php
/* @var $this GastoController */
/* @var $model Gasto */

$this->breadcrumbs=array(
	'Administrar'=>array('admin','id'=>$model->GAS_CUE_correl),
	'Editar'." ".$model->GAS_nombre
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$model->GAS_CUE_correl)),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Gasto '." ".$model->GAS_nombre,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>