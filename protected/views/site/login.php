<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php echo TbHtml::pageheader('Iniciar','Sesion',$htmlOption=array('style'=>'color:#00b0f0')); ?>


<p>Por favor llene el siguiente formulario para autentificarse:</p>

<div class="form">
<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
        'htmlOptions' => array('class' => 'well col-sm-4'), // for inset effect
    )
); ?>

	<p class="note">Campos con <span class="required">*</span> Son obligatorios.</p>
	<?php echo $form->textFieldGroup($model,'username',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
	<?php echo $form->passwordFieldGroup($model,'password',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),));?>
	<div class="row rememberMe">
		<?php echo $form->checkboxGroup($model, 'rememberMe'); ?>
	</div>
	<div class="row buttons">
		<?php $this->widget('booster.widgets.TbButton',array(
			'buttonType' => 'submit', 
			'label' => 'Login','context' => 'primary',
			)); ?>
	<?php $this->widget(
			'booster.widgets.TbButton',
			array('buttonType' => 'reset', 'label' => 'Reset','htmlOptions'=>array('style'=>'margin-left: 4%'))
		); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
