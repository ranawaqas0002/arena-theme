<?php /* Template Part: Clients Section*/

$clients = get_field('clients');
if ($clients) : ?>

<section id="clients" class="center-text section-pd pt-0 pb-0 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12 horizontal-dots left-dots">
                <div class="row">
                    <div class="col-7 horizontal-dots left-dots">
                        <h2 class="medium-heading"><?php echo $clients['sub_header']; ?></h2>
                    </div>
                    <div class="col-5 d-flex align-items-center justify-content-end right-arrows">
                        <div id="client-navs"></div>
                    </div>
                </div>
                <div class="spac mb-40"></div>
                <div class="animate" data-animate="fade-in-bottom">
                    <div class="clients-carousel">
                        <?php
                        $logos = $clients['logos'];
                        $loop = 0;
                        if ($logos) :
                            foreach ($logos as $key => $logo) {
                        ?>
                            <?php if($loop==0): ?>
                                <div>
                                <div class="row">
                            <?php endif; ?>

                                <div class="col-lg-3 col-6 d-flex align-items-center justify-content-center item"><img src="<?php echo $logo['logo']['url'] ?>" alt="Arena Consultance <?php echo $clients['header']; ?> Image | <?php echo $logo['logo']['caption'] ?> | <?php echo $logo['logo']['description'] ?> | <?php echo $logo['logo']['alt'] ?>" />
                                </div>
                        <?php  
                            if($loop<7)
                                $loop++; 
                            else {
                                $loop = 0;
                            ?>
                            </div>
                            </div>
                        <?php
                                }
                            }
                        endif;
                        ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<?php endif; ?>
