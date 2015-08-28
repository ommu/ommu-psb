<?php
	/* @var $this SiteController */
	/* @var $dataProvider CActiveDataProvider */

	$this->breadcrumbs=array(
		'Videoses',
	);
	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile(Yii::app()->request->baseUrl.'/externals/video/plugin/jquery.scrollTo.1.4.3.1-min.js', CClientScript::POS_END);
$js=<<<EOP
	$('#video .list-view .sep').live('click', function() {
		$.scrollTo('div#video', {duration: 800, axis:"y"});
		var url = $(this).find('a').attr('href');
		$(this).parents('.items').find('.intro iframe').attr('src', url);
		return false;
	});
EOP;
	$cs->registerScript('playvideo', $js, CClientScript::POS_END);
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
	<a href="<?php echo Yii::app()->createUrl('site/label');?>" title="<?php echo Phrase::trans(1039, 2);?>"><?php echo Phrase::trans(1039, 2);?></a>
</div>
