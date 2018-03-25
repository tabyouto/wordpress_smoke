<?php get_header(); ?>
        <div class="wrap">
            <div class="post-wrap">
                <div id="primary" class="content-area">
                    <?php if( have_posts() ): while ( have_posts() ): the_post(); ?>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>
                        <div class="entry-content markdown-body">
                            <?php the_content(); ?>
                        </div>
                    <?php get_template_part( 'template-parts/content', 'author') ?>
                        <footer class="post-footer">
                            <div class="tag-wrap">
                                <?php if ( get_the_tags() ) {
                                            the_tags('', ' ', ' ');
                                       }?>
                            </div>
                        </footer>
                    <?php endwhile; endif; ?>
                    <?php get_template_part( 'template-parts/content', 'relate' ); ?>
                    <div class="comment-wrap">
                        <?php comments_template(); ?>
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
