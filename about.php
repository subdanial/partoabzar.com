<?php /* Template Name: About */ ?>
<?php get_template_part('template-parts/header_main'); ?>
<div class="container ">
    <div class="full-nav js-full-nav">
        <div class="close js-full-nav-close">&times;</div>
        <div class="links ">
            <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'about')); ?>
        </div>
    </div>
    <div class="top-nav  pt-3" style="z-index: 100000;">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <img src="<?= get_template_directory_uri() ?>/img/logo.png">
            </div>
            <div class="menu" style="z-index: 100000; ">
                <svg class="js-full-nav-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 21">
                    <g id="Icon_feather-menu" data-name="Icon feather-menu" transform="translate(-3 -7.5)">
                        <path id="Path_1" data-name="Path 1" d="M4.5,18h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                        <path id="Path_2" data-name="Path 2" d="M4.5,9h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                        <path id="Path_3" data-name="Path 3" d="M4.5,27h27" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                    </g>
                </svg>
                <div class="links d-none d-lg-flex pt-1" style="z-index: 100000;">
                    <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'about')); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="about mb-lg-0 mb-5" id="fullpage">
        <div class="context h-100">
            <div class="row">
                <div class="col-12">
                    <div class="section">
                        <div class="hero">
                            <div>
                                <div class="title mt-lg-0">
                                    ABOUT
                                </div>
                                <div class="describe">
                                    <p>Parto Abzar Pasargad Co. has started its activities in the field of medical
                                        device
                                        and
                                        dental, since 2008 Our company has been following the overwhelming stages in the
                                        supply
                                        and delivery of specialized
                                        Products.</p>
                                    <div class="text-white text-decoration-none">
                                        <div class="mouse d-lg-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="83" viewBox="0 0 48 83">
                                                <g id="Group_2" data-name="Group 2" transform="translate(-338 -928)">
                                                    <g id="Rectangle_2" data-name="Rectangle 2" transform="translate(338 928)" fill="none" stroke="#fff" stroke-width="3">
                                                        <rect width="48" height="83" rx="24" stroke="none" />
                                                        <rect x="1.5" y="1.5" width="45" height="80" rx="22.5" fill="none" />
                                                    </g>
                                                    <g id="Rectangle_3" class="scroller" data-name="Rectangle 3" transform="translate(357 969)" fill="#fff" stroke="#fff" stroke-width="3">
                                                        <rect width="11" height="25" rx="5.5" stroke="none" />
                                                        <rect x="1.5" y="1.5" width="8" height="22" rx="4" fill="none" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="text mt-3 ml-lg-4 ">Scroll for more</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="describe vh-lg-100 d-flex mt-lg-5 justify-content-center align-items-center">
                            <div>
                                <div class="row">
                                    <div class="col-2 d-none d-lg-block"><span class="font-big">A</span></div>
                                    <div id="about-more " class="col-lg-10 col-12 text-center text-lg-left mt-lg-0 mt-4">
                                        <span class="d-lg-none">A</span>gain, with a new approach to the market of these products and with more valuable
                                        experience Than before, it has made great efforts to allocate a larger share of
                                        the
                                        relevant market in quantitative and Quantitative terms.
                                        And now we have more than 3000 client in the whole of Iran

                                    </div>
                                </div>

                                <p class="title title-mini my-1 my-lg-5"> ABOUT OUR TEAM </p>
                                <p class="p-0 m-0">
                                    Our team includes 30 people - Sales and Marketing department: 11 people - After
                                    sales
                                    service epartment: 3 people - Educational and Scientific Section: 4 Professors
                                    One of our regular programs: Holding training and Educational classes,
                                    We believe that with the qualitative and quantitative management and more different
                                    performance, the diversification and development of the basket of products by Parto
                                    Abzar Pasargad Co., we will be among One of the best companies in this field in
                                    Iran.
                                    Supply of Consumer products:
                                    Specific products in different segment.

                                </p>
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
<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/fullpage.min.css">
<script src="<?= get_template_directory_uri() ?>/js/fullpage.min.js"></script>
<script>
    $('#fullpage').fullpage({});
</script>
