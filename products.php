<?php /* Template Name: Products */ ?>

<?php get_template_part('template-parts/header_main'); ?>
<style>
    .ff-container {
        width: 100%;
    }
</style>


<div class="container ">
    <div class="full-nav js-full-nav">
        <div class="close js-full-nav-close">&times;</div>
        <div class="links ">
            <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'products')); ?>


        </div>
    </div>
    <div class="top-nav  pt-3">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <img src="<?= get_template_directory_uri() ?>/img/logo.png">
            </div>
            <div class="menu">
                <svg class="js-full-nav-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 21">
                    <g id="Icon_feather-menu" data-name="Icon feather-menu" transform="translate(-3 -7.5)">
                        <path id="Path_1" data-name="Path 1" d="M4.5,18h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                        <path id="Path_2" data-name="Path 2" d="M4.5,9h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                        <path id="Path_3" data-name="Path 3" d="M4.5,27h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                    </g>
                </svg>
                <div class="links d-none d-lg-flex pt-1">
                    <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'products')); ?>
                </div>
            </div>
        </div>
    </div>

    <main class="products " dir="">
        <section class="context h-100">
            <div class="products">
                <div class="title d-block pb-0 pt-3 ">OUR PRODUCTS</div>
                <hr class="hr-white w-25 mx-auto">
                <div class="select text-center mb-4 text-uppercase mt-4">
                    <span class="option active js-type" data-number="1">Dental</span>

                    <span class="option js-type" data-number="2">Medical</span>
                </div>


                <!-- type1 -->
                <div class="row group active" data-group="1">
                    <div class="col-12 p-lg-0 pl-lg-3 mb-5">
                        <?php
                        $args = [
                            'author' => '3',
                            'post_type' => 'page'
                        ];
                        $query = new WP_Query($args);
                        $i = 0;
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $i++;
                                $query->the_post();
                        ?>
                                <div class="row py-5">


                                    <div class="col-lg-6 
                                <?php if ($i % 2 == 0) {
                                    echo 'order-lg-1';
                                } else {
                                    echo 'order-lg-0';
                                } ?>
                                       ">
                                        <img class="w-100 product_thumbnail " src="<?php the_post_thumbnail_url() ?>">

                                    </div>

                                    <div class="col-lg-6 
                                    <?php if ($i % 2 == 0) {
                                        echo 'order-lg-0';
                                    } else {
                                        echo 'order-lg-1';
                                    } ?>
                                     align-items-center d-flex">
                                        <div>
                                            <span class="w-lg-max-content bg-white text-center text-lg-left text-dark mx-auto mx-lg-0 d-block d-lg-flex w-50 mt-lg-0 mt-3 mb-2 my-lg-0 py-2 px-3">
                                                <?php the_title(); ?>
                                            </span>
                                            <div class=" text-center text-lg-left">
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="btn rounded-0 btn-outline-light"> MORE
                                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="pb-1 bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        <?php }
                            wp_reset_postdata();
                        }
                        ?>

                    </div>
                </div>
                <!-- type2 -->
                <div class="row group" data-group="2">
                    <div class="col-12 p-lg-0 pl-lg-3 mb-5">
                        <?php
                        $args = [
                            'author' => '4',
                            'post_type' => 'page'
                        ];
                        $query = new WP_Query($args);
                        $i = 0;
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $i++;
                                $query->the_post();
                        ?>
                                <div class="row py-5">


                                    <div class="col-lg-6 
                                <?php if ($i % 2 == 0) {
                                    echo 'order-lg-1';
                                } else {
                                    echo 'order-lg-0';
                                } ?>
                                       ">
                                        <img class="w-100 product_thumbnail" src="<?php the_post_thumbnail_url('large') ?>">
                                    </div>

                                    <div class="col-lg-6 
                                    <?php if ($i % 2 == 0) {
                                        echo 'order-lg-0';
                                    } else {
                                        echo 'order-lg-1';
                                    } ?>
                                     align-items-center d-flex">
                                        <div>
                                        <span class="w-lg-max-content bg-white text-center text-lg-left text-dark mx-auto mx-lg-0 d-block d-lg-flex w-50 mt-lg-0 mt-3 mb-2 my-lg-0 py-2 px-3">
                                                <?php the_title(); ?>
                                            </span>
                                            <div class=" text-center text-lg-left">
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="btn rounded-0 btn-outline-light"> MORE
                                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="pb-1 bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        <?php }
                            wp_reset_postdata();
                        }
                        ?>

                    </div>
                </div>



            </div>
</div>
</section>
</main>
</div>
</div>
<?php get_footer(); ?>
<script>
    var data_selected;
    $('.js-type').click(function() {
        if (data_selected !== $(this).attr('data-number')) {
            data_selected = $(this).attr('data-number');
            $('.js-type').removeClass('active');
            $(this).addClass('active');

            $('.group').fadeOut('300', function() {
                $('.group').removeClass('active');
                $('.group').each(function() {
                    if ($(this).attr('data-group') == data_selected) {
                        $(this).fadeIn('300', function() {
                            $(this).addClass('active');
                        });
                    }
                })
            });
        }

    })

    if($.urlParam('select') == 'medical'){
        $('[data-number=2]').click();
    }
</script>