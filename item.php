<?php
/*
Template Name: Item 
*/
?>



<?php get_template_part('template-parts/header_main'); ?>
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

    <main class="products">
        <section class="context h-100">
            <div class="products">

                <div class="row">
                    <div class="col-12 p-lg-0 pl-lg-3 mb-5">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>
                                <div class="pr-3 pt-3 pl-2">
                                </div>
                                <div class="product_wallpaper pt-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="<?php the_post_thumbnail_url('full') ?>">
                                        </div>
                                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                            <div class="mt-lg-0 mt-5">
                                                <div class="title">
                                                    <?php the_title(); ?>
                                                </div>
                                                <div class="the_content text-center">
                                                    <?php the_content(); ?>
                                                </div>
                                                <a class="text-white text-center w-100 d-block text-decoration-none pt-4" href="<?= site_url(); ?>/products"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" />
                                                    </svg> Back to products</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

</div>
</section>
</main>
</div>
</div>
<?php get_footer(); ?>