<?php
/* @var $this MultaController */
/* @var $model Multa */

$this->breadcrumbs=array(
	'Usuarios'=>array('//usuario/admin'),
	'Multas de '.Usuario::model()->findByPk($_GET['id'])->USU_rut,
);

$this->menu=array(
	array('label'=>'Registrar Multa', 'url'=>array('create','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Multas al rut '.' " '.Usuario::model()->findByPk($_GET['id'])->USU_rut.' " ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'multa-grid',
	'dataProvider'=>$model->search(),
	'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		// 'MUL_correl',
		// 'MUL_USU_correl',
		'MUL_glosa',
		'MUL_detalle',
		'MUL_monto',
		'MUL_fecha',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
	),
)); ?>
