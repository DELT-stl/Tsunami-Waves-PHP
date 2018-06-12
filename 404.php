<?php
/**
 * The template for displaying 404 pages (not found)
 *
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
<div class="wbg">
	<div class="container center inner">
		<h1 style="color: #141414">404</h1>
		<h3 style="color: #f33">You shouldn't be here!</h3>
		<h2><a href="/web-design" style="color: #141414">web design</a><span>|</span><a href="/web-design" style="color: #141414">seo services</a><span>|</span><a href="/web-design" style="color: #141414">design services</a></h2>

		<div class="row">
			<div class="col-md-6">
				<video src="https://www.deltstl.com/wp-content/uploads/2017/08/reYqpO0.mp4" preload="auto" autoplay="autoplay" muted="muted" loop="loop" type="video/mp4" webkit-playsinline></video>
				<video src="http://i.imgur.com/mylBN53.mp4" preload="auto" autoplay="autoplay" muted="muted" loop="loop" type="video/mp4" webkit-playsinline></video>
				
				<video src="http://i.imgur.com/vOtbwyV.mp4" preload="auto" autoplay="autoplay" muted="muted" loop="loop" type="video/mp4" webkit-playsinline></video>
				<video src="https://www.deltstl.com/wp-content/uploads/2017/08/OMQkNtL.mp4" preload="auto" autoplay="autoplay" muted="muted" loop="loop" type="video/mp4" webkit-playsinline></video>
			</div>
			<div class="col-md-6">

				<img src="http://i.imgur.com/E6IJ2vk.gif" class="fourofour">
				<div class="divide20"></div>
				<img src="https://www.deltstl.com/wp-content/uploads/2017/08/02K36he.jpg" class="fourofour">
				<div class="divide20"></div>
				<img src="https://www.deltstl.com/wp-content/uploads/2017/08/O8lb5Ms.gif" class="fourofour">
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?> 
<script>
	var addButtonTrigger = function addButtonTrigger(el) {
		el.addEventListener("click", function () {
			var popupEl = document.querySelector("." + el.dataset.for);
			popupEl.classList.toggle("popup--visible");
		});
	};

	Array.from(document.querySelectorAll("button[data-for]")).forEach(addButtonTrigger);

	function homeimg() {
		$(".hp-banner").css({"background-image": "url('<?php the_post_thumbnail_url(); ?>')"});
	}


	$(function() {
		setTimeout(homeimg, 1000);
	});
</script>