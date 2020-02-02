@extends('layouts.base')
@section('title')
Nos services
@endsection
@section('content')
<div class="sections">
  <div class="container">
    <div class="pages-title">
      <h1>Conception d'Applications</h1>
      <p>Accueil &nbsp; > &nbsp; Nos Services &nbsp; > &nbsp; Conception d'Applications</p>
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
        <h2>Conception d'Applications</h2>
        <hr class="left">
        <p>
          J-BlackMotionDesign vous accompagne dans la spécification des besoins, audit, optimisation, création de site internet sur mesure, migration, refonte.</p>
          <p>
            Nos équipes développent des  solutions web pour répondre à vos besoins et assurer une performance durable de votre projet.Ainsi, ils apportent leur expertise de la conception à la réalisation et du suivi à la maintenance.
          </p>
          <p>
            Nous vous proposons également la conception d’application mobile et tablette, écran tactile, vidéo interactive, animation, audio, QR code, réalité augmentée, jeu… Nos équipes développement des applications sur mesure, natives ou hybrides, sur tablette, mobile et wearable.
          </p>
          <figure class="service-pic"><img src="{{ asset('Frontend/img/site2.jpg')}}" alt=""></figure>
          <div class="tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="siteweb-tab" data-toggle="tab" href="#siteweb" role="tab" aria-controls="home" aria-selected="true">Sites Web</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="appli-tab" data-toggle="tab" href="#appli" role="tab" aria-controls="profile" aria-selected="false">Applications mobiles</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="siteweb" role="tabpanel" aria-labelledby="siteweb-tab">
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
              <div class="tab-pane fade" id="appli" role="tabpanel" aria-labelledby="appli-tab">
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
