<?php $this->need('header.php'); ?>

    <div class="container" id="content">
        <div class="row">
        	<div class="span6 offset3">
        		<div class="row apost">
				<h2 class="entry_title"><?php $this->title() ?></h2>
				<p class="entry_data">
					<span><?php //_e('作者：'); ?><?php //$this->author(); ?></span>
					<?php //_e('发布时间：'); ?><?php //$this->date('F j, Y'); ?>
				</p>
				<?php $this->content(); ?>

<!-- 文章下方的分类、发布时间、标签信息 -->

			<div class="muted">
			<p class="text-right">
				DATE: <?php $this->date('F j, Y'); ?>　·　VIEWS:<?php $this->viewsNum(); ?><br>◄ 扫描二维码手机浏览或在微信内分享</p>
		</div><br>

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
				
				<div class="row">
					<?php $this->need('comments.php'); ?>
				</div>

		</div>


    </div><!-- end #content--></div>
<?php //$this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>