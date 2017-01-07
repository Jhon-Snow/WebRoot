<?php
/* @var $this ComunidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comunidades',
);

$this->menu=array(
	array('label'=>'Registrar Comunidad', 'url'=>array('create')),
);
?>

<center>
<?php echo TbHtml::pageheader('Comunidades','',$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php $this->widget('booster.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	// 'htmlOptions'=>array('style'=>'border:solid;border-radius:5px;border-color:#00b0f0'),

)); ?>
