<?php
/*
Template Name:contact
*/
?>
<?php get_header();?>
<style>.conta .fixed0{ background:#2e3036; }</style>
<link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/common.css">
    <div id="contactus">
         <?php query_posts("showposts=1&category_name=contact-head");?>
                                         <?php while(have_posts()):the_post();?>
                                             <?php echo $post->post_content;?>
                                         <?php endwhile;?>
                                         <?php wp_reset_query();?>
        <div class="contactus-content">
            <?php query_posts("showposts=1&category_name=contact-title");?>
                                                     <?php while(have_posts()):the_post();?>
                                                         <?php echo $post->post_content;?>
                                                     <?php endwhile;?>
                                                     <?php wp_reset_query();?>
            <div class="send-d">
                <div class="send-center">
                    <?php comments_template();?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php bloginfo("template_url")?>/lib/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo("template_url")?>/js/common.js"></script>
<?php get_footer();?>