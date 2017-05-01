<?php
/**
 * Psb Schools (psb-schools)
 * @var $this SchoolController
 * @var $model PsbSchools
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/PSB
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Psb Schools'=>array('manage'),
		'Create',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>