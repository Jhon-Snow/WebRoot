<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOT_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NOT_correl), array('view', 'id'=>$data->NOT_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOT_COM_correl')); ?>:</b>
	<?php echo CHtml::encode($data->NOT_COM_correl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOT_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->NOT_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOT_asunto')); ?>:</b>
	<?php echo CHtml::encode($data->NOT_asunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOT_detalle')); ?>:</b>
	<?php echo CHtml::encode($data->NOT_detalle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOT_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->NOT_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOT_estado')); ?>:</b>
	<?php echo CHtml::encode($data->NOT_estado); ?>
	<br />


</div>