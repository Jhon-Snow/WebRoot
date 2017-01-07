<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PRO_correl), array('view', 'id'=>$data->PRO_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_imagen')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_imagen); ?>
	<br />


</div>