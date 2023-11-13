<div class="animate insight col-md-4" data-animate="fade-in-bottom">
    <div class="line">
        <div class="wrap">
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="line-icon  " data-animate="fade-in-bottom">
                    <img class="mb-20" src="<?php echo $image[0]; ?>" alt="Arena" width="100%">
                    <?php $service = wp_get_object_terms( $post->ID, 'services' ); ?>
                    <div class="tag mb-20"><?php echo $service[0]->name;?> <span><?php echo get_the_date('M d, Y',$post); ?></span></div>
                    <h5 class="title mb-40"><?php echo $post->post_title ?></h5>
                    <?php if(get_field('author',$post)): ?>
                        <p class="tag"><a href="<?php echo get_permalink(get_field('author',$post)); ?>">By <?php echo get_field('hero',get_field('author',$p))['first_name']; ?> <?php echo get_field('hero',get_field('author',$post))['last_name']; ?></a>, <?php echo get_field('hero',get_field('author',$post))['designation']; ?></p>
                    <?php endif; ?>
                </div>
            </a>
        </div>
    </div>
</div>