<?php
/* @var $this GastoController */
/* @var $data Gasto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAS_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GAS_correl), array('view', 'id'=>$data->GAS_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAS_CUE_correl')); ?>:</b>
	<?php echo CHtml::encode($data->GAS_CUE_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAS_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->GAS_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAS_monto')); ?>:</b>
	<?php echo CHtml::encode($data->GAS_monto); ?>
	<br />


</div>