<div class="post-relate">
    <?php
    $previous_post = get_previous_post();
    $next_post = get_next_post();
    ?>
    <?php if (!empty($previous_post)) { ?>
        <span class="<?php if (empty($next_post)) { echo 'no-next';} ?>">上一篇 >：<a href="<?php echo esc_url(get_permalink($previous_post->ID)); ?>"><?php echo esc_html(get_the_title($previous_post->ID)); ?></a></span>
    <?php } ?>
    <?php if (!empty($next_post)) { ?>
        <span>下一篇 >：<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_html(get_the_title($next_post->ID)); ?></a></span>
    <?php } ?>
</div>
