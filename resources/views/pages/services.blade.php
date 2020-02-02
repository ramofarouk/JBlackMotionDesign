@extends('layouts.base')
@section('title')
Nos services
@endsection
@section('content')
<div class="sections">
  <div class="container">
    <div class="pages-title">
      <h1>Services</h1>
      <p>Home &nbsp; > &nbsp; Services</p>
    </div>
  </div>
</div>

<section>

  <div class="container">
    <div class="section-title">
      <h2>Finance Solutions</h2>
      <hr class="center">
      <p>leap into electronic typesetting, remaining essentially unchanged</p>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 all-services">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/service-1.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/cost.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4>Financial Strategy</h4>
            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 all-services">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/service-2.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/deal.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4>Tax Consultant</h4>
            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 all-services responsive-center">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/service-3.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/document.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4>Retirement</h4>
            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 all-services bottom-box responsive-center">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/service-4.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/loan.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4>Personal Loans</h4>
            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 all-services bottom-box">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/service-5.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/saved.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4>Saving Adviser</h4>
            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 all-services bottom-box last-box">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/service-6.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/grow.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4>Finance Advisor</h4>
            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
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
</section>
@endsection
