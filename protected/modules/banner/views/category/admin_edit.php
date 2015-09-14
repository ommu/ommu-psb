<?php
/**
 * Banner Categories (banner-category)
 * @var $this CategoryController * @var $model BannerCategory *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Banner Categories'=>array('manage'),
		$model->name=>array('view','id'=>$model->cat_id),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>