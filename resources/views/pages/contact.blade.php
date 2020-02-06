@extends('layouts.base')
@section('title')
Contact
@endsection
@section('content')
<div class="sections-contact" style="background-image: url('/Frontend/img/contact.jpg');">
  <div class="container">
    <div class="pages-title">
      <h1>Contact</h1>
      <p>Accueil &nbsp; > &nbsp; Contact</p>
    </div>
  </div>
</div>
<section>
  <div class="container contact-box">
    <div class="row">
      <div class="col-lg-5 contact-left">
        <div class="contact-information">
          <h2>Nous joindre</h2>
          <p>Laissez-nous un message et nous vous répondrons dans un délai de 24heures.</p>
          <hr class="contact">
          <p>
            Lundi - Vendredi : 8h à 19h<br>
            Samedi : 8h à 16h
          </p>
          <hr class="contact">
          <p class="address">Agoè-assiyéyé à côté de l'église des Assembleés de Dieu 13 BP 459.</p>
          <p class="phone">+228 70522340 - +228 97984224</p>
          <p class="email">info@j-blackmotiondesign.com</p>
          <hr class="contact">
          <div class="social-contact"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
          <div class="social-contact"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
          <div class="social-contact"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
        </div>
      </div>
      <div class="col-lg-7 contact-right">
        <div class="contact-form">
          <form method="post" action="">
            <div class="messages"></div>
            <div class="controls">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input  type="text" name="name" class="form-control custome-form" placeholder="Nom Complet" required="required">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control custome-form" placeholder="Votre adresse mail" required="required">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input  type="text" name="name" class="form-control custome-form" placeholder="Objet du Message" required="required">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control custome-form" placeholder="Votre message" rows="3" required="required"></textarea>
                  </div>
                </div>
              </div>
              <div class="btn-send"><p><input type="submit" class="btn btn-custom btn-custom-small" value="ENOYER LE MESSAGE"></p></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top:5%;">
      <div id="map" style="width:100%;height:400px;"></div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">
var map = new L.Map('map', {
  center: new L.LatLng(6.131944, 1.222778),
  zoom: 8
});
tiles2 =  new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{maxZoom: 29,});
map.addLayer(tiles2);
var point = L.marker([6.183238, 1.240606]).bindPopup('<b>J-BlackMotionDesign</b>');
map.addLayer(point);
</script>
    @endsection
