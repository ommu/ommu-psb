<?php
/**
 * @var $this ArticlesController
 * @var $data Articles
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contact (+62)856-299-4114
 *
 */

	if($data->media_id != 0)
		$images = Yii::app()->request->baseUrl.'/public/article/'.$data->article_id.'/'.$data->cover->media;
	else
		$images = Yii::app()->request->baseUrl.'/public/article/article_default.png';
?>

<?php if($index == 0) {?>
	<div class="sep full">
		<a class="images" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->article_id,'t'=>Utility::getUrlTitle($data->title)));?>" title="<?php echo $data->title;?>">
			<img src="<?php echo Utility::getTimThumb($images, 600, 250, 1);?>" alt="<?php echo $data->title;?>" />
		</a>
		<a class="title" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->article_id,'t'=>Utility::getUrlTitle($data->title)));?>" title="<?php echo $data->title;?>"><?php echo Utility::hardDecode($data->title);?></a>
		<div class="meta-date clearfix">
			<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($data->published_date, true);?></span>
			<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $data->view;?></span>
		</div>
		<p><?php echo Utility::shortText(Utility::hardDecode($data->body),250);?></p>
	</div>
	<div class="clear"></div>
	
<?php } else {?>
	<div class="sep">
		<a class="images" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->article_id,'t'=>Utility::getUrlTitle($data->title)));?>" title="<?php echo $data->title;?>">
			<img src="<?php echo Utility::getTimThumb($images, 300, 150, 1);?>" alt="<?php echo $data->title;?>" />
		</a>
		<a class="title" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->article_id,'t'=>Utility::getUrlTitle($data->title)));?>" title="<?php echo $data->title;?>"><?php echo Utility::shortText(Utility::hardDecode($data->title),40);?></a>
		<div class="meta-date clearfix">
			<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($data->published_date, true);?></span>
			<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $data->view;?></span>
		</div>
		<p><?php echo Utility::shortText(Utility::hardDecode($data->body),100);?></p>
	</div>
<?php }?>