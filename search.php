    <?php get_header(); ?>
        <div class="wrap">
            <div class="article-list">
            <div class="search-result">搜索结果: <?php the_search_query(); ?></div>
            <div class="list-wrap">
                <?php
                if (have_posts()):
                    while (have_posts()) : the_post(); ?>
                        <div>
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>的永久链接"><?php the_title(); ?></a>
                            </h2>
                            <div class="entry-meta">
                                <span class="time">
                                    <i class="iconfont">&#xe63a;</i><time class="entry-date published updated"
                                                                          datetime="<?php the_time('Y-m-d' ); ?>"><?php the_time('Y-m-d' ); ?></time>
                                </span>
                            </div>
                            <div class="entry-content">
                                <?php the_excerpt();?>
                                <p class="read_more"><a
                                            href="<?php the_permalink(); ?>"
                                            title="<?php the_title(); ?>"
                                            target="_blank"><strong>阅读全文…</strong></a></p>
                            </div>
                            <div class="post-meta-data">
                                <p>
                                <?php
                                    foreach(get_the_tags($post->ID) as $tag) {
                                        echo '<a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '</a>';
                                }?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                        <div class="nav-links"><?php par_pagenavi(6); ?></div>
                <?php else: ?>
                    <p class="sorry">抱歉, 没有找到你想要的文章. 还有这些可能你也想看看：</p>
                    <div class="search-no-results">
                        <ul>
                            <?php
                            $result = $wpdb->get_results("SELECT ID,post_title FROM $wpdb->posts where post_status='publish' and post_type='post' ORDER BY ID DESC LIMIT 0 , 20");
                            foreach ($result as $post) {
                                setup_postdata($post);
                                $postid = $post->ID;
                                $title = $post->post_title;
                                ?>
                                <li><a rel="bookmark" href="<?php echo get_permalink($postid); ?>"
                                       title="<?php echo $title ?>"><?php echo $title ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
            <div class="side-container">
                <?php get_template_part( 'template-parts/content', 'search-form' ); ?>
                <?php get_template_part( 'template-parts/content', 'most-view-posts' ); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>