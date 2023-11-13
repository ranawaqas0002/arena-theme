<?php /* Template Part: Consultancy Video Hero */ ?>

<?php 
$section_video = get_field('section_video');
$hero = get_field('hero');
$play = get_field('video_play','options');
// print_r($play);
if( $section_video): ?>

<div class="full-vid">
<?php
if($section_video['video'] && $section_video['video'] !=="video_id"){ ?>

<span class="play-bt youtube-link" youtubeid="<?php echo $section_video['video'];?>">
<img src="<?php echo $play['url'] ?>"
    alt="Arena  <?php echo $hero['header'];?> Video Play Button |<?php echo $play['caption']?> | <?php echo $play['description'] ?> | <?php echo $play['alt'] ?>">

</span>
<div class="wrap">
    <img class="img youtube-link" youtubeid="<?php echo $section_video['video'];?>" src="<?php echo $section_video['image']['url'] ?>"
         alt="Arena  <?php echo $hero['header'];?> Video Banner |<?php echo $section_video['image']['caption']?> | <?php echo $section_video['image']['description'] ?> | <?php echo $section_video['image']['alt'] ?>">
</div>
<?php }
else
{ ?>
    <img class="img" src="<?php echo $section_video['image']['url'] ?>"
    alt="Arena  <?php echo $hero['header'];?> Video Banner |<?php echo $section_video['image']['caption']?> | <?php echo $section_video['image']['description'] ?> | <?php echo $section_video['image']['alt'] ?>">
<?php }?>
</div>

<?php endif; ?>



