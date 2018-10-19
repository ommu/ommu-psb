<?php
/**
 * Psb Schools (psb-schools)
 * @var $this SchoolController
 * @var $model PsbSchools
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-psb
 *
 */

	$this->breadcrumbs=array(
		'Psb Schools'=>array('manage'),
		$model->school_id=>array('view','id'=>$model->school_id),
		Yii::t('phrase', 'Update'),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>