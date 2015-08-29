<?php
/**
 * Psb Years (psb-years)
 * @var $this YearController * @var $model PsbYears *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Psb Years'=>array('manage'),
		$model->year_id=>array('view','id'=>$model->year_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>