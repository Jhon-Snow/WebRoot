<?php
/* @var $this RecideController */
/* @var $data Recide */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RES_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RES_correl), array('view', 'id'=>$data->RES_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RES_USU_correl')); ?>:</b>
	<?php echo CHtml::encode($data->RES_USU_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RES_HOG_correl')); ?>:</b>
	<?php echo CHtml::encode($data->RES_HOG_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RES_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->RES_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RES_fin')); ?>:</b>
	<?php echo CHtml::encode($data->RES_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RES_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->RES_tipo); ?>
	<br />


</div>