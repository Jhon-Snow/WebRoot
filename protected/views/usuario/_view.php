<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_correl')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USU_correl), array('view', 'id'=>$data->USU_correl)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_username')); ?>:</b>
	<?php echo CHtml::encode($data->USU_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_password')); ?>:</b>
	<?php echo CHtml::encode($data->USU_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->USU_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_apellidoPat')); ?>:</b>
	<?php echo CHtml::encode($data->USU_apellidoPat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_apellidoMat')); ?>:</b>
	<?php echo CHtml::encode($data->USU_apellidoMat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_rut')); ?>:</b>
	<?php echo CHtml::encode($data->USU_rut); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_role')); ?>:</b>
	<?php echo CHtml::encode($data->USU_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->USU_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->USU_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_correo')); ?>:</b>
	<?php echo CHtml::encode($data->USU_correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_estado')); ?>:</b>
	<?php echo CHtml::encode($data->USU_estado); ?>
	<br />

	*/ ?>

</div>