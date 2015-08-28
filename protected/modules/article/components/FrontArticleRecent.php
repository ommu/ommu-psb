<?php

class FrontArticleRecent extends CWidget
{

	public function init() {
	}

	public function run() {
		$this->renderContent();
	}

	protected function renderContent() {
		$controller = strtolower(Yii::app()->controller->id);
		
		//import model
		Yii::import('application.modules.article.models.Articles');
		Yii::import('application.modules.article.models.ArticleCategory');
		
		$criteria=new CDbCriteria;
		$criteria->condition = 'publish = :publish AND published_date <= curdate()';
		$criteria->params = array(
			':publish'=>1,
		);
		$criteria->order = 'published_date DESC';
		//$criteria->addInCondition('cat_id',array(18));
		//$criteria->compare('cat_id',18);
		$criteria->limit = 3;
			
		$model = Articles::model()->findAll($criteria);

		$this->render('front_article_recent',array(
			'model' => $model,
		));	
	}
}
