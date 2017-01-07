

<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<div id="content">
		<?php if (!empty($this->menu))
		 $this->widget(
    		'booster.widgets.TbButtonGroup',
    		array(
	        'size' => 'small',
	        'context' => 'info',
	        'buttons' => array(
	            array(
	                'label' => 'Opciones',
	                'items' => $this->menu
            	),
        	),
    	)
	);
?>
		<?php echo $content; ?>
	</div><!-- content -->
<?php $this->endContent(); ?>