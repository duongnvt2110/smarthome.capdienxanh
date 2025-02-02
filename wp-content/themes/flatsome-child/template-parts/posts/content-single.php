
	<div class="row">
		<div class="col medium-12 small-12 large-8">
			<div class="entry-content single-page">
				<div class="flex-col flex-center text-center">
					<?php get_template_part( 'template-parts/posts/partials/entry', 'title');  ?>
				</div>

				<?php the_content(); ?>

				<?php
				wp_link_pages();
				?>

				<?php if ( get_theme_mod( 'blog_share', 1 ) ) {
					// SHARE ICONS
					echo '<div class="blog-share text-center">';
					echo '<div class="is-divider medium"></div>';
					echo do_shortcode( '[share]' );
					echo '</div>';
				} ?>
			</div>

			<?php if ( get_theme_mod( 'blog_single_footer_meta', 1 ) ) : ?>
				<footer class="entry-meta text-<?php echo get_theme_mod( 'blog_posts_title_align', 'center' ); ?>">
					<?php
					/* translators: used between list items, there is a space after the comma */
					$category_list = get_the_category_list( __( ', ', 'flatsome' ) );

					/* translators: used between list items, there is a space after the comma */
					$tag_list = get_the_tag_list( '', __( ', ', 'flatsome' ) );


					// But this blog has loads of categories so we should probably display them here.
					if ( '' != $tag_list ) {
						$meta_text = __( 'This entry was posted in %1$s and tagged %2$s.', 'flatsome' );
					} else {
						$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'flatsome' );
					}

					printf( $meta_text, $category_list, $tag_list, get_permalink(), the_title_attribute( 'echo=0' ) );
					?>
				</footer>
			<?php endif; ?>

			<?php if ( get_theme_mod( 'blog_author_box', 1 ) ) : ?>
				<div class="entry-author author-box">
					<div class="flex-row align-top">
						<div class="flex-col mr circle">
							<div class="blog-author-image">
								<?php
								$user = get_the_author_meta( 'ID' );
								echo get_avatar( $user, 90 );
								?>
							</div>
						</div>
						<div class="flex-col flex-grow">
							<h5 class="author-name uppercase pt-half">
								<?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>
							</h5>
							<p class="author-desc small"><?php echo esc_html( get_the_author_meta( 'user_description' ) ); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( get_theme_mod( 'blog_single_next_prev_nav', 1 ) ) :
				flatsome_content_nav( 'nav-below' );
			endif; ?>
		</div>
		<div class="col medium-12 small-12 large-4 page-notfull-width pt-half">
				<?php echo do_shortcode('
				[tabgroup]
					<br>
					[tab title="Tin tức"] 
						[blog_posts style="vertical" type="row" columns="1" columns__md="1" depth="1" depth_hover="2" cat="21" posts="12" offset="0" 
							excerpt="false"  show_date="text" show_category="label" image_width="40" ] 

						<div class="text-center">
							<a class="button is-link lowercase" title="Sự kiện" href="/tin-tuc">
								<span>Xem thêm</span>
								<i class="icon-angle-right"></i>
							</a>
						</div>
					[/tab]
					<br>
					[tab title="Công trình tiêu biểu"] 
						[blog_posts style="vertical" type="row" columns="1" columns__md="1" depth="2" depth_hover="2" cat="24" posts="12" offset="0" 
							excerpt="false"  show_date="text" show_category="label" image_width="40" ] 
							
						<div class="text-center">
							<a class="button is-link lowercase" title="Sự kiện" href="/cong-trinh-tieu-bieu">
								<span>Xem thêm</span>
								<i class="icon-angle-right"></i>
							</a>
						</div>
					[/tab]
					<br>
					[tab title="Khuyếm mại"] 
						[blog_posts style="vertical" type="row" columns="1" columns__md="1" depth="2" depth_hover="2" cat="25" posts="12" offset="0" 
							excerpt="false"  show_date="text" show_category="label" image_width="40" ] 
						<div class="text-center">
							<a class="button is-link lowercase" title="Sự kiện" href="/chuong-trinh-khuyen-mai">
								<span>Xem thêm</span>
								<i class="icon-angle-right"></i>
							</a>
						</div>
					[/tab]
					<br>
				[/tabgroup]');
				?>
			
		</div>
	</div>
</div>