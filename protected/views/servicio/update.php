<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Servicios de '.Comunidad::model()->findByPk($model->SER_COM_correl)->COM_nombre=>array('admin','id'=>$model->SER_COM_correl),
	'Editar '.$model->SER_nombre,
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$model->SER_COM_correl)),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Servicio'." ".$model->SER_nombre,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>