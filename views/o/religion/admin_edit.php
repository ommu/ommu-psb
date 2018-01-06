<?php
/**
 * Psb Religions (psb-religions)
 * @var $this ReligionController
 * @var $model PsbReligions
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 27 April 2016, 15:50 WIB
 * @link https://github.com/ommu/ommu-psb
 *
 */

	$this->breadcrumbs=array(
		'Psb Religions'=>array('manage'),
		$model->religion_id=>array('view','id'=>$model->religion_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>