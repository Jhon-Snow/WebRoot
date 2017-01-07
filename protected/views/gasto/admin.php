<?php
/* @var $this GastoController */
/* @var $model Gasto */

$this->breadcrumbs=array(
	'Administrar',
);

$this->menu=array(
	array('label'=>'Registrar Gasto', 'url'=>array('create','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Gastos '.' " '.Cuenta::model()->findByPk($_GET['id'])->CUE_fecha.' " ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'gasto-grid',
	'dataProvider'=>$model->search(),
	'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		// 'GAS_correl',
		'GAS_CUE_correl',
		'GAS_nombre',
		'GAS_monto',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
	),
)); ?>
