<?php get_header(); ?>
        <div class="wrap">
        <div class="article-list">
            <div class="list-wrap">
                <div class="error-msg">换个地方找找？</div>
                <div class="search-no-results">
                    <ul>
                        <?php
                        $result = $wpdb->get_results("SELECT ID,post_title FROM $wpdb->posts where post_status='publish' and post_type='post' ORDER BY ID DESC LIMIT 0 , 20");
                        foreach ($result as $post) {
                            setup_postdata($post);
                            $postid = $post->ID;
                            $title = $post->post_title;
                            ?>
                            <li><a href="<?php echo get_permalink($postid); ?>"
                                   title="<?php echo $title ?>"><?php echo $title ?></a></li>
                        <?php } ?>
                    </ul>
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
<?php
get_footer();