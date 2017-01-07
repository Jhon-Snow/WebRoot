<?php
/* @var $this MultaController */
/* @var $data Multa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUL_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->MUL_correl), array('view', 'id'=>$data->MUL_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUL_USU_correl')); ?>:</b>
	<?php echo CHtml::encode($data->MUL_USU_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUL_glosa')); ?>:</b>
	<?php echo CHtml::encode($data->MUL_glosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUL_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->MUL_detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MUL_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->MUL_fecha); ?>
	<br />


</div>