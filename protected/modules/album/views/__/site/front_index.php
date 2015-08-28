<?php
	/* @var $this SiteController */
	/* @var $dataProvider CActiveDataProvider */
	$this->breadcrumbs=array(
		'Albums',
	);

	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile(Yii::app()->request->baseUrl.'/externals/album/plugin/jcarousellite_1.0.1.min.js', CClientScript::POS_END);
$js = <<<EOP
	$(".dialog #gallery .carousel").jCarouselLite({
		visible: 1,
		scroll: 1,
		start: 0,
		//auto: 2500,
		speed: 900,
		btnNext: ".dialog #gallery .next",
		btnPrev: ".dialog #gallery .prev"
	});
EOP;
	$cs->registerScript('photo', $js, CClientScript::POS_END);
?>

<div class="boxed clearfix">
	<?php $this->widget('application.components.system.FListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'pager' => array(
			'header' => '',
			'firstPageLabel' => '<<',
			'prevPageLabel'  => '<',
			'nextPageLabel'  => '>',
			'lastPageLabel'  => '>>',
		),
		'summaryText' => '',
		'itemsCssClass' => 'items clearfix',
		'pagerCssClass'=>'pager clearfix',
	)); ?>
</div>
<div class="nextpage">
	<a href="<?php echo Yii::app()->createUrl('video');?>" title="<?php echo Phrase::trans(1027, 2);?>"><?php echo Phrase::trans(1027, 2);?></a>
</div>