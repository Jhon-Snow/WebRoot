<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

$this->breadcrumbs=array(
	// 'Usuarios'=>array('index'),
	'Comunidad',
);

$this->menu=array(
	// array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Registrar Comunidad', 'url'=>array('create')),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar','Comunidades',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'comunidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped bordered condensed',
	'columns'=>array(
		array(	'name'=>'COM_portada',
				'value'=>array($this,'renderImage'),
				'filter'=>false,
				'htmlOptions'=>array('style'=>'width:20%')),
		// 'COM_portada',
		'COM_nombre',
		'COM_hogares',
		'COM_fecha',
		array(	'name'=>'COM_admin',
				'value'=>'$data->COM_admin',
				'filter'=>false),
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),'htmlOptions'=>array('style'=>'width:7%')
    		),
	),
)); ?>
