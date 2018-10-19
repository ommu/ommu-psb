<?php
/**
 * Psb Registers (psb-registers)
 * @var $this AdminController
 * @var $model PsbRegisters
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @created date 27 April 2016, 12:23 WIB
 * @link https://github.com/ommu/ommu-psb
 *
 */

	$this->breadcrumbs=array(
		'Psb Registers'=>array('manage'),
		Yii::t('phrase', 'Create'),
	);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo $this->flashMessage(Yii::app()->user->getFlash('success'), 'success');
?>
<?php //end.Messages ?>

<div class="form">
	<?php echo $this->renderPartial('_form', array(
		'batch'=>$batch,
		'setting'=>$setting,
		'model'=>$model,
		'school'=>$school,
		'author'=>$author,
	)); ?>
</div>
