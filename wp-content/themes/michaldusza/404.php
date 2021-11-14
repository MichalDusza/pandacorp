<?php get_header(); ?>
<section class="error-404-section">
	<div class="container">
		<h1 class="error-title"><?php _e( 'Błąd 404', 'kc' ); ?></h1>
		<p class="not-found">
			<?php _e( 'Strona, której szukasz nie została odnaleziona.', 'kc' ); ?>
		</p>
		<p class="not-found">
			<a href="<?php echo HOME_LINK; ?>"><?php _e( 'Wróć na stronę główną.', 'kc' ); ?></a>
		</p>
	</div>
</section>
<?php
$dziedziny_args = array(
	'post_type' => DZIEDZINY_KC,
	'posts_per_page' => 4,
	'suppress_filters' => false,
	'post_status' => 'publish',
	'orderby' => 'rand',
	'fields' => 'ids',
	'post__not_in' => array(get_the_ID()),
);
$dziedziny = new WP_Query( $dziedziny_args );
if (isset($dziedziny->posts) && !empty( $dziedziny->posts)) {
	?>
	<section class="may-also">
		<div class="container">
			<h3 class="header-text multiline-title">
				<span class="line-1"><?php _e( 'Może Cię również', 'kc' ); ?></span>
				<span class="line-2"><?php _e( 'zainteresować', 'kc' ); ?></span>
			</h3>
			<div class="links grid-block">
				<?php
				foreach ( $dziedziny->posts as $dziedzina ) {
					?>
					<a href="<?php echo get_permalink($dziedzina); ?>" class="link">
                        <span class="icon">
	                        <?php
	                        $ikona = get_field( 'ikona', $dziedzina );
	                        if ( ! empty( $ikona ) ) {
		                        echo wp_get_attachment_image($ikona,'medium');
//	                            $ikona_file = get_attached_file($ikona);
//                                if ($ikona_file) {
//                                    echo file_get_contents( $ikona_file);
//                                }
	                        }
	                        ?>
                        </span>
						<span class="name"><?php echo custom_oai( get_the_title($dziedzina)); ?></span>
					</a>
					<?php
				}
				?>

			</div>

		</div>
	</section>
	<?php
}
?>
<div id="section-5">
	<div class="container">
		<div class="section-5-container">
			<?php
			$zdjecie_ostatnie_lewe = get_field( 'zdjecie_ostatnie_lewe', HOME_ID );
			if ( ! empty( $zdjecie_ostatnie_lewe ) ) {
				?>
				<img data-rellax-speed="2" data-rellax-zindex="1" class="img-left rellax" src="<?php echo $zdjecie_ostatnie_lewe; ?>" alt="img">
				<?php
			}
			?>
			<?php
			$zdjecie_ostatnie_prawe = get_field( 'zdjecie_ostatnie_prawe', HOME_ID );
			if ( ! empty( $zdjecie_ostatnie_prawe ) ) {
				?>
				<img data-rellax-speed="3" data-rellax-zindex="1" class="img-right rellax" src="<?php echo $zdjecie_ostatnie_prawe; ?>" alt="img">
				<?php
			}
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
