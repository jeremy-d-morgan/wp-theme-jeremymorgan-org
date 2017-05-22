<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp-theme-jeremymorgan.org
 */

?>

<section id="homepage-hero" class="hero">

  <div class="content">
    <p>&gt; echo readme.txt</p>
    <p>Welcome to the personal website of Jeremy Morgan, a full-stack web developer and electronics tinkerer from Syracuse, NY.</p>
    <p>This website serves as the primary location for documenting and archiving Jeremy's many adventures in programming, electronics, classic video games, and all the other things that distracts him.</p>
    <p>Connect with Jeremy via:</p>
    <ul class="menu">
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <a href="https://twitter.com/jdmorgancny">Twitter</a></li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <a href="https://www.linkedin.com/in/jdmorgancny/">LinkedIn</a></li>
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* <a href="https://github.com/jeremy-d-morgan/">GitHub</a></li>
    </ul>
    <p class="scroll-more">Scroll to see recent posts...</p>
    <p>&gt;<span class="cursor">_</span></p>
  </div>

</section>

<section id="homepage-posts" class="posts">

  <div class="content">

    <h2>Recent Posts</h2>

  </div>

</section>

<?php

/*

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-theme-jeremymorgan-org' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						//translators: %s: Name of current post
						esc_html__( 'Edit %s', 'wp-theme-jeremymorgan-org' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

*/

?>
