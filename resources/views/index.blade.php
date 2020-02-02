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
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-img-1"></div>
        <div class="carousel-caption">
          <h1 class="animated fadeInLeft">J-BlackMotionDesign</h1>
          <h5 class="animated fadeInUp">Start-up dans le domaine du Digital.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img-2"></div>
        <div class="carousel-caption">
          <!--<h1 class="animated fadeInLeft">Planning For The Future.</h1>-->
          <h1 class="animated fadeInUp">Nous vous proposons des solutions créatives avec un Design attirant</h1>
          <div class="slider-btn">
            <div class="animated inner-btn fadeInUp"><a href="/services" class="btn btn-slider">LIRE PLUS</a></div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img-3"></div>
        <div class="carousel-caption">
          <h1 class="animated fadeInLeft">Design et Graphisme 2D & 3D</h1>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img-4"></div>
        <div class="carousel-caption">
          <h1 class="animated fadeInRight">Conception de sites Web et Applications mobiles</h1>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-img-5"></div>
        <div class="carousel-caption">
          <h1 class="animated fadeInTop">Fournitures de Matériels informatiques</h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="front-section">
          <h6>Votre satisfaction, notre priorité</h6>
          <h2>J-BlackMotionDesign</h2>
          <hr class="left">
          <p>J-BlackMotionDesign est une startup dans le domaine informatique, créé le 01 Janvier 2020.
             L’entreprise se spécialise dans la conception graphique, graphisme, photographie, production vidéo professionnelle
             et les solutions Internet avancées telles que la conception de sites Internet
              et d’applications mobiles, nous sommes aussi dans la fourniture de matériels de création graphique et informatique.</p>

          <div class="front-options">
            <div class="row">
              <div class="col-md-6">
                <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/money.png')}}" alt=""></figure></div>
                <h4>Consultation</h4>
                <p>Tout projet passe par une étape d'écoute des besoins du client!</p>
              </div>
              <div class="col-md-6">
                <div class="border-icon"><figure class="icon-center"><img src="{{ asset('Frontend/img/master/grow.png')}}" alt=""></figure></div>
                <h4>Analyse et Conception</h4>
                <p>Nous analysons tous les besoins du client et passons ensuite à la conception</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 front-left">
        <div class="row hover-effects image-hover" style="margin-top:15%;">
          <div class="col-md-12 center-div">
            <div class="image-box">
              <figure><img src="{{ asset('Frontend/img/projets1.jpg')}}" alt="" /></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid inner-color">
    <div class="container">
      <div class="section-title">
          <h2>Pourquoi nous faire confiance?</h2>
        <hr class="center">
        <p>Nous sommes très efficace et discrèt dans notre travail</p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/images/img1.jpg')}}" alt=""></a></figure>
            <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/cost.png')}}" alt=""></figure> </div>
            <div class="figure-caption">
              <h4>Échanges minitieuses avec le Client</h4>
              <p>Nous échangeons avec le client pour satisfaire ce dernier</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 center-div">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/finance.jpg')}}" alt=""></a></figure>
            <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/deal.png')}}" alt=""></figure> </div>
            <div class="figure-caption">
              <h4>Proposition financière souple</h4>
              <p>Nos fournissons un service de qualité et moins chèr</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{ asset('Frontend/img/maintenance.png')}}" alt=""></a></figure>
            <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{ asset('Frontend/img/master/document.png')}}" alt=""></figure> </div>
            <div class="figure-caption">
              <h4>Assistance et Maintenance</h4>
              <p>Nous assistons le client si nécessaire après le service.</p>
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
            <div class="counter">50</div>
            <h5>CRÉATION GRAPHIQUE</h5>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="counter-statistics">
            <div class="counter">6</div>
            <h5>SITES WEB CONÇUS</h5>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="counter-statistics">
            <div class="counter">5</div>
            <h5>PROJETS EN COURS</h5>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="counter-statistics">
            <div class="counter">40</div>
            <h5>CLIENTS SATISFAITS</h5>
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
            <h3 class="autor">Jerôme DJANTA</h3>
            <h6 class="testimonial-title">Graphique fortement recommandé!</h6>
            <p class="quote">"J'ai été très ravi d'avoir collaboré sur un projet avec <b>J-BlackMotionDesign</b>.Cette société respecte toutes les étapes pour la bonne exécution d'un projet.Je vous le recommande! Merci"</p>
          </div>
        </div>
        <div class="gallery-cell">
          <div class="testimonial-section">
            <div class="avatar"><img src="{{ asset('Frontend/img/images/avatar5.jpg')}}" alt=""></div>
            <h3 class="autor">Joan Doe</h3>
            <h6 class="testimonial-title">DG de Metamorphoo Consulting</h6>
            <p class="quote">"<b>J-BlackMotionDesign</b> est une structure qui a une équipe très compétente! Je leur ai demandé de concevoir un site pour moi et j'ai été très satisfait du travail rendu!"</p>
          </div>
        </div>
        <div class="gallery-cell">
          <div class="testimonial-section">
            <div class="avatar"><img src="{{ asset('Frontend/img/images/avatar3.jpg')}}" alt=""></div>
            <h3 class="autor">Omar Farouk KOUGBADA</h3>
            <h6 class="testimonial-title">Développeur d'applications et CEO de KOFCORPORATION</h6>
            <p class="quote">"Ah, <b>J-BlackMotionDesign</b>, une Startup digitale pas comme toutes les autres! Cette société sait vraiment faire les choses bien et travailler avec eux est une grande aventure pour moi!"</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection
