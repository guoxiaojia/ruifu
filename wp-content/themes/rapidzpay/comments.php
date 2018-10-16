 <!-- Comment Form -->
<form class="form" id="commentform" name="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

         <?php query_posts("showposts=1&category_name=contact-form");?>
                                             <?php while(have_posts()):the_post();?>
                                                 <?php echo $post->post_content;?>
                                             <?php endwhile;?>
                                             <?php wp_reset_query();?>

<!-- Add Comment Button -->
<?php comment_id_fields(); ?>

</form>