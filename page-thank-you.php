<?php
/**
 * Template Name: Thank You Page
 * Description: Page template Thank You Page.
 *
 */

get_header();

?>
<div class="container text-center">
    <div id="post-0" class="content error404 not-found container">
        <div style="height: 30vh;"></div>
    	<h1 class="entry-title"><?php echo the_field('header');?></h1>
    	<h1 class="entry-title"><?php echo the_field('sub_header');?></h1>
    	<div class="entry-content">
    	<div><?php echo the_field('text');?></div>
    	</div><!-- /.entry-content -->
        <div style="height: 20vh;"></div>
    </div><!-- /#post-0 -->
</div>
<?php
get_footer();
