<?php /* Template Name: Contact */ ?>
<?php get_template_part('template-parts/header_main'); ?>
<div class="container ">
    <div class="full-nav js-full-nav">
        <div class="close js-full-nav-close">&times;</div>
        <div class="links ">
            <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'contact')); ?>

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
                    <?php get_template_part('template-parts/menu_main', null, array('link_active' => 'contact')); ?>
                </div>
            </div>
        </div>
    </div>

    <main class="contact desktop-center w-100">
        <section class="context w-100">
            <div class="row ">
                <div class="col-12 col-lg-6 pt-4 px-3">
                    <div id="map" class="mb-1">
                    </div>
                </div>
                <div class="col px-5">
                    <div class="title text-right">
                        باما در ارتباط باشید
                    </div>
                    <div class="subtitle text-right pb-2">
               
                        آدرس شركت:
                        ميدان بني  كوچه كشوري پلاك ١ ساختمان دياموند طبقه ٤ واحد ١٥
                        <br>
                        021-تماس : 26320042
                    </div>
                    <div class="row">
                        <div class="col-12"><input type="text" class="form-input text-right" placeholder="نام شما"></div>
                        <div class="col-12"><input type="text" class="form-input text-right" placeholder="آدرس ایمیل شما"></div>
                        <div class="col-12"><textarea name="" cols="20" rows="5" placeholder="پیغام خود را وارد کنید" class="mt-2 text-right"></textarea></div>
                        <div class="col-12"><button type="submit" class="text-right btn btn-outline-light rounded-0 border-2 mt-2 mb-4 mb-lg-0">ارسال</button></div>
                    </div>
                </div>
            </div>

        </section>
    </main>
</div>
</div>
<?php get_footer(); ?>
<link href="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.css" rel="stylesheet" type="text/css">
<script src="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.js" type="text/javascript"></script>
<script>
    var myMap = new L.Map('map', {
        key: 'web.Cfs5nBt1Q8VnQqJrXqPjCJbcw92MjtPzhx9YyZpe',
        maptype: 'dreamy',
        poi: true,
        traffic: false,
        center: [35.699739, 51.338097],
        zoom: 14
    });
</script>