<?php
/**
 * @var $this LanguageController
 * @var $model OmmuLanguages
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array();
	//$this->widget('AdminDashboardStatistic');
	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/custom/custom_wall.js', CClientScript::POS_END);
?>

<div class="table">
	<div class="wall">
		<?php //begin.PostStatus ?>
		<?php echo $this->renderPartial('/wall/_form_dashboard', array(
			'model'=>$model,
		)); ?>
		
		<?php //begin.Status List-View ?>
		<div class="list-view">
			<div class="items wall">
				<?php echo $data;?>
			</div>
			<div class="paging clearfix">
				<span><?php echo $summaryPager;?></span>
				<?php if($pager[nextPage] != '0') {?>
					<a class="wall" href="<?php echo $nextPager;?>" title="Readmore">Readmore</a>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="recent">
		<?php //begin.Oauth?>
		<div class="oauth">
			<h3>Oauth</h3>
			<div class="box">
				<ul>
					<?php
						$user = UserOption::model()->findByPk(Yii::app()->user->id);
						$server = ($_SERVER["SERVER_ADDR"]=='127.0.0.1' || $_SERVER["HTTP_HOST"]=='localhost') ? false : true;
						$budaya = $server == true ? 'http://budaya.bpadjogja.info' : 'http://localhost/_client_bpadjogja_backup/bpadjogja_budaya';
						$coe = $server == true ? 'http://coe.bpadjogja.info' : 'http://localhost/_client_bpadjogja_backup/bpadjogja_coe';
						$gis = $server == true ? 'http://gis.bpadjogja.info' : 'http://localhost/_client_bpadjogja_backup/bpadjogja_gis';
						$rbm = $server == true ? 'http://rbm.bpadjogja.info' : 'http://localhost/_client_bpadjogja_backup/bpadjogja_rbm';
						$siks = $server == true ? 'http://siks.bpadjogja.info' : 'http://localhost/_client_bpadjogja_backup/bpadjogja_siks';
					?>
					<?php /*
					<li><a target="_blank" href="<?php echo $budaya;?>/jmc_admin/main/autologin/token/<?php echo $user->secret_key?>/access/budaya.bpadjogja.info" title="Login to: budaya.bpadjogja.info">budaya.bpadjogja.info</a></li>
					*/?>
					<li><a target="_blank" href="<?php echo $coe;?>/jmcadmin_login/autologin/token/<?php echo $user->secret_key?>/access/coe.bpadjogja.info" title="Login to: coe.bpadjogja.info">coe.bpadjogja.info</a></li>
					<li><a target="_blank" href="<?php echo $gis;?>/login/autologin/token/<?php echo $user->secret_key?>/access/gis.bpadjogja.info" title="Login to: gis.bpadjogja.info">gis.bpadjogja.info</a></li>
					<li><a target="_blank" href="<?php echo $rbm;?>/jmc_login/autologin/token/<?php echo $user->secret_key?>/access/rbm.bpadjogja.info" title="Login to: rbm.bpadjogja.info">rbm.bpadjogja.info</a></li>
					<li><a target="_blank" href="<?php echo $siks;?>/jmcadmin_login/autologin/token/<?php echo $user->secret_key?>/access/siks.bpadjogja.info" title="Login to: siks.bpadjogja.info">siks.bpadjogja.info</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>