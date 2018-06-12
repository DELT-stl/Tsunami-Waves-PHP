<?php
/**
* Template Name: Archive
* Description: DELT Mag
*
* @package WordPress
* @subpackage BootstrapWP
*/
get_header(); ?>

<div class="gbg">
<div class="inner main-container">
<div class="mag_main-title">
<h2 class="finnabox3">
<h2 class="h2big finna moveme"><?php single_cat_title( );?></h2>
</h2>
<div class="finnabox3">
<h1 class="h3small finna moveme" style="color: #141414"><?php the_archive_description( );?></h1>
</div>
</div>
</div>

<div class="container">
<?php
$cat_id = get_query_var('cat');

$related = get_posts( array( 'category__in' => $cat_id ,'orderby'   => 'date', 'numberposts' => 9 ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); 
$i++;
if ($i == 1){echo "<div class=row>";}

?>
<div class="col-sm-6 blogpageposts">
<div class="imgmid_container finnabox3">
<div class="finna moveme">
<a href="<?php the_permalink(); ?>">
<img src="<?php the_post_thumbnail_url();?>" alt="Web design and marketing blog" class="imgmid">
</a>                    
</div>
</div>
<div class="btm_hp_srv">
<span><?php the_date(); ?> <span style="margin: 0px 10px;">|</span> <?php the_category( ', ' ); ?></span>
<div class="divide10"></div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>  
<a href="<?php the_permalink(); ?>"><button class="boxbtn">read article</button></a>
</div>
<div class="divide60"></div>
</div>
<?php
if ($i == 3){echo "</div><div class=row>";}
if ($i == 6){echo "</div><div class=row>";}
if ($i == 9){echo "</div>";$i=0;}

?>
<?php }?>


<?php if ($paged > 1) { ?>

<nav id="nav-posts">
<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
</nav>

<?php } else { ?>

<nav id="nav-posts">
<div class="prev"><?php next_posts_link('&laquo; More Articles'); ?></div>
</nav>

<?php }?>

<?php wp_reset_postdata(); ?>






</div>
<div class="divide120"></div>     
<span></span>
</div>
<style>
.sidebar-r, .sidebar-l {
display: none
}

.next
{
width: 50%;
float: right;
text-align: right;
}
.prev
{
width: 50%;
float: left;
text-align: left;
}
#nav-posts
{
position: relative;
top:0;
right:0;
bottom:0;
left:0;
}
</style>

<?php get_footer(); ?>
<style>
.gbg {
background: #f1f1f1;
position: relative
}
.imgmid{
width: 100%;
height: 300px;
object-fit: cover;
margin-bottom: 20px;
}
h2 a {
color: #141414
}
.btm_hp_srv span {
font-size: 15px
}
.blogpageposts {
height: 630px;
}
</style>
<script>
function check_if_in_view(){var n=$window.height(),i=$window.scrollTop(),e=i+n;$.each($animation_elements,function(){var n=$(this),o=n.outerHeight(),a=n.offset().top;a+o>=i&&a<=e&&n.addClass("in-view")})}$(window).scroll(function(){$(window).scrollTop()>=50?$(".menu-bar").addClass("menu-bar-small"):$(".menu-bar").removeClass("menu-bar-small")}),$(".menu-link").click(function(n){n.preventDefault(),$(this).toggleClass("close")}),$(".menu-link").on("click",function(){$(".rightwhite").toggleClass("xpandmenu")});var $animation_elements=$(".finna"),$window=$(window);$window.on("scroll resize",check_if_in_view),$window.trigger("scroll"),$(".toggle").click(function(n){n.preventDefault(),$(".toggle-animate").toggleClass("in-view")}),$(document).ready(function(){$(".has-animation").each(function(n){$(this).delay($(this).data("delay")).queue(function(){$(this).addClass("animate-in")})})}),$(window).scroll(function(){$(".has-animation").each(function(n){$(window).scrollTop()+$(window).height()>$(this).offset().top&&$(this).addClass("animate-inn")})});
</script>