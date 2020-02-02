@extends('layouts.base')
@section('title')
Nos services
@endsection
@section('content')
<div class="sections">
  <div class="container">
    <div class="pages-title">
      <h1>Fourniture de Matériels informatiques</h1>
      <p>Accueil &nbsp; > &nbsp; Nos Services &nbsp; > &nbsp; Fourniture de Matériels informatiques</p>
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
        <h2>Fourniture de Matériels informatiques</h2>
        <hr class="left">
        <p>
          J-BlackMotionDesign vous propose toutes les nouvelles technologies des matériels informatiques avec les meilleur prix sur le marché Togolais.</p>
          <p>
            PC, portables, serveurs, périphériques, logiciels, consommables, tablettes, accessoires et multimédia. Depuis notre création, notre équipe de spécialistes met à votre disposition ses connaissances et son savoir-faire, afin de mieux répondre à vos besoins. Nous cherchons vos produits à un prix compétitifs, nous mettons à la disposition de nos clients toutes les marques disponibles au TOGO avec la possibilité d’importation de l’étranger s’il est nécessaire.
          </p>
          <figure class="service-pic"><img src="{{ asset('Frontend/img/materiels2.jpg')}}" alt=""></figure>
        </div>
      </div>
    </div>
  </div>

  @endsection
