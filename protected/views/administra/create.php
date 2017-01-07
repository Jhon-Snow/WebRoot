<?php
/* @var $this AdministraController */
/* @var $model Administra */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Administración '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre=>array('admin','id'=>$_GET['id']),
	'Asignar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$_GET['id'])),
);

?>


<center>
<?php echo TbHtml::pageheader('Asignar','Administrador',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>