<?php
/**
 * Albums (albums)
 * @var $this SiteController * @var $model Albums * @var $dataProvider CActiveDataProvider
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Albums',
		Phrase::trans(26000,1),
	);
?>

<div class="box list">
	<?php $this->widget('application.components.system.FListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'pager' => array(
			'header' => '',
		), 
		'summaryText' => '',
		'itemsCssClass' => 'items clearfix',
		'pagerCssClass'=>'pager clearfix',
	)); ?>
</div>