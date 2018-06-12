<?php
/**
 * Post Type: Event
 * Description: Events Page
 *
 */
get_header(); ?>
    <div class="slider-transition">
        <img src="img/fan-photo.jpg" class="event-img">
        <div class="content-div">
            <div class="event_content">
                <div class="event-title-bg">
                    <div class="event-title">
                        <h1 class='get'>3rd Annual Tsunami Bowl</h1>
                        <p>June 14th, 2017 - Ballpark Village, St. Louis, Missouri</p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="divide40"></div>
                            <h4>share this event!</h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="inner">
                <div class="contain">
                    <h2 class="head1">about the event</h2>
                    <p>For the first time ever, Tsunami Waves Foundation & Ballpark Village proudly bring Vitilla to St. Louis. Vitilla is a “street baseball”/stickball tournament. This one will be featuring amateur teams and experienced MLB players from both the Cardinals and the Brewers. 100 or so local teens to come and participate in a Home Run Derby, Pitching Contest, and a Vitilla Game Tournament</p>
                </div>
            </div>
        </div>
    </div>



    <div class="divide100"></div>
    <div class="divide100"></div>
    <div class="divide100"></div>
    <div class="divide100"></div>
    <div class="divide100"></div>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>-->
    <script>
        if (!window.jQuery) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            stagePadding: 200,
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            lazyLoad: true,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 60
                },
                600: {
                    items: 1,
                    stagePadding: 100
                },
                1000: {
                    items: 1,
                    stagePadding: 200
                },
                1200: {
                    items: 1,
                    stagePadding: 250
                },
                1400: {
                    items: 1,
                    stagePadding: 300
                },
                1600: {
                    items: 1,
                    stagePadding: 350
                },
                1800: {
                    items: 1,
                    stagePadding: 400
                }
            }
        })
    </script>
</body>
</html>
