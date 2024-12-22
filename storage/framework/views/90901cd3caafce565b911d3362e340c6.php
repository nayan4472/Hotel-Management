<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end:fh5co-header -->

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('user/images/dubai.jpg');">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>MAHN Hotel</span></p>
                                <h2>Reserve Room for Family Vacation</h2>
                                <p>
                                    <a href="book" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(user/images/slider2.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>MAHN Deluxe Hotel</span></p>
                                <h2>Make Your Vacation Comfortable</h2>
                                <p>
                                    <a href="book" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(user/images/h2.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>MAHN Luxe Hotel</span></p>
                                <h2>A Best Place To Enjoy Your Life</h2>
                                <p>
                                    <a href="book" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>
<div class="wrap">
    <div class="container">
        <div class="row">
            <div id="availability">
                <form action="book" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="a-col">
                        <section>
                            <select class="cs-select cs-skin-border">
                                <option value="" disabled selected>Select Room</option>
                                <option value="email">Single Room</option>
                                <option value="twitter">Double Room</option>
                            </select>
                        </section>
                    </div>
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-start">Check In</label>
                            <input type="text" class="form-control" id="date-start" />
                        </div>
                    </div>
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-end">Check Out</label>
                            <input type="text" class="form-control" id="date-end" />
                        </div>
                    </div>
                    <div class="a-col action">
                        <a href="book">
                            <span>Book</span>
                            Room
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-counter-section" class="fh5co-counters">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="fh5co-counter-label">User Access</span>
            </div>
            <div class="col-md-3 text-center">
                <span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="fh5co-counter-label">Hotels</span>
            </div>
            <div class="col-md-3 text-center">
                <span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="fh5co-counter-label">Transactions</span>
            </div>
            <div class="col-md-3 text-center">
                <span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="fh5co-counter-label">Rating &amp; Review</span>
            </div>
        </div>
    </div>
</div>

<div id="featured-hotel" class="fh5co-bg-color">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Featured Hotels</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="feature-full-1col">
                <div class="image" style="background-image: url(user/images/hotel_feture_1.jpg);">
                    <div class="descrip text-center">
                        <p><small>For as low as</small><span>$100/night</span></p>
                    </div>
                </div>
                <div class="desc">
                    <h3>Deluxe Hotel</h3>
                    <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam
                        euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac
                        interdum a, pulvinar ac massa. Nullam malesuada congue </p>
                    <p><a href="book" class="btn btn-primary btn-luxe-primary">Book Now <i
                                class="ti-angle-right"></i></a></p>
                </div>
            </div>

            <div class="feature-full-2col">
                <div class="f-hotel">
                    <div class="image" style="background-image: url(user/images/hotel_feture_2.jpg);">
                        <div class="descrip text-center">
                            <p><small>For as low as</small><span>$99/night</span></p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>Hotel Bora</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas.
                            Etiam euismod tempor leo,
                            in suscipit urna condimentum sed. </p>
                        <p><a href="book" class="btn btn-primary btn-luxe-primary">Book Now <i
                                    class="ti-angle-right"></i></a></p>
                    </div>
                </div>
                <div class="f-hotel">
                    <div class="image" style="background-image: url(user/images/hotel_feture_3.jpg);">
                        <div class="descrip text-center">
                            <p><small>For as low as</small><span>$99/night</span></p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3>D’Morvie</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas.
                            Etiam euismod tempor leo, in suscipit urna condimentum sed. </p>
                        <p><a href="book" class="btn btn-primary btn-luxe-primary">Book Now <i
                                    class="ti-angle-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Happy Customer Says...</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testimony">
                    <blockquote>
                        &ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of
                        charge to the Premium Suite, thanks so much&rdquo;
                    </blockquote>
                    <p class="author"><cite>Mamad Minapara</cite></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimony">
                    <blockquote>
                        &ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and
                        attentive. Highly Recommended&rdquo;
                    </blockquote>
                    <p class="author"><cite>Meetu Joshi</cite></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimony">
                    <blockquote>
                        &ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of
                        charge to the Premium Suite, thanks so much&rdquo;
                    </blockquote>
                    <p class="author"><cite>Priyanka Mehta</cite></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:fh5co-header -->
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url('user/images/dubai.jpg');">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>Bora Hotel</span></p>
                                <h2>Reserve Room for Family Vacation</h2>
                                <p>
                                    <a href="book" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(user/images/slider2.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>Deluxe Hotel</span></p>
                                <h2>Make Your Vacation Comfortable</h2>
                                <p>
                                    <a href="book" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(user/images/slider3.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-12 col-md-offset-0 text-center slider-text">
                        <div class="slider-text-inner js-fullheight">
                            <div class="desc">
                                <p><span>Luxe Hotel</span></p>
                                <h2>A Best Place To Enjoy Your Life</h2>
                                <p>
                                    <a href="book" class="btn btn-primary btn-lg">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>

<?php echo $__env->make('ufooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/home.blade.php ENDPATH**/ ?>