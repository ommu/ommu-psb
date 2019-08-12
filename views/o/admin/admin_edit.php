<?php
/**
 * Psb Registers (psb-registers)
 * @var $this AdminController
 * @var $model PsbRegisters
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @created date 27 April 2016, 12:23 WIB
 * @link https://github.com/ommu/ommu-psb
 *
 */

	$this->breadcrumbs=array(
		'Psb Registers'=>array('manage'),
		$model->register_id=>array('view','id'=>$model->register_id),
		Yii::t('phrase', 'Update'),
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array(
		'setting'=>$setting,
		'model'=>$model,
		'batch'=>$batch,
		'school'=>$school,
		'author'=>$author,
	)); ?>
</div>
