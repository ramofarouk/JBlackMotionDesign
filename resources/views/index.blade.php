@extends('layouts.base')
@section('title')
Accueil
@endsection
@section('content')
<div class="carousel">
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-img-1"></div>
        <div class="carousel-caption">
          <h1 class="animated fadeInLeft">Be Life Confident</h1>
          <h5 class="animated fadeInUp">Growing Your Dreams.</h5>
          <div class="slider-btn">
            <div class="animated inner-btn fadeInUp"><a href="#" class="btn btn-slider">LEARN MORE</a></div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img-2"></div>
        <div class="carousel-caption">
          <h1 class="animated fadeInLeft">Planning For The Future.</h1>
          <h5 class="animated fadeInUp">Strategies To Grow and Protect.</h5>
          <div class="slider-btn">
            <div class="animated inner-btn fadeInUp"><a href="#" class="btn btn-slider">LEARN MORE</a></div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img-3"></div>
        <div class="carousel-caption">
          <h1 class="animated fadeInLeft">Get Your Start Here</h1>
          <h5 class="animated fadeInUp">Making Your Future Our Business.</h5>
          <div class="slider-btn">
            <div class="animated inner-btn fadeInUp"><a href="#" class="btn btn-slider">LEARN MORE</a></div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="front-section">
          <h6>Your satisfaction defines us</h6>
          <h2>We take your business further</h2>
          <hr class="left">
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, making this the first true generator on the Internet. It uses a dictionary.</p>

          <div class="front-options">
            <div class="row">
              <div class="col-md-6">
                <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/money.png')}}" alt=""></figure></div>
                <h4>Consultation</h4>
                <p>looked up one of the more obscure Latin words, consectetur</p>
              </div>
              <div class="col-md-6">
                <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/saved.png')}}" alt=""></figure></div>
                <h4>Saving Adviser</h4>
                <p>looked up one of the more obscure Latin words, consectetur</p>
              </div>
              <div class="col-md-6">
                <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/grow.png')}}" alt=""></figure></div>
                <h4>Financial Strategy</h4>
                <p>looked up one of the more obscure Latin words, consectetur</p>
              </div>
              <div class="col-md-6">
                <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/loan.png')}}" alt=""></figure></div>
                <h4>Personal Loans</h4>
                <p>looked up one of the more obscure Latin words, consectetur</p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-4 front-left">
        <div class="row hover-effects image-hover">
          <div class="col-md-12">
            <div class="image-box">
              <figure><img src="{{ asset('Frontend/img/images/pic1.jpg')}}" alt="" /></figure>
            </div>
          </div>
          <div class="col-md-12 center-div">
            <div class="image-box">
              <figure><img src="{{ asset('Frontend/img/images/pic2.jpg')}}" alt="" /></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid inner-color">
    <div class="container">
      <div class="section-title">
        <h2>Why Trusting Us</h2>
        <hr class="center">
        <p>leap into electronic typesetting, remaining essentially unchanged</p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/img1.jpg')}}" alt=""></a></figure>
            <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/cost.png')}}" alt=""></figure> </div>
            <div class="figure-caption">
              <h4>Financial Strategy</h4>
              <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 center-div">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/img3.jpg')}}" alt=""></a></figure>
            <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/deal.png')}}" alt=""></figure> </div>
            <div class="figure-caption">
              <h4>Tax Consultant</h4>
              <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/img2.jpg')}}" alt=""></a></figure>
            <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/document.png')}}" alt=""></figure> </div>
            <div class="figure-caption">
              <h4>Retirement</h4>
              <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container filterable-portfolio">
    <div class="section-title">
      <h2>Recent Projects</h2>
      <hr class="center">
      <p>leap into electronic typesetting, remaining essentially unchanged</p>
    </div>
    <ul class="nav nav-pills center-pills portfolio-filter">
      <li role="presentation" class="active"><a href="#" data-filter="*">All</a></li>
      <li role="presentation"><a href="#" data-filter=".consulting">Consulting</a></li>
      <li role="presentation"><a href="#" data-filter=".finance">Finance</a></li>
      <li role="presentation"><a href="#" data-filter=".strategy">Strategy</a></li>
    </ul>
    <div class="row portfolio-items">
      <figure class="portfolio-item col-md-4 consulting">
        <div class="magnific-img">
          <a class="image-popup-vertical-fit" href="img/images/gallery1.jpg">
            <img src="{{ asset('Frontend/img/images/gallery1.jpg')}}" alt="" />
          </a>
        </div>
      </figure>
      <figure class="portfolio-item col-md-4 finance">
        <div class="magnific-img">
          <a class="image-popup-vertical-fit" href="img/images/gallery2.jpg">
            <img src="{{ asset('Frontend/img/images/gallery2.jpg')}}" alt="" />
          </a>
        </div>
      </figure>
      <figure class="portfolio-item col-md-4 finance">
        <div class="magnific-img">
          <a class="image-popup-vertical-fit" href="img/images/gallery3.jpg">
            <img src="{{ asset('Frontend/img/images/gallery3.jpg')}}" alt="" />
          </a>
        </div>
      </figure>
      <figure class="portfolio-item col-md-4 consulting">
        <div class="magnific-img">
          <a class="image-popup-vertical-fit" href="img/images/gallery4.jpg">
            <img src="{{ asset('Frontend/img/images/gallery4.jpg')}}" alt="" />
          </a>
        </div>
      </figure>
      <figure class="portfolio-item col-md-4 strategy">
        <div class="magnific-img">
          <a class="image-popup-vertical-fit" href="img/images/gallery5.jpg">
            <img src="{{ asset('Frontend/img/images/gallery5.jpg')}}" alt="" />
          </a>
        </div>
      </figure>
      <figure class="portfolio-item col-md-4 design consulting">
        <div class="magnific-img">
          <a class="image-popup-vertical-fit" href="img/images/gallery6.jpg">
            <img src="{{ asset('Frontend/img/images/gallery6.jpg')}}" alt="" />
          </a>
        </div>
      </figure>
    </div>
  </div>

  <div class="container-fluid counter-parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="counter-statistics">
            <div class="counter">2999</div>
            <h5>DEVELOPED PROJECTS</h5>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="counter-statistics">
            <div class="counter">13111</div>
            <h5>HAPPY CUSTOMERS</h5>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="counter-statistics">
            <div class="counter">877</div>
            <h5>AWARDS</h5>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="counter-statistics">
            <div class="counter">2310</div>
            <h5>ASSOCIATED COMPANIES</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="testimonials-box">
      <div class="main-gallery">
        <div class="gallery-cell">
          <div class="testimonial-section">
            <div class="avatar"><img src="{{ asset('Frontend/img/images/avatar1.jpg')}}" alt=""></div>
            <h3 class="autor">Julie Belle</h3>
            <h6 class="testimonial-title">Profesional Corporate highly recommended!</h6>
            <p class="quote">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident."</p>
          </div>
        </div>
        <div class="gallery-cell">
          <div class="testimonial-section">
            <div class="avatar"><img src="{{ asset('Frontend/img/images/avatar5.jpg')}}" alt=""></div>
            <h3 class="autor">Joan Doe</h3>
            <h6 class="testimonial-title">Profesional Corporate highly recommended!</h6>
            <p class="quote">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident."</p>
          </div>
        </div>
        <div class="gallery-cell">
          <div class="testimonial-section">
            <div class="avatar"><img src="{{ asset('Frontend/img/images/avatar3.jpg')}}" alt=""></div>
            <h3 class="autor">Alex Norwick</h3>
            <h6 class="testimonial-title">Profesional Corporate highly recommended!</h6>
            <p class="quote">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident."</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section-title">
      <h2>Recent Posts</h2>
      <hr class="center">
      <p>leap into electronic typesetting, remaining essentially unchanged</p>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="front-blogs">
          <div class="thumb-pic">
            <figure class="post-prev-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/img4.jpg')}}" alt=""></a></figure>
            <div class="date-label">
              <h6>23 NOV. 2018</h6>
            </div>
          </div>
          <div class="post-caption">
            <h4><a href="#">Best financial entities of 2018</a></h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
            <h5><a href="#">READ MORE</a></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="front-blogs">
          <div class="thumb-pic">
            <figure class="post-prev-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/img5.jpg')}}" alt=""></a></figure>
            <div class="date-label">
              <h6>19 NOV. 2018</h6>
            </div>
          </div>
          <div class="post-caption">
            <h4><a href="#">Stocks making the biggest moves</a></h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
            <h5><a href="#">READ MORE</a></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="news-feed">
          <div class="feed-box">
            <figure class="feed-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/thumb1.jpg')}}" alt=""></a></figure>
            <div class="post-caption">
              <h5><a href="#">Bitcoin tumbles again, loses a quarter.</a></h5>
              <p>Nov 17 2018</p>
            </div>
          </div>
          <hr class="feed">
          <div class="feed-box">
            <figure class="feed-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/thumb2.jpg')}}" alt=""></a></figure>
            <div class="post-caption">
              <h5><a href="#">The Roth strategy we wish retirement.</a></h5>
              <p>Nov 12 2018</p>
            </div>
          </div>
          <hr class="feed">
          <div class="feed-box">
            <figure class="feed-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/thumb3.jpg')}}" alt=""></a></figure>
            <div class="post-caption">
              <h5><a href="#">Avoid making these 3 huge tax mistakes.</a></h5>
              <p>Nov 11 2018</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
