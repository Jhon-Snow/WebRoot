<?php
/* @var $this HorarioController */
/* @var $data Horario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOR_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->HOR_correl), array('view', 'id'=>$data->HOR_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOR_USU_correl')); ?>:</b>
	<?php echo CHtml::encode($data->HOR_USU_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOR_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->HOR_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOR_salida')); ?>:</b>
	<?php echo CHtml::encode($data->HOR_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOR_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->HOR_fecha); ?>
	<br />


</div>