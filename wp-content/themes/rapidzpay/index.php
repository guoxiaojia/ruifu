<?php get_header();?>
<link rel="stylesheet" href="<?php bloginfo("template_url")?>/lib/swiper/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url")?>/lib/hover/set2.css">
<link rel="stylesheet" href="<?php bloginfo("stylesheet_url")?>">
<?php query_posts("showposts=1&category_name=head");?>
                                    <?php while(have_posts()):the_post();?>
                                        <?php echo $post->post_content;?>
                                    <?php endwhile;?>
                                    <?php wp_reset_query();?>
<div class="wrap-content">
    <?php query_posts("showposts=1&category_name=conten1");?>
                                        <?php while(have_posts()):the_post();?>
                                            <?php echo $post->post_content;?>
                                        <?php endwhile;?>
                                        <?php wp_reset_query();?>
    <?php query_posts("showposts=1&category_name=content2");?>
                                        <?php while(have_posts()):the_post();?>
                                            <?php echo $post->post_content;?>
                                        <?php endwhile;?>
                                        <?php wp_reset_query();?>
    <?php query_posts("showposts=1&category_name=content3");?>
                                        <?php while(have_posts()):the_post();?>
                                            <?php echo $post->post_content;?>
                                        <?php endwhile;?>
                                        <?php wp_reset_query();?>
    <?php query_posts("showposts=1&category_name=content4");?>
                                        <?php while(have_posts()):the_post();?>
                                            <?php echo $post->post_content;?>
                                        <?php endwhile;?>
                                        <?php wp_reset_query();?>
    <?php query_posts("showposts=1&category_name=content5");?>
                                        <?php while(have_posts()):the_post();?>
                                            <?php echo $post->post_content;?>
                                        <?php endwhile;?>
                                        <?php wp_reset_query();?>
</div>
<script src="<?php bloginfo("template_url")?>/lib/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo("template_url")?>/lib/swiper/swiper.min.js"></script>
<script src="<?php bloginfo("template_url")?>/js/index.js"></script>
<?php get_footer();?>