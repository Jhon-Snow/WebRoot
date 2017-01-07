<?php
/* @var $this IngresoController */
/* @var $data Ingreso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ING_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ING_correl), array('view', 'id'=>$data->ING_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ING_COM_correl')); ?>:</b>
	<?php echo CHtml::encode($data->ING_COM_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ING_glosa')); ?>:</b>
	<?php echo CHtml::encode($data->ING_glosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ING_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->ING_detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ING_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->ING_fecha); ?>
	<br />


</div>