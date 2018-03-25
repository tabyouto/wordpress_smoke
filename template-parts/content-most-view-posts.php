<?php
/**
 * Template part for displaying most viewed posts.
 *
 */
?>
<div>
    <h3 class="widget-title">Most view</h3>
    <ul>
        <?php
        $args = array( 'posts_per_page' => 5,//文章数
            'meta_key' => 'views',
            'orderby' => 'meta_value_num',
            'date_query' => array( array( 'after'  => '2 month ago', ))
        );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ):setup_postdata( $post );
            ?>
            <li>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </li>
        <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</div>