<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Noticias de '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre=>array('admin','id'=>$_GET['id']),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Registrar','Noticia',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>