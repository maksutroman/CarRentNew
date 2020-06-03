<?php get_header(); ?>

<div class="all-title-box">
	<div class="container text-center">
		<h1>Blog<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
	</div>
</div>

<div id="overviews" class="section wb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">
				<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
			</div>
		</div><!-- end title -->
		<hr class="hr3">
		<div class="row">
			<?php
			$args = [
				'post_type' => 'post',
				'orderby'    => 'ID',
				'post_status' => 'publish',
				'order'    => 'DESC',
				'posts_per_page' => -1 // this will retrive all the post that is published 
			];
			$result = new WP_Query($args);
			if ($result->have_posts()) : ?>
				<?php while ($result->have_posts()) : $result->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-12">
						<div class="blog-item">
							<div class="image-blog">
								<a href="<?php the_permalink(); ?>">
									<img class="img-fluid" src="<?php the_post_thumbnail(); ?>">
								</a>
							</div>
							<div class=" meta-info-blog">
								<span class="fa fa-calendar"> <a href="#"><?php echo get_the_date(); ?> </a></span>
								<span><i class="fa fa-tag"></i> <a href="#">News</a> </span>
								<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
							</div>
							<div class="blog-title">
								<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
							</div>
							<div class="blog-desc">
								<p><?php the_excerpt() ?></p>
							</div>
							<div class="blog-button">
								<a class="hover-btn-new orange" href="<?php the_permalink(); ?>"><span>Read More</span></a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif;
			wp_reset_postdata();
			?>
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->

<?php get_footer(); ?>