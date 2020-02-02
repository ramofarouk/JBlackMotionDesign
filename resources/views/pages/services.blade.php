@extends('layouts.base')
@section('title')
Nos services
@endsection
@section('content')
<div class="sections" style="background-image: url('/Frontend/img/services.jpg');">
  <div class="container">
    <div class="pages-title">
      <h1>Nos Services</h1>
      <p>Accueil &nbsp; > &nbsp; Nos Services</p>
    </div>
  </div>
</div>

<section>

  <div class="container">
    <div class="section-title">
      <h2>Nos Services</h2>
      <hr class="center">
      <p>J-BlackMotionDesign vous propose de multiples services sur mésure à savoir:</p>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 all-services">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="/services/creation-graphique"><img src="{{ asset('Frontend/img/graphique.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/cost.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4><a style="color:#059fff;" href="/services/creation-graphique">Création Graphique</a></h4>
            <p>Design 3D & 2D, Conception logo, Conception brochure corporative et pochette, Conception dépliant et feuillet, Conception affiche publicitaire…</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 all-services">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="/services/conception-applications"><img src="{{ asset('Frontend/img/site2.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/deal.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4><a style="color:#059fff;" href="/services/conception-applications">Conception d'Applications</a></h4>
            <p>Conception de site Web vitrine pour la visibilté de votre société, e-Commerce, Applications mobiles etc...</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 all-services responsive-center">
        <div class="front-thumbnail">
          <figure class="box-pic"><a href="/services/fourniture-materiels"><img src="{{ asset('Frontend/img/materiels.jpg')}}" alt=""></a></figure>
          <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/document.png')}}" alt=""></figure> </div>
          <div class="figure-caption">
            <h4><a  style="color:#059fff;" href="/services/fourniture-materiels">Fourniture de Matériels Informatiques</a></h4>
            <p>Fourniture de matériels pour la création graphique, d'impressions, informatique et autres...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
