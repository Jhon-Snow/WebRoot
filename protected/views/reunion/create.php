<?php
/* @var $this ReunionController */
/* @var $model Reunion */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Reuniones de '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre=>array('admin','id'=>$_GET['id']),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Registrar','Reunion',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>