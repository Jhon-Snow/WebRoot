<?php
/* @var $this HogarController */
/* @var $model Hogar */


$this->breadcrumbs=array(
	'Comunidad'=>array('//comunidad/admin'),
	Comunidad::model()->findByPk($_GET['id'])->COM_nombre,
);

$this->menu=array(
	array('label'=>'Registrar Hogar', 'url'=>array('create','id'=>$_GET['id'])),
);
?>

<center>
<?php echo TbHtml::pageheader('Administrar',Comunidad::model()->findByPk($_GET['id'])->COM_nombre.' " ',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>


<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'hogar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type' => 'striped bordered condensed',
	'columns'=>array(
		// 'HOG_correl',
		// 'HOG_COM_correl',
		'HOG_pasaje',
		'HOG_numero',
		'HOG_metros',
		'HOG_habitaciones',
		'HOG_bagnos',
		'HOG_estado',
		'HOG_porcentaje',
		'HOG_habitado',
		// 'HOG_dueno',
		array(	'name'=>'HOG_dueno',
				'value'=>'$data->HOG_dueno',
				'filter'=>false),
		array(	'name'=>'HOG_arren',
				'value'=>'$data->HOG_arren',
				'filter'=>false),
		array(
        	//call the function 'renderButtons' from the current controller
        	'value'=>array($this,'renderButtons'),'htmlOptions'=>array('style'=>'width:10%')
    		),
	),
)); ?>
