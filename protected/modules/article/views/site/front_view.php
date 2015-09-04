<?php
/**
 * @var $this SiteController
 * @var $model Articles
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		Phrase::trans(26000,1)=>array('index'),
		Phrase::trans($model->cat->name,2),
	);
	
	$images = Yii::app()->request->baseUrl.'/public/article/'.$model->article_id.'/'.$model->cover->media;
?>

<div class="meta-date clearfix">
	<span class="tag"><i class="fa fa-tag"></i>&nbsp;<?php echo Phrase::trans($model->cat->name,2);?></span>
	<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($model->published_date, true);?></span>
	<span class="by"><i class="fa fa-user"></i>&nbsp;<?php echo $model->user->displayname;?></span>
	<?php if($model->media_file != '') {?><span class="download"><i class="fa fa-fire"></i>&nbsp;<?php echo $model->download;?></span><?php }?>
	<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $model->view;?></span>
</div>

<?php if($model->media_id != 0 && !in_array($model->cat_id, array(23,24,25))) {?>
	<img class="headline" src="<?php echo Utility::getTimThumb($images, 600, 1024, 3);?>" alt="<?php echo $model->title;?>" />
<?php }?>

<?php if($model->media_file != '') {
	$extension = pathinfo($model->media_file, PATHINFO_EXTENSION);
	if($extension == 'pdf')
		$file = 'fa-file-pdf-o';
	else if(in_array($extension, array('doc','docx','opt')))
		$file = 'fa-file-word-o';
	else if(in_array($extension, array('xls','xlsx')))
		$file = 'fa-file-excel-o';
	else if(in_array($extension, array('ppt','pptx')))
		$file = 'fa-file-powerpoint-o';
	else if(in_array($extension, array('jpg','jpeg','gif','png','bmp')))
		$file = 'fa-file-photo-o';
	else if(in_array($extension, array('zip','rar','7z')))
		$file = 'fa-file-zip-o';
	else if(in_array($extension, array('mp3')))
		$file = 'fa-file-audio-o';
	else if(in_array($extension, array('mp4','flv')))
		$file = 'fa-file-movie-o';
	else
		$file = 'fa-file-pdf-o';
?>
	<div class="box-download">
		Download:&nbsp;<i class="fa <?php echo $file;?>"></i> <a href="<?php echo Yii::app()->controller->createUrl('download', array('id'=>$model->article_id,'t'=>Utility::getUrlTitle($model->title)));?>" title="<?php echo $model->title;?>"><?php echo $model->media_file;?></a>
	</div>
<?php }?>

<div class="box-content clearfix">
	<?php if($model->media_id != 0 && in_array($model->cat_id, array(23,24,25))) {?>
		<img class="headline" src="<?php echo $images;?>" alt="<?php echo $model->title;?>" />		
	<?php }?>
	<?php echo $model->body;?>
</div>

<?php if($random != null) {?>	
<div class="box list random">
	<div class="title clearfix">
		<h2><?php echo Phrase::trans($model->cat->name,2);?></h2>
	</div>
	
	<div class="list-view clearfix">
		<?php 
		foreach($random as $key => $row) { ?>
			<div class="sep">
				<a class="title" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$row->article_id,'t'=>Utility::getUrlTitle($row->title)));?>" title="<?php echo $row->title;?>"><?php echo Utility::shortText(Utility::hardDecode($row->title),40);?></a>
				<div class="meta-date photo clearfix">
					<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($row->published_date, true);?></span>
					<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $row->view;?></span>
				</div>
				<p><?php echo Utility::shortText(Utility::hardDecode($row->body),100);?></p>
			</div>
		<?php }?>
	</div>
</div>	
<?php }?>