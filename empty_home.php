<?php /* Template Name: Empty_home_style */ ?>
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

    <main class="products rtl" dir="rtl">
        <section class="context h-100">
            <div class="products">
                <div class="row">
                    <div class="col-12 p-lg-0 pl-lg-3 mb-5 rtl">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>
                                <div class="pr-3 pt-3 pl-2">
                                </div>
                                <div class="the_content">
                                    <?php the_content(); ?>
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
