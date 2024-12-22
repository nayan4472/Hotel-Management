@include('main')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<div class="fh5co-parallax" style="background-image: url('user/images/hd.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">Contact Us</h1>
                    <p>Made with MAHN by the fine folks at <a href="https://www.ljku.edu.in/">LJKU.in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-contact-section">
    <div class="row">
        <div class="col-md-6">
            <div id="map" class="fh5co-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.943474181008!2d51.401372275903256!3d35.7276086725723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0133e3b3a8d1%3A0x6b6bfb0f09e5beb2!2sMahan%20Hotel!5e0!3m2!1sen!2sin!4v1682396650595!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <h3>Our Address</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <ul class="contact-info">
                    <li><i class="ti-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                    <li><i class="ti-mobile"></i>+ 1235 2355 98</li>
                    <li><i class="ti-envelope"></i><a href="#">info@mahn.com</a></li>
                    <li><i class="ti-home"></i><a href="#">www.mahn.com</a></li>
                </ul>
            </div>
            <div class="col-md-12">
               <form method="post" action="/contact">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" value="{{session('user')}}" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="email" value="{{session('email')}}" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
	@include('ufooter')