<?php /* Template Name: Archive */ ?>
<?php get_template_part('template-parts/header_blog'); ?>
<?php
$args = array(
	'category__in' => $cat,
	'posts_per_page' => 12,
	'paged'          => $paged,
);
query_posts($args);
?>
<main class="archive">
	<div class="container">
		<?php get_template_part('template-parts/blog_nav'); ?>
		<div class="context">
			<div class="page_title font-weight-bold text-right rtl" dir='rtl'>
				<?php the_archive_title() ?>
			</div>
			<div class="row pt-3 g-3" dir="rtl">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
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
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>