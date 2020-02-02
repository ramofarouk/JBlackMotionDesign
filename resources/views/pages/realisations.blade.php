@extends('layouts.base')
@section('title')
Nos réalisations
@endsection
@section('content')
<div class="sections">
  <div class="container">
    <div class="pages-title">
      <h1>Finnexia Services</h1>
      <p>Home &nbsp; > &nbsp; Projects</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <aside class="services">
        <div class="inner-service-block">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="business-consulting.html">Business Consulting</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="investment-advisor.html">Investment Advisor</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="tax-consulting.html">Tax Consultant</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="finance-consulting.html">Finance Consultant</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="insurence-ajuster.html">Insurence Ajuster</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="retirement-advisor.html">Retiretment Advisor</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
          </ul>
        </div>
        <div class="inner-sidebar">
          <h5>Recent News</h5>
          <hr class="left">
          <div class="media-list">
            <div class="media-post">
              <figure class="media-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/thumb1.jpg')}}" alt=""></a></figure>
              <div class="media-caption">
                <h5><a href="#">Best Finance Advise</a></h5>
                <p>6 Nov 2018</p>
              </div>
            </div>
            <div class="media-post">
              <figure class="media-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/thumb2.jpg')}}" alt=""></a></figure>
              <div class="media-caption">
                <h5><a href="#">Best finance films.</a></h5>
                <p>18 Oct 2018</p>
              </div>
            </div>
            <div class="media-post">
              <figure class="media-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/thumb3.jpg')}}" alt=""></a></figure>
              <div class="media-caption">
                <h5><a href="#">Bitcoin tumbles again.</a></h5>
                <p>18 Sep 2018</p>
              </div>
            </div>
            <div class="media-post">
              <figure class="media-thumb"><a href="#"><img src="{{ asset('Frontend/img/images/thumb1.jpg')}}" alt=""></a></figure>
              <div class="media-caption">
                <h5><a href="#">The Roth strategy.</a></h5>
                <p>12 Sep 2018</p>
              </div>
            </div>
          </div>
        </div>
        <div class="inner-service-block">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp; Download PDF</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="#"><i class="fa fa-file-o" aria-hidden="true"></i> &nbsp; Download Doc</a>
            </li>
          </ul>
        </div>
      </aside>
    </div>
    <div class="col-lg-9">
      <div class="service-description">
        <h2>Projects</h2>
        <hr class="left">
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, making this the first true generator on the Internet. It uses a dictionary. Generators on the Internet tend to repeat predefined chunks as necessary</p>

        <p>Their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. But the majority have suffered alteration in some form, by injected humour </p>

        <figure class="service-pic"><img src="{{ asset('Frontend/img/images/img10.jpg')}}" alt=""></figure>
        <div class="chart-container">
          <h3>Income vs Outcome</h3>
          <p>Their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. But the majority have suffered alteration in some form, by injected humour.</p>
          <div id="area-chart" ></div>
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

@endsection
