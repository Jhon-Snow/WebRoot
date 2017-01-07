<?php
/* @var $this DocumentoController */
/* @var $data Documento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOC_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DOC_correl), array('view', 'id'=>$data->DOC_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOC_REU_correl')); ?>:</b>
	<?php echo CHtml::encode($data->DOC_REU_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOC_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->DOC_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOC_url')); ?>:</b>
	<?php echo CHtml::encode($data->DOC_url); ?>
	<br />


</div>