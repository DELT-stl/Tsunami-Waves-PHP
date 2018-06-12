    <footer>
        <div class="inner container">
            <div class="row">
                <div class="col-sm-3">
                    <li><a href="fdsfsdf">Homepage</a></li>
                    <li><a href="fdsfsdf">our mission</a></li>
                    <li><a href="fdsfsdf">tsunami store</a></li>
                    <li><a href="fdsfsdf">our sponsors</a></li>
                </div>
                <div class="col-sm-3">
                    <li><a href="fdsfsdf">donate</a></li>
                    <li><a href="fdsfsdf">events</a></li>
                    <li><a href="fdsfsdf">in the news</a></li>
                    <li><a href="fdsfsdf">contact us</a></li>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
                    <img src="http://www.tsunamiwavesfoundation.org/wp-content/uploads/Tsunami-Waves-Foundation-Main-Logo.png" alt="Tsunami Waves Logo">

                </div>
            </div>
            <div class="copyright">
                <p>© 2018 Tsunami Waves Foundation. Saint Louis, Missouri. TWF is a 501(C)(3) non-profit organization. <br><a href="https://www.deltstl.com" target="_blank">Website design by DELT</a></p>
            </div>
        </div>
    </footer>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>-->
    <script>
        if (!window.jQuery) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
    </script>
    <script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
				$(this).toggleClass("is-active");
				$(".fixedmenubg").toggleClass("active");
				$(".fixedmenu").toggleClass("active");
			});
		});
    </script>
</body>
</html>
<?php wp_footer(); ?>
