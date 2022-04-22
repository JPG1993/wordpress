<?php get_header(); ?>
			
        <section class="section">
		    <aside class="div">
		    	<ul> <?php dynamic_sidebar( 'homepage' ); ?> </ul>
		    </aside>
		
		<aside class="div2">
			<?php echo the_title(); ?>
			<span class="image main"><?php the_post_thumbnail();  ?></span>
            <?= the_content(); ?>
			<?php echo get_post_meta( get_the_ID(), 'Age', true ); ?><?php echo get_post_meta( get_the_ID(), 'Club', true ); ?><?php echo get_post_meta( get_the_ID(), 'Nationalité', true ); ?>
			<div class="pagination">
				<div class="pagination_prev">
				<?php previous_post_link( 'Article Précédent<br>%link' ); ?>
    			</div>
    		<div class="pagination_next">
    		<?php next_post_link( 'Article Suivant<br>%link' ); ?> 
    		</div>
			</div>
			<p><?php comments_template(); ?></p>
			<?php the_author(); echo the_date(); ?>
		</aside>
        	
	</section>
		<?php get_footer(); ?>
</body>
</html>