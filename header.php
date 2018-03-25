<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <?php
    if (noxxxx_option('noxxxx_meta') == true) {
        $keywords = '';
        $description = '';
        if (is_singular()) {
            $keywords = '';
            $tags = get_the_tags();
            $categories = get_the_category();
            if ($tags) {
                foreach ($tags as $tag) {
                    $keywords .= $tag->name . ',';
                };
            };
            if ($categories) {
                foreach ($categories as $category) {
                    $keywords .= $category->name . ',';
                };
            };
            $description = mb_strimwidth(str_replace("\r\n", '', strip_tags($post->post_content)), 0, 240, '…');
        } else {
            $keywords = noxxxx_option('noxxxx_meta_keywords');
            $description = noxxxx_option('noxxxx_meta_description');
        };
        ?>
        <meta name="keywords" content="<?php echo $keywords; ?>">
        <meta name="description" content="<?php echo $description; ?>">
    <?php } ?>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.ico">
    <!--[if IE ]>
        <script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <title itemprop="name"><?php global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) echo " | $site_description";
        if ($paged >= 2 || $page >= 2) echo ' | ' . sprintf(__('第 %s 页'), max($paged, $page)); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
<section class="container">
    <div>
        <nav class="navigation">
            <div>
                <a href="<?php bloginfo('url'); ?>" class="logo">
                    <img src="<?php echo noxxxx_option('noxxxx_logo'); ?>" alt="home-page">
                </a>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container' => '',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 0,
                        )
                    ); ?>
            </div>
        </nav>


