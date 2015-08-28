<?php
	/* @var $this SiteController */
	/* @var $data Videos */
?>

<?php if($index == 0) {?>
	<div class="intro">
		<iframe src="http://www.youtube.com/embed/<?php echo $data->media; ?>" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="clear"></div>
<?php }?>

<div class="sep">
	<iframe src="http://www.youtube.com/embed/<?php echo $data->media; ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>
	<a href="http://www.youtube.com/embed/<?php echo $data->media; ?>" title="<?php echo $data->title;?>"><?php echo $data->title;?></a>
</div>
