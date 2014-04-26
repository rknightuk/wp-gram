<?php get_header();?>

<section class="single wrap">

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

		<section class="photo">
			<h2><?php the_title();?></h2>
			<?php
			if (catch_that_image() != "NoImage") {
				echo '<img src="';
				echo catch_that_image();
				echo '" alt="" />';
			}
			else {
				the_content();
			}
			?>
			<p class="info-single"><?php echo get_the_date();?></p>
		</section>

    <?php endwhile; ?> 

	<nav class="paginate">
		<p class="previous"><?php next_posts_link('&laquo; Older photos'); ?></p>
		<p class="next"><?php previous_posts_link('Newer photos &raquo;'); ?></p>
	</nav>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

<?php get_footer();?>