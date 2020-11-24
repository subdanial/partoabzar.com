<?php /* Template Name: Home */ ?>
<?php get_template_part('template-parts/header_main'); ?>
<div class="container position-relative">
    <div class="full-nav js-full-nav">
        <div class="close js-full-nav-close">&times;</div>
        <div class="links">
            <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'home')); ?>
        </div>
    </div>
    <div class="top-nav position-absolute z-100 pt-3">
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
                    <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'home')); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-12">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="background-movie">
                <source src="<?= get_template_directory_uri() ?>/video/bg.mp4" type="video/mp4">
            </video>
            <div class="overlay d-flex justify-content-center align-items-center">
                <div>
                    <img src="<?= get_template_directory_uri() ?>/img/hero.png" class="hero-image mx-auto d-block">
                    <h1 class="hero-title text-center pt-2" style="color:#E0B86C!important;">PARTO ABZAR PASARGAD</h1>
                    <div class="hero_buttons">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="<?php get_site_url() ?>/products/">DENTAL PRODUCTS</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="<?php get_site_url() ?>/products/">MENTAL PRODUCTS</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>