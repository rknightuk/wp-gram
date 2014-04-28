<?php get_header();?>

<section class="photo single">

	<?php if (have_posts()) : ?>  
    	<?php while (have_posts()) : the_post(); ?>

    		<?php the_content(); ?>

    		<h2><?php the_title();?></h2>

    		<p class="meta"><?php echo get_the_date();?></p>

    	<?php endwhile; ?>
    
    <?php else : ?>  
    	// Something that happens when a post isn’t found.
	<?php endif; ?>

</section>

<?php get_footer();?>