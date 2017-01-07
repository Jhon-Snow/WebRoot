<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'id'=>'noticia-form',
	'type' => 'horizontal',
	'enableAjaxValidation'=>false,'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->dropDownListGroup($model,'NOT_tipo',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Interes General'=>'Interes General','Urgente'=>'Urgente','Otros'=>'Otros'),
				'htmlOptions' => array('empty'=>'Seleccione Tipo de noticia'),
				)
			));  ?>
		<?php echo $form->textFieldGroup($model,'NOT_asunto',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->textAreaGroup($model,'NOT_detalle',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
		<?php echo $form->datePickerGroup($model,'NOT_fecha',array(
			'widgetOptions' => array(
				'options' => array(
					'language' => 'es',
					'format'=>'yyyy-mm-dd',
					 'autoclose'=> true,)
				,),
			'wrapperHtmlOptions' => array(
				'class' => 'col-sm-5',
			),
			'hint' => 'Si no ingresa fecha se tomara la fecha de hoy',
			'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>
		<?php echo $form->dropDownListGroup($model,'NOT_estado',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),
			'widgetOptions' => array(
				'data' => array('Habilitada'=>'Habilitada','No Habilitada'=>'No Habilitada'),
				'htmlOptions' => array('empty'=>'Seleccione Estado'),
			)
		));  ?>
		<?php echo $form->fileFieldGroup($model, 'NOT_imagen',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
			)
		); ?>
	
	<div class="row buttons">
		<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'primary',
				'label' => 'Aceptar',
				'htmlOptions'=>array(
					'style' => 'margin-left: 26%;',
					)
			)
		); ?>
		<?php $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'reset', 
				'label' => 'Borrar',
				'htmlOptions'=>array(
					'style' => 'margin-left: 2%;',
					)
				)
		); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->