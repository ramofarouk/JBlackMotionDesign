@extends('layouts.base')
@section('title')
Qui sommes-nous ?
@endsection
@section('content')
<div class="sections" style="background-image: url('/Frontend/img/about.jpg');">
  <div class="container">
    <div class="pages-title">
      <h1>Qui sommes-nous ?</h1>
      <p>Accueil &nbsp; > &nbsp; Qui sommes-nous ?</p>
    </div>
  </div>
</div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="about">
          <h6>Votre satisfaction, notre priorité</h6>
          <h2>J-BlackMotionDesign</h2>
          <hr class="left">
          <p>J-BlackMotionDesign est une startup dans le domaine informatique, créé le 01 Janvier 2020.</p>
          <p>
             L’entreprise se spécialise dans la conception graphique, graphisme, photographie, production vidéo professionnelle
             et les solutions Internet avancées telles que la conception de sites Internet
              et d’applications mobiles, nous sommes aussi dans la fourniture de matériels de création graphique et informatique.</p>
          <p><a class="btn btn-custom" href="/contact" role="button">CONTACTEZ-NOUS</a></p>
        </div>
      </div>
      <div class="col-lg-6"><figure class="about-pic"><img src="{{ asset('Frontend/img/projets1.jpg')}}" alt=""></figure> </div>
    </div>
    <hr class="about">
    <div class="front-options about-services">
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

  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-4">
        <div class="our-team">
          <h2>NOTRE ÉQUIPE</h2>
          <p>J-BlackMotionDesign dispose d’une équipe compétente, professionnelle et dynamique à votre service</p>
        </div>
      </div>
      <div class="col-md-12 col-lg-8">
        <div class="row">
          <div class="team-slider responsive">
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/dg1.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Victor YEDENA</h4>
                  <p>Directeur Général</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/dg1.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Victor YEDENA</h4>
                  <p>Directeur Général</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/dg1.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Victor YEDENA</h4>
                  <p>Directeur Général</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/dg1.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Victor YEDENA</h4>
                  <p>Directeur Général</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-card-3">
                <figure class="team-photo"><img src="{{ asset('Frontend/img/dg1.jpg')}}" alt=""></figure>
                <div class="caption">
                  <h4>Victor YEDENA</h4>
                  <p>Directeur Général</p>
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
