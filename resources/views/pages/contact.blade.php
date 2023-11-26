@extends('layout.app')

@section('contact')
      <!-- Start Contact Seciton -->
  <section id="contact" class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">CONTACT ME</h4>
        <h2 class="st-section-heading-subtitle">CONTACT ME</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Contact Container -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="st-contact-title">Just say Hello</h3>
          <div id="st-alert"></div>
          <form action="#" method="POST" class="st-contact-form" id="contact-form">
            <div class="st-form-field">
              <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="st-form-field">
              <input type="text" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="st-form-field">
              <input type="text" id="subject" name="subject" placeholder="Your Subject" required>
            </div>
            <div class="st-form-field">
              <textarea cols="30" rows="10" id="msg" name="msg" placeholder="Your Message" required></textarea>
            </div>
            <button class="st-btn st-style1 st-color1" type="submit" id="submit" name="submit">Send message</button>
          </form>
        </div>
        <div class="st-height-b0 st-height-lg-b30"></div>

        <div class="col-lg-6">
          <div class="st-height-b0 st-height-lg-b40"></div>
          <h3 class="st-contact-title">Contact Info</h3>
          <div class="st-contact-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla tincidunt id faucibus sed
            suscipit feugiat.
          </div>
          <div class="st-contact-info-wrap">
            <div class="st-single-contact-info">
              <i class="fas fa-envelope"></i>
              <div class="st-single-info-details">
                <h4>Email</h4>
                <a href="#">devis@example.com</a>
                <a href="#">info@support.com</a>
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-phone-alt"></i>
              <div class="st-single-info-details">
                <h4>Phone</h4>
                <span>+1 876-369-9009</span>
                <span>+1 213-519-1786</span>
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-map-marker-alt"></i>
              <div class="st-single-info-details">
                <h4>Address</h4>
                <span>2661 High Meadow Lane Bear Creek, <br>Olancha, KY 93544</span>
              </div>
            </div>
            <div class="st-social-info">
              <div class="st-social-text">Visite my social profile and get connected</div>
              <div class="st-social-link">
                <a href="#" class="st-social-btn active">
                  <span class="st-social-icon"><i class="fab fa-dribbble"></i></span>
                  <span class="st-icon-name">Dribbble</span>
                </a>
                <a href="#" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-behance"></i></span>
                  <span class="st-icon-name">Behance</span>
                </a>
                <a href="#" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-twitter"></i></span>
                  <span class="st-icon-name">Twitter</span>
                </a>
                <a href="#" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                  <span class="st-icon-name">LinkedIn</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </section>
  <!-- End Contact Seciton -->
@endsection