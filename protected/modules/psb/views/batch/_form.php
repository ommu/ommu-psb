<?php
/**
 * Psb Year Batches (psb-year-batch)
 * @var $this BatchController * @var $model PsbYearBatch * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'psb-year-batch-form',
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
			<?php echo $form->labelEx($model,'year_id'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'year_id',array('size'=>11,'maxlength'=>11)); ?>
				<?php echo $form->error($model,'year_id'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'batch_start'); ?>
			<div class="desc">
				<?php
				!$model->isNewRecord ? ($model->batch_start != '0000-00-00' ? $model->batch_start = date('d-m-Y', strtotime($model->batch_start)) : '') : '';
				//echo $form->textField($model,'batch_start');
				$this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$model,
					'attribute'=>'batch_start',
					//'mode'=>'datetime',
					'options'=>array(
						'dateFormat' => 'dd-mm-yy',
					),
					'htmlOptions'=>array(
						'class' => 'span-4',
					 ),
				)); ?>
				<?php echo $form->error($model,'batch_start'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'batch_finish'); ?>
			<div class="desc">
				<?php
				!$model->isNewRecord ? ($model->batch_finish != '0000-00-00' ? $model->batch_finish = date('d-m-Y', strtotime($model->batch_finish)) : '') : '';
				//echo $form->textField($model,'batch_finish');
				$this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'model'=>$model,
					'attribute'=>'batch_finish',
					//'mode'=>'datetime',
					'options'=>array(
						'dateFormat' => 'dd-mm-yy',
					),
					'htmlOptions'=>array(
						'class' => 'span-4',
					 ),
				)); ?>
				<?php echo $form->error($model,'batch_finish'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'modified_id'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'modified_id',array('size'=>11,'maxlength'=>11)); ?>
				<?php echo $form->error($model,'modified_id'); ?>
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


