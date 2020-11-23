<?php /* Template Name: Single */ ?>
<main class="single">
<?php get_template_part('template-parts/header_blog'); ?>
	<div class="container">
		<?php get_template_part('template-parts/blog_nav'); ?>
		<div class="container">
			<div class="row">
				<div class="col-12 p-lg-0 pl-lg-3 mb-5">
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
</main>
<?php get_footer(); ?>