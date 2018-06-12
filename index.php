<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
get_header(); // This fxn gets the header.php file and renders it ?>
	<div class="container">

		<div class="side_txt wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
            <h1 class="navy"><?php the_title();?></h1>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <div class="side_img revealedBox goRight">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="contentBox">
                    <span></span>
                </div>
            </div>
        </div>

        <div class="contain inner wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
	        <div class="pd"></div>
	        <?php the_content();?>
    	</div>
    </div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>