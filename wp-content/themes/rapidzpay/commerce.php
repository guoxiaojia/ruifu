<?php
/*
Template Name:commerce
*/
?>
<?php get_header();?>
<link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/common.css">
<div id="commerce">
    <div class="wrap-head">
       <?php query_posts("showposts=1&category_name=commerce-head");?>
                      <?php while(have_posts()):the_post();?>
                          <?php echo $post->post_content;?>
                      <?php endwhile;?>
                      <?php wp_reset_query();?>
    </div>
   <?php query_posts("showposts=1&category_name=commerce-content");?>
               <?php while(have_posts()):the_post();?>
                   <?php echo $post->post_content;?>
               <?php endwhile;?>
               <?php wp_reset_query();?>
</div>
<script src="<?php bloginfo("template_url")?>/lib/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo("template_url")?>/js/common.js"></script>
<?php get_footer();?>