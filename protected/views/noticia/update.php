<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Noticias de '.Comunidad::model()->findByPk($model->NOT_COM_correl)->COM_nombre=>array('admin','id'=>$model->NOT_COM_correl),
	'Editar '.$model->NOT_asunto,
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$model->NOT_COM_correl)),
);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Hogar'." ".$model->NOT_asunto,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>