<div class="wrap-foot">
    <div class="foot-center">
        <?php query_posts("showposts=1&category_name=logo-footer");?>
                                        <?php while(have_posts()):the_post();?>
                                            <?php echo $post->post_content;?>
                                        <?php endwhile;?>
                                        <?php wp_reset_query();?>
        <div class="list-main">
            <?php query_posts("showposts=1&category_name=links");?>
                                            <?php while(have_posts()):the_post();?>
                                                <?php echo $post->post_content;?>
                                            <?php endwhile;?>
                                            <?php wp_reset_query();?>
        </div>
    </div>
</div>

<!--点击移动端按钮回到首页-->
 <?php query_posts("showposts=1&category_name=back");?>
                                            <?php while(have_posts()):the_post();?>
                                                <?php echo $post->post_content;?>
                                            <?php endwhile;?>
                                            <?php wp_reset_query();?>
</body>
</html>