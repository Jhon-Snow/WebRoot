<?php
/* @var $this ReunionController */
/* @var $data Reunion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('REU_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->REU_correl), array('view', 'id'=>$data->REU_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REU_COM_correl')); ?>:</b>
	<?php echo CHtml::encode($data->REU_COM_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REU_asunto')); ?>:</b>
	<?php echo CHtml::encode($data->REU_asunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REU_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->REU_detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REU_asistencia')); ?>:</b>
	<?php echo CHtml::encode($data->REU_asistencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REU_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->REU_fecha); ?>
	<br />


</div>