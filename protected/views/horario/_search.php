<?php
/* @var $this HorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'HOR_correl'); ?>
		<?php echo $form->textField($model,'HOR_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOR_USU_correl'); ?>
		<?php echo $form->textField($model,'HOR_USU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOR_entrada'); ?>
		<?php echo $form->textField($model,'HOR_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOR_salida'); ?>
		<?php echo $form->textField($model,'HOR_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOR_fecha'); ?>
		<?php echo $form->textField($model,'HOR_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->