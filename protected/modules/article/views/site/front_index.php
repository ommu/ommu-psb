<?php
/**
 * @var $this SiteController
 * @var $dataProvider CActiveDataProvider
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		Phrase::trans(26000,1),
	);
?>

<?php 
$i = 0;
foreach($category as $key => $val) {
	$i++;
	$criteria=new CDbCriteria;
	$criteria->condition = 'publish = :publish AND published_date <= curdate()';
	$criteria->params = array(
		':publish'=>1,
	);
	$criteria->order = 'article_id DESC';
	$criteria->compare('cat_id',$val->cat_id);
	$criteria->limit = $i == 1 ? 3 : 1;

	$article = Articles::model()->findAll($criteria);
	
	$this->renderPartial('_index',array(
		'article'=>$article,
		'val'=>$val,
		'i'=>$i,
	));
} ?>