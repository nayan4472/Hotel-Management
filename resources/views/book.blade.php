@include('main')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<div class="fh5co-parallax" style="background-image: url('user/images/hd.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">Book Fast</h1>
                    <p>Made with MAHN by the fine folks at <a href="https://www.ljku.edu.in/">LJKU.in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- new --}}

<div id="fh5co-blog-section">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="section-title text-center">
                  <h2>Book Fast</h2>
              </div>
          </div>
      </div>
      <div class="row">
        @foreach ($data as $in)
          <div class="col-md-4">
              <div class="blog-grid" style="background-image: url({{url('user/images/'.$in['img_name'])}});">
              </div>
              <div class="desc">
                  <h3 style="font-family: 'Times New Roman', Times, serif;">{{$in['room_name']}}</h3><br>
                  <h4 style="font-family: 'Times New Roman', Times, serif;">Price ₹ {{$in['price']}}</h4>
                  <button style="font-family: 'Times New Roman', Times, serif;"><a href="checking/{{ $in['id'] }}">Book</a></button>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</div>

@include('ufooter')