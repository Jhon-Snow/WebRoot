<?php
/* @var $this AdministraController */
/* @var $data Administra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ADM_correl), array('view', 'id'=>$data->ADM_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_fin')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_USU_correl')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_USU_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_COM_correl')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_COM_correl); ?>
	<br />


</div>