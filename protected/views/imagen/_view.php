<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMA_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IMA_correl), array('view', 'id'=>$data->IMA_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMA_COM_correl')); ?>:</b>
	<?php echo CHtml::encode($data->IMA_COM_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMA_glosa')); ?>:</b>
	<?php echo CHtml::encode($data->IMA_glosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMA_url')); ?>:</b>
	<?php echo CHtml::encode($data->IMA_url); ?>
	<br />


</div>