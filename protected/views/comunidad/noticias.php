<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

$this->breadcrumbs=array(
	// 'Home'=>array('//index'),
	'Noticias',
);
?>


<center>
<?php echo TbHtml::pageheader('Noticias',Comunidad::model()->findByPk($_GET['id'])->COM_nombre,$htmlOption=array('style'=>'color:#00b0f0')); ?>
</center>

<?php 
$noticias=$this->cargaNoticia($_GET["id"]);
echo "<center>".$noticias."</center>";
?>
