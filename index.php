<?php
/**
 * 这是 Typecho 系统的一套单栏极简主题
 * 
 * @package SimpleOne
 * @author TedL.in
 * @version 1.2.1
 * @link http://tedl.in
 */

$this->need('header.php');
?>
<div class="container">
    <div class="row">
       <div class="span6 offset3">
         
         <?php while($this->next()): ?>
          <div class="row apost">
              
              <p></p>


              
              <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
              <div class="muted"><?php $this->date('F j, Y'); ?> · <?php $this->category(','); ?></div>
              <?php $this->content('Continue...'); ?>
          </div>
      <?php endwhile; ?>
      
      
      <div class="row">
          <div class="pagination pagination-right">
              <?php $this->pageNav(); ?>
              <script>
                 $('.page-navigator').contents().unwrap().wrapAll("<ul></ul>");
                 $('li.current').addClass('active');
             </script>
         </div>

     </div>
     
     

     <div class="row">
      <p><?php $this->need('sidebar.php'); ?></p>
  </div>

</div>
</div>
</div><!-- end container -->


<?php $this->need('footer.php'); ?>
