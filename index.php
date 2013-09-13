<?php get_header();?>

<section class="main">
	<section class="photo-block">

	<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>

		<section class="photo">
			<?php the_content();?>
			<p class="info"><?php the_title();?><br/>
			<?php echo get_the_date();?> | <a href="<?php the_permalink(); ?>">&infin; permalink</a></p>
			<p class="share">
				<a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title();?>&amp;url=<?php the_permalink();?>">tweet this photo</a> | 
				<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">share on facebook</a>
			</p>
		</section>

    <?php endwhile; ?> 

	<nav class="paginate">
		<p class="previous"><?php next_posts_link('&laquo; Older photos'); ?></p>
		<p class="next"><?php previous_posts_link('Newer photos &raquo;'); ?></p>
	</nav>
    
    <?php else : ?>  
    //Something that happens when a post isn’t found.
<?php endif; ?>

	</section>
</section>

<?php get_footer();?>