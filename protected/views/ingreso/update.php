<?php
/* @var $this IngresoController */
/* @var $model Ingreso */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Ingresos de '.Comunidad::model()->findByPk($model->ING_COM_correl)->COM_nombre=>array('admin','id'=>$model->ING_COM_correl),
	'Editar '.$model->ING_glosa,
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$model->ING_COM_correl)),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Ingreso'." ".$model->ING_glosa,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>