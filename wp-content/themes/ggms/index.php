<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage GGMS
 * @since GGMS 1.0
 */
?>
<!DOCTYPE html >

<html>

	<head>
		<title>Girls Guide to Middle Schools</title>
		<link href='http://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Crafty+Girls' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<?php wp_head(); ?>
	</head>

	<body>

		<div id="top">
			<div id="topTitle">
				Girls Guide
			</div>
			<div id="middleTitle">
				to
			</div>
			<div id="bottomTitle">
				Middle School
			</div>
		</div>
		<div id="main">
			<div id="mainNav">
				<ul>
					<li>
						<a href="/ggms/subject/school/">School</a>
					</li>
					<li>
						<a href="/ggms/subject/life/">Life</a>
					</li>
					<li>
						<a href="/ggms/subject/friends/">Friends</a>
					</li>
					<li>
						<a href="/ggms/subject/teacher_notes/">Teacher's Notes</a>
					</li>
					<li>
						<a href="/ggms/subject/boys/">Boys' Corner</a>
					</li>
				</ul>
			</div>
			<div id="mainContent">
				<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
			</div>
		</div>
	<?php wp_footer(); ?>
	
	<script type="text/javascript">
	    $(document).ready(function() {
	        //javascript goes here
	    });
	</script>
	</body>

</html>

