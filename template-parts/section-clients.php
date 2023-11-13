<?php /* Template Part: Clients Section*/

$clients = get_field('clients');
if ($clients) : ?>
    <section id="clients" class="overflow-hidden section-pd">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 justify-content-center align-items-center">
                    <div class="horizontal-dots left-dots">
                        <p class="section-sub"><span><?php echo $clients['header_number']; ?></span> <?php echo $clients['header']; ?></p>
                        <h2 class="heading mb-60"><?php echo $clients['sub_header']; ?></h2>
                        <div class="spac"></div>
                        <div id="client-navs"></div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-lg-7 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="clients-carousel">
                        <div>
                            <div class="row">
                                <?php
                                $logos = $clients['logos'];
                                if ($logos) :

                                    foreach ($logos as $key => $logo) {
                                ?>
                                <div class="col-4 d-flex align-items-center justify-content-center item"><img src="<?php echo $logo['logo']['url'] ?>" alt="Arena Consultance <?php echo $clients['header']; ?> Image | <?php echo $logo['logo']['caption'] ?> | <?php echo $logo['logo']['description'] ?> | <?php echo $logo['logo']['alt'] ?>" />
                                        </div>

                                <?php  }
                                endif;
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>