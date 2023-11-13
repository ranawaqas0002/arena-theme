<?php /* Template Part: Page Hero */ ?>

<?php

$hero = get_field('hero');
if( $hero ): ?>

<style>
    <?php 
    for($x=1;$x<50;$x++) 
        echo ".landing-banner .word:nth-of-type(".$x.") { animation-delay:".($x*100+300)."ms; }";
    ?>
</style>

<section class="landing-banner top-banner">
    <div class="copy">
        <h1 class="header animate" data-animate="fade-in-top"> <?php echo $hero['header'];?></h1>
        <div class="sub_header">
            <?php
                $texts = $hero['sub_header'];
                $words = explode('<p>',$texts);

                // $words = explode(' ', strip_tags($texts));
                for($x=1;$x<count($words);$x++){
                    $t = $string = str_replace(array("<p>","</p>"), "",$words[$x]);
                    echo '<div class="overflow-hidden"><div class="word animate fade-in-bottom">'.$t.'</div></div>';
                }
            ?>
        </div>
        <div class="scroll-text"><?php echo $hero['side_text'];?></div>
    </div>
    <div class="dot animate" data-animate="fade-in-top"><span></span></div>
</section>

<?php endif; ?>

