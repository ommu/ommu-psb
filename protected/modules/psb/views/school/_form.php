<?php
/**
 * Psb Schools (psb-schools)
 * @var $this SchoolController * @var $model PsbSchools * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'psb-schools-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>
<div class="dialog-content">
	<fieldset>

		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'school_name'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'school_name',array('size'=>60,'maxlength'=>64)); ?>
				<?php echo $form->error($model,'school_name'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'school_address'); ?>
			<div class="desc">
				<?php echo $form->textArea($model,'school_address',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'school_address'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'school_phone'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'school_phone',array('size'=>15,'maxlength'=>15)); ?>
				<?php echo $form->error($model,'school_phone'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'school_status'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'school_status',array('size'=>32,'maxlength'=>32)); ?>
				<?php echo $form->error($model,'school_status'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Phrase::trans(1,0) : Phrase::trans(2,0) ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Phrase::trans(4,0), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>


