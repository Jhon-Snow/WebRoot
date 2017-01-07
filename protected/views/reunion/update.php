<?php
/* @var $this ReunionController */
/* @var $model Reunion */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Reuniones de '.Comunidad::model()->findByPk($model->REU_COM_correl)->COM_nombre=>array('admin','id'=>$model->REU_correl),
	'Editar '.$model->REU_asunto,
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$model->REU_correl)),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','reunion'." ".$model->REU_asunto,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>