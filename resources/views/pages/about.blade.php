@extends('layouts.base')
@section('title')
Qui sommes-nous ?
@endsection
@section('content')
<div class="sections">
  <div class="container">
    <div class="pages-title">
      <h1>About Us</h1>
      <p>Home &nbsp; > &nbsp; About</p>
    </div>
  </div>
</div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="about">
          <h6>WE TAKE YOUR BUSINESS FURTHER</h6>
          <h2>Planning For The Future</h2>
          <hr class="left">
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, making this the first true generator on the Internet. It uses a dictionary.</p>
          <p>Generators on the Internet tend to repeat predefined chunks as necessary</p>
          <p><a class="btn btn-custom" href="#" role="button">LEARN MORE</a></p>
        </div>
      </div>
      <div class="col-lg-6"><figure class="about-pic"><img src="{{ asset('Frontend/img/images/img6.jpg')}}" alt=""></figure> </div>
    </div>
    <hr class="about">
    <div class="front-options about-services">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/money.png')}}" alt=""></figure></div>
          <h4>Consultation</h4>
          <p>Looked up one of the more obscure Latin.</p>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/saved.png')}}" alt=""></figure></div>
          <h4>Saving Adviser</h4>
          <p>Looked up one of the more obscure Latin.</p>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/grow.png')}}" alt=""></figure></div>
          <h4>Tax Adviser</h4>
          <p>Looked up one of the more obscure Latin.</p>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/loan.png')}}" alt=""></figure></div>
          <h4>Loan Adviser</h4>
          <p>Looked up one of the more obscure Latin.</p>
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

  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-4">
        <div class="our-team">
          <h6>Your satisfaction defines us</h6>
          <h2>WE FIND WAYS</h2>
          <p>Established fact that a reader will be distracted by the readable content of a page when looking many desktop publishing packages and web page.</p>
          <figure class="signature"><img src="{{ asset('Frontend/img/images/signature.png')}}" alt=""></figure>
        </div>
      </div>
      <div class="col-md-12 col-lg-8">
        <div class="row">
          <div class="team-slider responsive">
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/images/profile.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Michal Jones</h4>
                  <p>Finance Adviser</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/images/profile-2.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Lisa Smith</h4>
                  <p>Consulting Expert</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/images/profile-3.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Ronald Smith</h4>
                  <p>Insurance Adviser</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/images/profile-4.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Camile Jones</h4>
                  <p>Finance Adviser</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/images/profile-5.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Lisa Smith</h4>
                  <p>Tax Expert</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/images/profile-6.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Sara Mitchel</h4>
                  <p>Consulting Adviser</p>
                </div>
              </div>
            </div>
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
