<?php $this->need('header.php'); ?>

<div class="container" id="content">
	<div class="row">
       <div class="span6 offset3">

      <div class="row apost">

         <p><div class="muted" title="阅读数对单个独立 IP 的多次访问仅会统计一次，统计功能由插件 TePostViews 提供，实际访问数据可能与插件统计数据有一定的差异。">
            <?php $this->date('F j, Y'); ?> · <?php _e('阅读'); ?> <?php $this->viewsNum(); ?> </div>
        </p>

        <h2 class="entry_title"><?php $this->title() ?></h2>



        <p class="entry_data">
            <span><?php //_e('作者：'); ?><?php //$this->author(); ?></span>


        </p>
        <?php $this->content(); ?>

        <!-- 文章下方的分类、发布时间、标签信息 -->

        <div class="muted">
         <p class="text-right">
         CATEGORY: <?php $this->category(','); ?> · TAGS: <?php $this->tags(' · ', true, 'none'); ?><br><br><br></p>
        </div>



        <div class="row">
         <?php $this->need('comments.php'); ?>
     </div>

     <!-- 打赏 -->
     <div style="padding: 10px 0; margin: 20px auto; width: 100%; font-size:16px; text-align: center;">

        <button id="rewardButton" disable="enable" onclick="var qr = document.getElementById('QR'); if (qr.style.display === 'none') {qr.style.display='block';} else {qr.style.display='none'}">
          <span>打赏</span>
      </button>
      <div id="QR" style="display: none;">

        <div id="wechat" style="display: inline-block">
          <a class="fancybox" rel="group"><img id="wechat_qr" src="/weixin.png" alt="WeChat Pay"></a>
          <div class="muted">微信打赏</div>
      </div>
      <div id="alipay" style="display: inline-block">
          <a class="fancybox" rel="group"><img id="alipay_qr" src="/zhifubao.png" alt="Alipay"></a>
          <div class="muted">支付宝打赏</div>
      </div>
  </div>
</div>
<!-- 打赏 -->

</div>
</div>
</div><!-- end #content--></div>
<?php // $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>


