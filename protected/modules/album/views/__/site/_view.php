<?php
	/* @var $this SiteController */
	/* @var $data Albums */
	if($data->media != '') {
		$images = Yii::app()->request->baseUrl.'/public/album/'.$data->album_id.'/'.$data->media;
	} else {
		$images = Yii::app()->request->baseUrl.'/public/album/album_default.png';
	}
?>

<?php if($index == 0) {?>
	<div class="intro">
		<a class="link-dialog" rel="600" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->album_id, 't'=>$data->title));?>" title="<?php echo $data->title?>"><img src="<?php echo Utility::getTimThumb($images, 530, 350, 1);?>" alt="<?php echo $data->title?>"><span><?php echo $data->title?><em><?php echo $data->body?></em></span></a>
	</div>
	<div class="clear"></div>
<?php } else {?>
	<div class="sep">
		<a class="link-dialog" rel="600" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->album_id, 't'=>$data->title));?>" title="<?php echo $data->title?>"><img src="<?php echo Utility::getTimThumb($images, 170, 130, 1);?>" alt="<?php echo $data->title?>"><span><?php echo $data->title?></span></a>
	</div>
<?php }?>
