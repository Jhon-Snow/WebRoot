<?php
/* @var $this ServiciosController */
/* @var $data Servicios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SER_correl), array('view', 'id'=>$data->SER_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_COM_correl')); ?>:</b>
	<?php echo CHtml::encode($data->SER_COM_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_PRO_correl')); ?>:</b>
	<?php echo CHtml::encode($data->SER_PRO_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->SER_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->SER_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_monto')); ?>:</b>
	<?php echo CHtml::encode($data->SER_monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_estado')); ?>:</b>
	<?php echo CHtml::encode($data->SER_estado); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SER_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->SER_fecha); ?>
	<br />

	*/ ?>

</div>