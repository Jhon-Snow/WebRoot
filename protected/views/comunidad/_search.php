<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'COM_correl'); ?>
		<?php echo $form->textField($model,'COM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_nombre'); ?>
		<?php echo $form->textField($model,'COM_nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_hogares'); ?>
		<?php echo $form->textField($model,'COM_hogares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_portada'); ?>
		<?php echo $form->textField($model,'COM_portada',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_pago'); ?>
		<?php echo $form->textField($model,'COM_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->