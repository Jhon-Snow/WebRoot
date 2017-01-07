<?php
/* @var $this AdministraController */
/* @var $model Administra */

$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	'Administración '.Comunidad::model()->findByPk($_GET['id'])->COM_nombre=>array('admin','id'=>$_GET['id']),
	'Editar',
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$_GET['id'])),
);
$usuario=USUARIO::model()->findByPk($model->ADM_USU_correl);
?>

<center>
<?php echo TbHtml::pageheader('Editar','Administrador'." ".$usuario->USU_nombre." ".$usuario->USU_paterno,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>