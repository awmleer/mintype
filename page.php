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
        DATE: <?php $this->date('F j, Y'); ?>　·　VIEWS:<?php $this->viewsNum(); ?></p>
      </div><br>
      
    </div>
    
    <div class="row">
     <?php $this->need('comments.php'); ?>
   </div>

 </div>


</div><!-- end #content--></div>
<?php //$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>