@extends('layouts.base')
@section('title')
Contact
@endsection
@section('content')
<div class="sections-contact">
  <div class="maps"><iframe src="https://snazzymaps.com/embed/116270" width="100%" height="400px" style="border:none;"></iframe></div>
  <div class="container">
    <div class="pages-title">
      <h1>Contact</h1>
      <p>Home &nbsp; > &nbsp; Contact</p>
    </div>
  </div>
</div>
<section>
  <div class="container contact-box">
    <div class="row">
      <div class="col-lg-5 contact-left">
        <div class="contact-information">
          <h2>Get in Touch</h2>
          <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model.</p>
          <hr class="contact">
          <p class="address">8273 NW 59th ST Miami, Florida.</p>
          <p class="phone">+ 0511 0000 3322 22</p>
          <p class="email">info@finnexia.com</p>
          <hr class="contact">
          <div class="social-contact"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
          <div class="social-contact"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
          <div class="social-contact"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
          <div class="social-contact"><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></div>
        </div>
      </div>
      <div class="col-lg-7 contact-right">
        <div class="contact-form">
          <form id="contact-form" method="post" action="http://themesquality.com/templates/finnexia/contact.php">
            <div class="messages"></div>
            <div class="controls">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="form_name" type="text" name="name" class="form-control custome-form" placeholder="Name" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="form_email" type="email" name="email" class="form-control custome-form" placeholder="Email address" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="form_message" name="message" class="form-control custome-form" placeholder="Your message" rows="3" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="btn-send"><p><input type="submit" class="btn btn-custom btn-custom-small" value="SEND MESSAGE"></p></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
