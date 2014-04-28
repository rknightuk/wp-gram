<?php get_header();?>

<section class="photo-index">
	<?php if (have_posts()) : ?>  
    	<?php while (have_posts()) : the_post(); ?>

    	<section class="photo main">

    		<a href="<?php the_permalink(); ?>"?
    			<?php the_content(); ?>
    		</a>

    	</section>

    	<?php endwhile; ?>
    
    <?php else : ?>  
    	// Something that happens when a post isn’t found.
	<?php endif; ?>
</section>

<nav class="paginate">
	<p class="previous"><?php next_posts_link('&laquo; Older photos'); ?></p>
	<p class="next"><?php previous_posts_link('Newer photos &raquo;'); ?></p>
</nav>

<?php get_footer();?>