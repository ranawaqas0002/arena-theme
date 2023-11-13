<?php
/**
 * Template Name: Not Found
 * Description: Page template 404 Not found.
 *
 */

get_header();


$not_found = get_field('not_found','options');

?>
<div class="container text-center">
    <div id="post-0" class="content error404 not-found">
        <div style="height: 30vh;"></div>
        <h1 class="entry-title"><?php echo $not_found['header'];?></h1>
        <h2 class="entry-title"><?php echo $not_found['sub_header'];?></h2>
        <div class="entry-content">
            <div><?php echo $not_found['text'];?></div>
        </div><!-- /.entry-content -->
        <div style="height: 20vh;"></div>
    </div><!-- /#post-0 -->
</div>
<?php
get_footer();
