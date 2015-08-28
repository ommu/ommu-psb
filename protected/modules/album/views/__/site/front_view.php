<?php
	/* @var $this SiteController */
	/* @var $model Albums */

	$this->breadcrumbs=array(
		'Albums'=>array('manage'),
		$model->title,
	);
?>

<?php if($photo != null) {?>
<div id="gallery">
	<a class="close" href="javascript:void(0);" title="<?php echo Phrase::trans(350, 0);?>"><?php echo Phrase::trans(350, 0);?></a>
	<a class="prev" href="javascript:void(0);" title="<?php echo Phrase::trans(1181, 2);?>"><?php echo Phrase::trans(1181, 2);?></a>
	<a class="next" href="javascript:void(0);" title="<?php echo Phrase::trans(1180, 2);?>"><?php echo Phrase::trans(1180, 2);?></a>
	<div class="carousel">
		<ul class="clearfix">
		<?php foreach($photo as $key => $val) {
			$images = Yii::app()->request->baseUrl.'/public/album/'.$val->album_id.'/'.$val->media;
			echo '<li><img src="'.Utility::getTimThumb($images, 600, 400, 1).'"></li>';
		}?>
		</ul>
	</div>
</div>
<?php } else {?>
<div class="dialog-content clearfix">
	<a class="close" href="javascript:void(0);" title="<?php echo Phrase::trans(350, 0);?>"><?php echo Phrase::trans(350, 0);?></a>
	<div class="empty"><?php echo Phrase::trans(1182, 2);?></div>
</div>
<?php }?>
