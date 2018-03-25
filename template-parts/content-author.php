<div class="entry-author">
    <div class="avatar"
         <?php
             $url = noxxxx_option('self_avatar');
             echo $url;
             $email = noxxxx_option('gravatar_email');
             if($email) {
                 $url = '//cn.gravatar.com/avatar/'. urlencode(md5($email).'?s=80&r=R');
             }
         ?>
         style="background-image:url(<?php echo $url; ?>)"></div>
    <div class="entry-author-desc">
        <a class="entry-author-name" target="_blank" title="去看看他/她的专栏" href="javascript:;" rel="author">
            <span itemprop="name"><?php echo noxxxx_option('nick_name'); ?></span>
        </a>
        <br>
        <span class="entry-author-about"></span>
        <div class="entry-author-description">
            <?php echo noxxxx_option('admin_des'); ?>
        </div>
        <div class="entry-author-links">
            <a rel="nofollow" target="_blank" href="<?php echo noxxxx_option('weibo') ?>">新浪微博</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a
                    rel="nofollow" target="_blank" href="<?php echo noxxxx_option('twitter') ?>">Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        </div>
        <div class="clear" style="clear:both"></div>
        <div class="entry-author-title">关于本文的作者</div>
    </div>
</div>