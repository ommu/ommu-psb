<?php
/**
 * Psb Registers (psb-registers)
 * @var $this SiteController 
 * @var $model PsbRegisters 
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-psb
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Psb Registers'=>array('manage'),
		'Create',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array(
		'model'=>$model,
		'school'=>$school,
		'author'=>$author,
		'batch'=>$batch,
	)); ?>
</div>
