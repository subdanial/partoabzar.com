<?php /* Template Name: blog */ ?>
<?php $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 12)); ?>
<?php get_template_part('template-parts/header_blog'); ?>
<main class="blog">
    <?php if ($wpb_all_query->have_posts()) : ?>
        <div class="container">
            <?php get_template_part('template-parts/blog_nav'); ?>
            <div class="context">
                <div class="page_title font-weight-bold text-right rtl" dir='rtl'>
                    آخرین آموزش ها
                </div>
                <div class="row pt-3 g-3" dir="rtl">
                    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                            <a href="<?php the_permalink(); ?>">
                                <div class="post shadow">
                                    <div class="picture"> <img class="w-100" src="<?php the_post_thumbnail_url() ?>"></div>
                                    <div class="content">
                                        <div class="title text-right"> <a class="text-decoration-none text-white text-right" dir="rtl" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                        <div class="describe pb-0 pt-1 text-right" dir="rtl"><?php the_excerpt(); ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    <?php else : ?>
        <p><?php _e('این بخش مطلبی ندارد'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>