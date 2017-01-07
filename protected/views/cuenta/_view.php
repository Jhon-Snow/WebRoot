<?php
/* @var $this CuentaController */
/* @var $data Cuenta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUE_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CUE_correl), array('view', 'id'=>$data->CUE_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUE_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->CUE_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUE_estado')); ?>:</b>
	<?php echo CHtml::encode($data->CUE_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUE_saldo')); ?>:</b>
	<?php echo CHtml::encode($data->CUE_saldo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUE_HOG_correl')); ?>:</b>
	<?php echo CHtml::encode($data->CUE_HOG_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUE_fin')); ?>:</b>
	<?php echo CHtml::encode($data->CUE_fin); ?>
	<br />


</div>