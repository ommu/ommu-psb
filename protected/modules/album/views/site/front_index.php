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

<?php foreach($model as $key => $row) {
	//echo $key;
	//echo $row;
	if($key == 'video') {
		Yii::import('application.modules.video.models.Videos');
		Yii::import('application.modules.video.models.VideoCategory');
		
		$criteriaVideo=new CDbCriteria;
		$criteriaVideo->condition = 'publish = :publish';
		$criteriaVideo->params = array(':publish'=>1);
		$criteriaVideo->order = 'creation_date DESC';
		$criteriaVideo->limit = 3;
		
		$video = Videos::model()->findAll($criteriaVideo);
		if($video != null) {?>
			<div class="box">
				<div class="title clearfix">
					<h2><?php echo $row;?></h2>
					<a href="<?php echo Yii::app()->createUrl('video/site/index');?>" title="View <?php echo $row;?> ALbum">More</a>
				</div>
				
				<div class="sep full">
					<iframe class="youtube" width="600" height="350" src="https://www.youtube.com/embed/<?php echo $video[0]->media;?>?disablekb=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
					<a class="title" href="<?php echo Yii::app()->createUrl('video/site/view', array('id'=>$video[0]->video_id,'t'=>Utility::getUrlTitle($video[0]->title)));?>" title="<?php echo $video[0]->title;?>"><?php echo Utility::hardDecode($video[0]->title);?></a>
					<div class="meta-date clearfix">
						<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($video[0]->creation_date, true);?></span>
						<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $video[0]->view;?></span>
					</div>
					<p><?php echo $video[0]->body != '' ? Utility::shortText(Utility::hardDecode($video[0]->body),250) : '-';?></p>
				</div>
				
				<div class="list-view clearfix">
					<?php 
					$j=0;
					foreach($video as $key => $row) {
					$j++;
						if($j >= 2) {?>
						<div class="sep">
							<iframe class="youtube" width="300" height="150" src="https://www.youtube.com/embed/<?php echo $row->media;?>?disablekb=1&rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
							<a class="title" href="<?php echo Yii::app()->createUrl('video/site/view', array('id'=>$row->video_id,'t'=>Utility::getUrlTitle($row->title)));?>" title="<?php echo $row->title;?>"><?php echo Utility::shortText(Utility::hardDecode($row->title),40);?></a>
							<div class="meta-date clearfix">
								<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($row->creation_date, true);?></span>
								<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $row->view;?></span>
							</div>
							<p><?php echo $row->body != '' ? Utility::shortText(Utility::hardDecode($row->body),100) : '-';?></p>
						</div>
						<?php }
					}?>
				</div>
			</div>
	<?php }
	
	} else if($key == 'photo') {
		$criteria=new CDbCriteria;
		$criteria->condition = 'publish = :publish';
		$criteria->params = array(':publish'=>1);
		$criteria->order = 'creation_date DESC';
		$criteria->limit = 2;
		
		$photo = Albums::model()->findAll($criteria);
		if($photo != null) {?>
			<div class="box list">
				<div class="title clearfix">
					<h2><?php echo $row;?></h2>
					<a href="<?php echo Yii::app()->createUrl('album/site/index', array('type'=>'photo'));?>" title="View <?php echo $row;?> ALbum">More</a>
				</div>
				
				<div class="list-view clearfix">
					<?php foreach($photo as $key => $row) {
						if($row->media_id != 0)
							$images = Yii::app()->request->baseUrl.'/public/album/'.$row->album_id.'/'.$row->cover->media;
						else
							$images = Yii::app()->request->baseUrl.'/public/album/album_default.png';?>
						<div class="sep">
							<a class="images" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$row->album_id,'t'=>Utility::getUrlTitle($row->title)));?>" title="<?php echo $row->title;?>">
								<img src="<?php echo Utility::getTimThumb($images, 300, 150, 1);?>" alt="<?php echo $row->title;?>" />
							</a>
							<a class="title" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$row->album_id,'t'=>Utility::getUrlTitle($row->title)));?>" title="<?php echo $row->title;?>"><?php echo Utility::shortText(Utility::hardDecode($row->title),40);?></a>
							<div class="meta-date photo clearfix">
								<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($row->creation_date, true);?></span>
								<span class="view"><i class="fa fa-photo"></i>&nbsp;<?php echo $row->photos;?></span>
								<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $row->view;?></span>
							</div>
						</div>
					<?php }?>
				</div>
			</div>		
		<?php }
		
	} else if($key == 'newspaper') {
		Yii::import('application.modules.article.models.Articles');
		Yii::import('application.modules.article.models.ArticleCategory');
		Yii::import('application.modules.article.models.ArticleMedia');
		
		$criteriaNewspaper=new CDbCriteria;
		$criteriaNewspaper->condition = 'publish = :publish AND published_date <= curdate()';
		$criteriaNewspaper->params = array(
			':publish'=>1,
		);
		$criteriaNewspaper->order = 'published_date DESC';
		$criteriaNewspaper->addInCondition('cat_id',array(23,24,25));
		$criteriaNewspaper->limit = 2;
		
		$newspaper = Articles::model()->findAll($criteriaNewspaper);
		if($newspaper != null) {?>
			<div class="box list">
				<div class="title clearfix">
					<h2><?php echo $row;?></h2>
					<a href="<?php echo Yii::app()->createUrl('article/newspaper/site/index');?>" title="View <?php echo $row;?>">More</a>
				</div>
				
				<div class="list-view clearfix">
					<?php foreach($newspaper as $key => $row) {
						if($row->media_id != 0)
							$images = Yii::app()->request->baseUrl.'/public/article/'.$row->article_id.'/'.$row->cover->media;
						else
							$images = Yii::app()->request->baseUrl.'/public/article/article_default.png';?>
						<div class="sep">
							<a class="images" href="<?php echo Yii::app()->createUrl('article/newspaper/site/view', array('id'=>$row->article_id,'t'=>Utility::getUrlTitle($row->title)));?>" title="<?php echo $row->title;?>">
								<img src="<?php echo Utility::getTimThumb($images, 300, 150, 1);?>" alt="<?php echo $row->title;?>" />
							</a>
							<a class="title" href="<?php echo Yii::app()->createUrl('article/newspaper/site/view', array('id'=>$row->article_id,'t'=>Utility::getUrlTitle($row->title)));?>" title="<?php echo $row->title;?>"><?php echo Utility::shortText(Utility::hardDecode($row->title),40);?></a>
							<div class="meta-date photo clearfix">
								<span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo Utility::dateFormat($row->creation_date, true);?></span>
								<span class="view"><i class="fa fa-eye"></i>&nbsp;<?php echo $row->view;?></span>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		<?php }
	}
}?>