<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USU_correl'); ?>
		<?php echo $form->textField($model,'USU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_username'); ?>
		<?php echo $form->textField($model,'USU_username',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_nombre'); ?>
		<?php echo $form->textField($model,'USU_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_apellidoPat'); ?>
		<?php echo $form->textField($model,'USU_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_apellidoMat'); ?>
		<?php echo $form->textField($model,'USU_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_rut'); ?>
		<?php echo $form->textField($model,'USU_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_role'); ?>
		<?php echo $form->textField($model,'USU_role',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_tipo'); ?>
		<?php echo $form->textField($model,'USU_tipo',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_telefono'); ?>
		<?php echo $form->textField($model,'USU_telefono',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_correo'); ?>
		<?php echo $form->textField($model,'USU_correo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_estado'); ?>
		<?php echo $form->textField($model,'USU_estado',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->