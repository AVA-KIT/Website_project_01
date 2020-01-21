<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialwp
 */

get_header(); ?>

<!-- sekcja Top slider -->
<div class="top-slider">
	<?php
	$ts_content = get_post_field('post_content',314);
	$ts_content = apply_filters('the_content', $ts_content);
	echo $ts_content;
	?>
</div>


<!-- sekcja Trzy kluczowe cechy -->
<div class="three-features">
	<div class="container section-padding">
		<?php
		$tf_content = get_post_field('post_content',296);
		$tf_content = apply_filters('the_content', $tf_content);
		echo $tf_content;
		?>
	</div>
</div>

<!-- sekcja Zalety produktu -->
<div class="product-advantages darker-bg">
	<div class="container">
		<?php
		$pa_content = get_post_field('post_content',300);
		$pa_content = apply_filters('the_content', $pa_content);
		echo $pa_content;
		?>
	</div>
</div>

<!-- sekcja Zobacz wiecej-->
<div class="product-more">
	<div class="container section-padding">
		<?php
		$pm_content = get_post_field('post_content',303);
		$pm_content = apply_filters('the_content', $pm_content);
		echo $pm_content;
		?>
	</div>
</div>

<!-- sekcja Call to action-->
<div class="call-to-action accent-bg">
	<div class="container section-padding">
		<?php
		$cta_content = get_post_field('post_content',311);
		$cta_content = apply_filters('the_content', $cta_content);
		echo $cta_content;
		?>
	</div>
</div>

<?php get_footer(); ?>
