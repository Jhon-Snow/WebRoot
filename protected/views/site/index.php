<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php echo TbHtml::pageheader(
	'Bienvenido'," ".CHtml::encode(Yii::app()->user->name." a ".CHtml::encode(Yii::app()->name,$htmlOption=array(
		'style'=>'color:#00b0f0')))); ?>
