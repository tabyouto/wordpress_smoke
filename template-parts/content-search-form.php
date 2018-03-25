<?php
/**
 * Template part for displaying search form.
 *
 */
?>
<div>
    <form name="search_at" role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" class="Search-form">
        <input type="search" value="" name="s" placeholder="search..." id="SearchInput" onkeydown= "if(event.keyCode==13)search_at.submit()" />
    </form>
</div>