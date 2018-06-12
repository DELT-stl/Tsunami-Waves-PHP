<?php get_header(); ?>
<div class="container inner3">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-7">
			<h4 class="head4 split" data-split="lines"><b><?php the_date(); ?></b> | by <?php the_author(); ?></h4>
			<h1 class="head2 split" data-split="lines"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="divide40"></div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="finna tho">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="web design and branding blog" class="srvimgs">
			</div>
		</div>
	</div>
</div>

<div class="container childpage">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 childbigimg">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="inner2">
		<div class="contain">
			<div class="row">
				<div class="col-xs-12">
					<h4 style="text-align:center">Share this post</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="pd"></div>
<div class="container">
<div class="row">
<?php
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'orderby'   => 'rand', 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
<div class="col-md-6">
<a href="<?php the_permalink(); ?>"><div style="position:relative">
<div class="article-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
</div>
<div class="article-title"><h3><span class="title-span"><?php the_title(); ?></span></h3></div>
</div></a>
<p class="article-description">
<a class="read-more" href="<?php the_permalink(); ?>"> Read More </a></p>
</div>
<?php }
wp_reset_postdata(); ?>

</div>
</div>
<div class="divide50"></div>
<div class="backthere">
<a href="/mag">
<div class="gb">
<div class="icon diagonal x"></div>
</div>
<h4>more blog posts</h4>
</a>
</div>
<div class="divide90"></div>
<div class="nwsbar">
<div class="container">
<div class="row ">
<div class="col-sm-6">
<h4 class="head3" style="color: #fff;text-align:center">Sign up for our newsletter</h4>
</div>
<div class="col-sm-6">
<?php echo do_shortcode('[contact-form-7 id="24" title="Newsletter Sign Up"]'); ?>    
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
<style>
	.naked-social-share li,.sharetho li{list-style:none;display:inline-block;position:relative}input[type=submit]{-webkit-appearance:button;cursor:pointer;border:0;background:#0c0c0c;color:#fff;text-transform:uppercase}.sharetho li,.sharetho li a{color:#b89c61}.nwsbar{background:#01ff2b;padding:50px 0 30px}.naked-social-share li{margin:0 10px}.childbigimg img{width:100%;margin:40px 0}.sharetho ul{margin-left:0;padding-left:0}.article-title h3{margin-top:20px;font-size:30px;line-height:35px}.sharetho li{font-size:23px;background:#181819;border-radius:50%;height:50px;width:50px;text-align:center;line-height:50px}.article-image{width:100%;height:270px;background-size:cover;background-position:center center;background-repeat:no-repeat}.nss-site-count{position:absolute;width:100%;left:0;text-align:center;margin-bottom:-20px;bottom:-20px;font-size:19px}.nss-site-name{display:none}@media (min-width:0px) and (max-width:768px){.article-image{width:100%;height:230px;background-size:cover;background-position:center center;background-repeat:no-repeat}}.preloader {display: none;!important}
</style>
