<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package breads
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
	</header><!-- .entry-header -->
	<?php breads_post_thumbnail(); ?>
	
	<div class="main-content">
		<h2 class="breads-heading">お知らせ</h2>
		<div class="entry-content">
			<?php
			the_content();
	
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'breads' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<h2 class="breads-heading">朝パン</h2>
		<div class="main-morning">
			<div class="main-breads">
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-morning11.jpg" alt="">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-morning5.jpg" alt="">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-morning3.jpg" alt="">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-morning11.jpg" alt="">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-morning5.jpg" alt="">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-morning3.jpg" alt="">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="main-text">
				<p class="main-anchor"><a href="">他のパンはこちら→</a></p>
				<div class="text-hover">
					<img src="http://breads.local/wp-content/uploads/2022/06/breads-icon2_min.png" alt="">
				</div>
			</div>
		</div>
		<h2 class="breads-heading">昼パン</h2>
		<div class="main-evening">
			<div class="main-breads">
			<div class="main-breads">
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-img8.jpg" alt="Waffle">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-img3.jpg" alt="Croissant">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-img6.jpg" alt="Baglesands">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
			</div>
			<div class="main-eveningImg">
				<img src="http://breads.local/wp-content/uploads/2022/06/breads-lunch1.jpg" alt="Table">
			</div>
			<div class="main-breads">
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-img2-scaled.jpg" alt="Waffle">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-img1.jpg" alt="Croissant">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
				<div class="breads-box">
					<a href="" class="wrap-img-hover-06">
						<figure>
							<img src="http://breads.local/wp-content/uploads/2022/06/breads-img4.jpg" alt="Baglesands">
							<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
						</figure>
					</a>
				</div>
			</div>
		</div>
		<h2 class="breads-heading">安心して食べれるパンを</h2>
		<div class="main-breads">
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img5.jpg" alt="Waffle">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-morning10.jpg" alt="Croissant">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img8.jpg" alt="Baglesands">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img3.jpg" alt="Waffle">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img5.jpg" alt="Croissant">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img6.jpg" alt="Baglesands">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img2-scaled.jpg" alt="Waffle">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img1.jpg" alt="Croissant">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
			<div class="breads-box">
				<a href="" class="wrap-img-hover-06">
					<figure>
						<img src="http://breads.local/wp-content/uploads/2022/06/breads-img4.jpg" alt="Baglesands">
						<figcaption><p>CLICK<br>パン情報を見る</p></figcaption>
					</figure>
				</a>
			</div>
		</div>
	</div>
	<div class="main-map">
		<a href=""><img src="http://breads.local/wp-content/uploads/2022/06/breads-map.jpg" alt="Breads-map"></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
