    <?php get_header(); ?>
        <div class="wrap">
            <div class="article-list">
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
                        <?php
                        endwhile;
                    else:
                        echo "<p>没有文章</p>";
                    endif;
                    ?>
                    <div class="nav-links">
                        <?php par_pagenavi(6); ?>
                    </div>
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