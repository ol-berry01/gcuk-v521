<?php
$v5gcuk_enable_section = get_theme_mod( 'v5gcuk_blog_enable', true );
if ( $v5gcuk_enable_section || is_customize_preview() ) :
?>
<div id="blog-section" class="blog-section" <?php if( false == $v5gcuk_enable_section ): echo 'style="display: none;"'; endif ?>>
    <h3 class="wow fadeIn">Latest Golf Car UK News</h3>
    	<?php
			$args = array(
				'post_type' => 'post',
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
    	?>
		<div class="blog-wrap js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": false, "prevNextButtons": false, "pageDots": true }'>
		<?php /* Start the Loop */ ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('blog-item wow fadeIn'); ?>>
                <time class="blog-time-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ) ?></time>
                <?php if ( has_post_thumbnail() ) { ?>
					<div class="blog-item-image">
						<a href="<?php echo esc_url( get_permalink() ) ?>" class="ql_thumbnail_hover" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'v5gcuk_blog-section' ); ?>
						</a>
					</div>
				<?php } ?>
                <div class="blog-item-entry">
                	<?php the_title( sprintf( '<h2 class="blog-item-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                	<?php the_excerpt(); ?>
                    <a href="<?php echo esc_url( get_permalink() ) ?>" class="read-more"><?php esc_html_e( 'Read More', 'v5gcuk' ); ?> <i class="fa fa-angle-right"></i></a>
                </div>
            </article>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>
<?php endif ?>