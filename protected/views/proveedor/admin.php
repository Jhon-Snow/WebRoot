<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Administrar',
);

$this->menu=array(
	array('label'=>'Registrar Proveedor', 'url'=>array('create')),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Proveedores',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>


<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'proveedor-grid',
	'dataProvider'=>$model->search(),
	'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		// 'PRO_correl',
		array(	'name'=>'PRO_logo',
				'value'=>array($this,'renderImage'),
				'filter'=>false,
				'htmlOptions'=>array('style'=>'width:20%')),
		'PRO_nombre',
		'PRO_fono',
		'PRO_email',
		// 'PRO_estado',
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),
    		),
	),
)); ?>
