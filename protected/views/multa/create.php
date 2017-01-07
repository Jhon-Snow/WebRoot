<?php
/* @var $this MultaController */
/* @var $model Multa */

$this->breadcrumbs=array(
	'Usuarios'=>array('//usuario/admin'),
	'Multas de '.Usuario::model()->findByPk($model->MUL_USU_correl)->USU_rut=>array('admin','id'=>$model->MUL_USU_correl),
	'Registrar'
);

$this->menu=array(
	array('label'=>'Cancelar', 'url'=>array('admin','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Registrar','Multa a rut '.'"'.Usuario::model()->findByPk($_GET['id'])->USU_rut.'" ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>