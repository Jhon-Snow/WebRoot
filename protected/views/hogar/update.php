<?php
/* @var $this HogarController */
/* @var $model Hogar */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Hogares de '.Comunidad::model()->findByPk($model->HOG_COM_correl)->COM_nombre=>array('admin','id'=>$model->HOG_COM_correl),
	'Editar '.$model->HOG_numero,
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$model->HOG_COM_correl)),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Hogar'." ".$model->HOG_numero,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>