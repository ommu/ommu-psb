<?php
/**
 * Psb Year Batches (psb-year-batch)
 * @var $this BatchController
 * @var $model PsbYearBatch
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-psb
 *
 */

	$this->breadcrumbs=array(
		'Psb Year Batches'=>array('manage'),
		$model->batch_id=>array('view','id'=>$model->batch_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>