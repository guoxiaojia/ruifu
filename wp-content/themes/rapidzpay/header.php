<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(is_front_page()){
                       query_posts("showposts=1&category_name=website-title");
                       while(have_posts()):the_post();
                           the_title();
                       endwhile;
                       wp_reset_query();
                   }elseif(is_category()){
                       single_cat_title();echo "-";bloginfo("name");
                   }elseif(is_404()){
                       echo "页面未找到";
                   }else{
                       wp_title('',true);
                   }?></title>
    <link rel="shortcut icon" href=" <?php bloginfo("template_url")?>/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/base.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/lib/font/iconfont.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/lib/bootstrap/css/bootstrap.css">
</head>
<body class="conta">
<div class="fixed0">
    <!--pc头部-->
    <div class="top">
        <div class="side">
            <?php query_posts("showposts=1&category_name=logo");?>
                                <?php while(have_posts()):the_post();?>
                                    <?php echo $post->post_content;?>
                                <?php endwhile;?>
                                <?php wp_reset_query();?>
             <?php query_posts("showposts=1&category_name=nav");?>
                                            <?php while(have_posts()):the_post();?>
                                                <?php echo $post->post_content;?>
                                            <?php endwhile;?>
                                            <?php wp_reset_query();?>
        </div>
        <?php query_posts("showposts=1&category_name=language");?>
                                    <?php while(have_posts()):the_post();?>
                                        <?php echo $post->post_content;?>
                                    <?php endwhile;?>
                                    <?php wp_reset_query();?>
    </div>
    <!--移动端头部-->
    <?php query_posts("showposts=1&category_name=mobile-top");?>
                                       <?php while(have_posts()):the_post();?>
                                           <?php echo $post->post_content;?>
                                       <?php endwhile;?>
                                       <?php wp_reset_query();?>
    <!--移动端头部结束-->
</div>