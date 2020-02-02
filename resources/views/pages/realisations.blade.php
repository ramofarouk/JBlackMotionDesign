@extends('layouts.base')
@section('title')
Nos réalisations
@endsection
@section('content')
<div class="sections" style="background-image: url('/Frontend/img/projets1.jpg');">
  <div class="container">
    <div class="pages-title">
      <h1>J-BlackMotionDesign</h1>
      <p>Accueil &nbsp; > &nbsp; Nos réalisations</p>
    </div>
  </div>
</div>
<div class="container filterable-portfolio">
  <div class="section-title">
    <h2>Nos réalisations</h2>
    <hr class="center">
    <p>Découvrez quelques unes de nos réalisations!</p>
  </div>
  <ul class="nav nav-pills center-pills portfolio-filter">
    <li role="presentation" class="active"><a href="#" data-filter="*">Tous</a></li>
    <li role="presentation"><a href="#" data-filter=".troisd">Création Graphique 3D</a></li>
    <li role="presentation"><a href="#" data-filter=".deuxd">Création Graphique 2D</a></li>
    <li role="presentation"><a href="#" data-filter=".logos">Logos</a></li>
    <li role="presentation"><a href="#" data-filter=".sitesweb">Sites Web</a></li>
    <li role="presentation"><a href="#" data-filter=".applis">Applications Mobiles</a></li>
  </ul>
  <div class="row portfolio-items">
    <figure class="portfolio-item col-md-4 troisd">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/3d/1.jpg">
          <img src="{{ asset('Frontend/img/realisations/3d/1.jpg')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-4 troisd">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/3d/2.jpg">
          <img src="{{ asset('Frontend/img/realisations/3d/2.jpg')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-4 deuxd">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/2d/1.jpg">
          <img src="{{ asset('Frontend/img/realisations/2d/1.jpg')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-4 deuxd">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/2d/2.jpg">
          <img src="{{ asset('Frontend/img/realisations/2d/2.jpg')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-4 logos">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/logos/1.png">
          <img src="{{ asset('Frontend/img/realisations/logos/1.png')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-4 logos">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/logos/2.jpg">
          <img src="{{ asset('Frontend/img/realisations/logos/2.jpg')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-6 sitesweb">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/sitesweb/1.png">
          <img src="{{ asset('Frontend/img/realisations/sitesweb/1.png')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-6 sitesweb">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/sitesweb/2.png">
          <img src="{{ asset('Frontend/img/realisations/sitesweb/2.png')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-4 applis">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/applis/1.png">
          <img src="{{ asset('Frontend/img/realisations/applis/1.png')}}" alt="" />
        </a>
      </div>
    </figure>
    <figure class="portfolio-item col-md-4 applis">
      <div class="magnific-img">
        <a class="image-popup-vertical-fit" href="/Frontend/img/realisations/applis/2.jpg">
          <img src="{{ asset('Frontend/img/realisations/applis/2.jpg')}}" alt="" />
        </a>
      </div>
    </figure>
  </div>
</div>
@endsection
