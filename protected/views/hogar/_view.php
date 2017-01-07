<?php
/* @var $this HogarController */
/* @var $data Hogar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->HOG_correl), array('view', 'id'=>$data->HOG_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_COM_correl')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_COM_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_pasaje')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_pasaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_numero')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_metros')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_metros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_habitaciones')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_habitaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_bagnos')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_bagnos); ?>
	<br />


</div>