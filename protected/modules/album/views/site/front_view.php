<?php
/**
 * Albums (albums)
 * @var $this SiteController * @var $model Albums *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Albums'=>array('manage'),
		$model->title,
	);
?>

<div class="meta-date clearfix">
	<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($model->creation_date, true);?></span>
	<span class="by"><i class="fa fa-user"></i>&nbsp;<?php echo $model->user->displayname;?></span>
	<span class="photo"><i class="fa fa-photo"></i>&nbsp;<?php echo $model->photos;?> photo</span>
	<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $model->view;?></span>
</div>

<?php if($model->media_id != 0 && !isset($_GET['photo'])) {
	$images = Yii::app()->request->baseUrl.'/public/album/'.$model->album_id.'/'.$model->cover->media;
} else {
	$mediaPhoto = AlbumPhoto::model()->findByPk($_GET['photo']);
	$images = Yii::app()->request->baseUrl.'/public/album/'.$mediaPhoto->album_id.'/'.$mediaPhoto->media;
}?>
<img class="headline" src="<?php echo Utility::getTimThumb($images, 600, 1024, 3);?>" alt="<?php echo $model->title;?>" />

<div class="box-photo clearfix">
	<?php foreach($photo as $key => $data) {
		$images = Yii::app()->request->baseUrl.'/public/album/'.$data->album_id.'/'.$data->media; ?>
		<div class="photo-sep <?php echo ((!isset($_GET['photo']) && $data->cover == 1) || isset($_GET['photo']) && $data->media_id == $_GET['photo']) ? 'active' : '';?>"><a href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->album_id,'t'=>Utility::getUrlTitle($data->album->title),'photo'=>$data->media_id));?>" title="<?php echo $data->desc;?>"><img src="<?php echo Utility::getTimThumb($images, 220, 140, 1);?>" alt="<?php echo $data->desc;?>"></a></div>
	<?php }?>
</div>

<?php if($model->body != '' && $model->title != Utility::hardDecode($model->body)) {?>
<div class="box-content photo-module clearfix">
	<?php echo $model->body;?>
</div>
<?php }?>