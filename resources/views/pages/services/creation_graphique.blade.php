@extends('layouts.base')
@section('title')
Nos services
@endsection
@section('content')
<div class="sections">
  <div class="container">
    <div class="pages-title">
      <h1>Création Graphique</h1>
      <p>Accueil &nbsp; > &nbsp; Nos Services &nbsp; > &nbsp; Création Graphique</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <aside class="services">
        <div class="inner-service-block">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center" style="{!! (Request::is('services/creation-graphique') ? 'background-color:#059fff;' : '') !!}">
              <a href="/services/creation-graphique" style="{!! (Request::is('services/creation-graphique') ? 'color:white;' : '#14213D') !!}">Création Graphique</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="{!! (Request::is('services/conception-applications') ? 'background-color:#059fff;' : '') !!}">
              <a href="/services/conception-applications" style="{!! (Request::is('services/conception-applications') ? 'color:white;' : '#14213D') !!}">Conception d'Applications</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="{!! (Request::is('services/fournitures-materiels') ? 'background-color:#059fff;' : '') !!}">
              <a href="/services/fournitures-materiels" style="{!! (Request::is('services/fournitures-materiels') ? 'color:white;' : '#14213D') !!}">Fournitures de matériels informatiques</a>
              <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </li>
          </ul>
        </div>
        <div class="inner-service-block">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="/contact"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Contactez-nous</a>
            </li>
          </ul>
        </div>
      </aside>
    </div>
    <div class="col-lg-9">
      <div class="service-description">
        <h2>Création Graphique</h2>
        <hr class="left">
        <p>
          J-BlackMotionDesign vous propose la création et la refonte d’identité de marque, direction artistique, graphisme tous supports, packaging.</p>
          <p>
            Nous avons à notre disposition une équipe de création qui vous orientera et réalisera vos créations graphiques en s’attachant à concevoir une cohérence cross média de vos messages.
          </p>
          <figure class="service-pic"><img src="{{ asset('Frontend/img/graphique.jpg')}}" alt=""></figure>
          <div class="tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="troisd-tab" data-toggle="tab" href="#troisd" role="tab" aria-controls="home" aria-selected="true">Réalisations 3D</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="deuxd-tab" data-toggle="tab" href="#deuxd" role="tab" aria-controls="profile" aria-selected="false">Réalisations 2D</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="troisd" role="tabpanel" aria-labelledby="troisd-tab">
                <div class="row">
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-1.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-2.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-3.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-4.jpg')}}" alt=""></figure>
                  </div>
                </div>
                <div class="row" style="margin-top:2%;">
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-1.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-2.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-3.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-4.jpg')}}" alt=""></figure>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="deuxd" role="tabpanel" aria-labelledby="deuxd-tab">
                <div class="row">
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-5.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-6.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-2.jpg')}}" alt=""></figure>
                  </div>
                  <div class="col-lg-3">
                    <figure class="thumbnail-tab"><img src="{{ asset('Frontend/img/images/service-2.jpg')}}" alt=""></figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
