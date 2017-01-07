<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Administrar'=>array('admin'),
	'Editar'." ".$model->USU_rut
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin')),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Usuario'." ".$model->USU_rut,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>