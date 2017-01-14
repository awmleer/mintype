<?php $this->need('header.php'); ?>

    <div class="container" id="content">
        <div class="row">
            <div class="span6 offset3">
                <div class="row apost">
                    <h2 class="entry_title">404 - <?php _e('页面没找到'); ?></h2>

<!-- 搜索框 -->

<center><p><form method="post" action="">
    <div><input type="text" name="s" class="text" size="14" /> <input type="submit" class="submit" value="搜索一下?" /></div>
</form></p></center>
                </div>

                <div class="row">
                    <?php $this->need('sidebar.php'); ?>
                </div>
            </div>
        </div>

    </div><!-- end #content-->
    
	<?php $this->need('footer.php'); ?>
