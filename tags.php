<?php
/**
* tags
*
* @package custom
*/
?>

<?php $this->need('header.php'); ?>

    <div class="container" id="content">
	<div class="row">
	<div class="span6 offset3">


		<div class="row apost">

			<p><div class="muted" title="阅读数对单个独立 IP 的多次访问仅会统计一次，统计功能由插件 TePostViews 提供，实际访问数据可能与插件统计数据有一定的差异。">
				<?php $this->date('F j, Y'); ?> · <?php _e('阅读'); ?> <?php $this->viewsNum(); ?> </div>
			</p>

			<h2 class="entry_title"><?php $this->title() ?></h2>

<div id='tag_cloud' style='font-style:normal;'>

<?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0')->to($tags); ?>
<?php if($tags->have()): ?>
<?php while ($tags->next()): ?>
    <tags><a href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a></tags>
<?php endwhile; ?>
<?php else: ?>
    <li><?php _e('没有任何标签'); ?></li>
<?php endif; ?>

</div>

<!-- 文章下方的分类、发布时间、标签信息 -->

			<div class="muted">
			<p class="text-right"></p>
		</div>



		<div class="row">
			<?php $this->need('comments.php'); ?>
		</div>

	</div>
	</div>
    </div><!-- end #content--></div>
	<?php // $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>