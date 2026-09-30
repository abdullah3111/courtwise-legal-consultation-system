<?php
session_start();
include 'php/session_check.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>CourtWise &mdash; Contact</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images\court.png" type="image/x-icon">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
    
  
  <?php
  include "php/navbar.php"
  ?>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/contact\ us\ pic.jpeg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section">
    <div class="container">
      <div class="row">
  
        <div class="col-md-12 col-lg-7 mb-5">
  
  
  
        <form action="process-form.php" method="POST" class="contact-form">
    <div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label class="font-weight-bold" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <label class="font-weight-bold" for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Subject">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12">
            <label class="font-weight-bold" for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
        </div>
    </div>
</form>

        </div>
  
        <div class="col-lg-4 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Contact Info</h3>
            <p class="mb-0 font-weight-bold text-black">Address</p>
            <p class="mb-4 text-black">Sector Z6 Gulshan-e-Maymar, Karachi, Sindh, Pakistan</p>
  
            <p class="mb-0 font-weight-bold text-black">Phone</p>
            <p class="mb-4"><a href="#">+92 314 8250 487</a></p>
  
            <p class="mb-0 font-weight-bold text-black">Email Address</p>
            <p class="mb-0"><a href="#">CourtWise@gmail.com</a></p>
  
          </div>
  
          
        </div>
      </div>
    </div>
  </div>
    
    

    


   

  <div class="site-section section-6">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto">
          <h2 class="mb-5">Happy <span class="text-primary">Clients Says</span></h2>
          <div class="owl-carousel nonloop-block-4 testimonial-slider">
            <div class="testimony-1">
              <div class="d-flex align-items-center mb-4">
                <img src="images/clients rate.jpg" alt="Image" class="vcard mr-4">
                <div>
                  <h3>Ely, JD</h3>
                  <p>Lawyer <br> 60,318 Satisfied customers</p>
                </div>
              </div>
              <blockquote>
                <p>Expert in family, criminal, consumer protection, and business law!</p>
              </blockquote>
            </div>

            <div class="testimony-1">
              <div class="d-flex align-items-center mb-4">
                <img src="images/clients rate 2.jpg" alt="Image" class="vcard mr-4">
                <div>
                  <h3>LawEducator</h3>
                  <p>Attorney <br> 54,249 Satisfied customers</p>
                </div>
              </div>
              <blockquote>
                <p>JA Mentor -Attorney Labor/employment, corporate, sports law, admiralty/maritime and civil rights law</p>
              </blockquote>
            </div>


            <div class="testimony-1">
              <div class="d-flex align-items-center mb-4">
                <img src="images/clients rate 3.jpg" alt="Image" class="vcard mr-4">
                <div>
                  <h3>Infolawyer</h3>
                  <p>Attorney <br> 37,678 Satisfied customers

                  </p>
                </div>
              </div>
              <blockquote>
                <p>Licensed attorney helping individuals and businesses</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          
          <h2 class="mb-5">Frequently <span class="text-primary">Ask Questions</span></h2>

          <div class="border p-3 rounded mb-2">
            <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="true" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">Law assistance to my business</a>

            <div class="collapse show" id="collapse-1">
              <div class="pt-2">
                <p class="mb-0">
                  Our law firm offers comprehensive legal assistance to businesses, covering contract negotiations, compliance, intellectual property protection, dispute resolution, and risk management, ensuring your business operates smoothly and legally.
                </p>
              </div>
            </div>
          </div>

          <div class="border p-3 rounded mb-2">
            <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">The newest part of my legislation</a>

            <div class="collapse" id="collapse-4">
              <div class="pt-2">
                <p class="mb-0">
                  The newest part of your legislation focuses on updating legal frameworks to address emerging issues, such as digital privacy, environmental protection, or business regulation. It aims to enhance compliance, provide clarity, and ensure better enforcement.</p>
              </div>
            </div>
          </div>

          <div class="border p-3 rounded mb-2">
            <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Are you an international law?</a>

            <div class="collapse" id="collapse-2">
              <div class="pt-2">
                <p class="mb-0">Yes, we are an international law firm, offering expert legal services across multiple jurisdictions. Our team is equipped to handle cross-border legal issues, providing tailored solutions to clients worldwide.</p>
              </div>
            </div>
          </div>

          <div class="border p-3 rounded mb-2">
            <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">How the system works?</a>

            <div class="collapse" id="collapse-3">
              <div class="pt-2">
                <p class="mb-0">Our system works by providing a structured approach to legal services: first, we assess your needs, then offer tailored advice and strategies. We guide you through each step, ensuring efficient resolution and transparent communication.</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>





  

  <div class="bg-primary" data-aos="fade">
    <div class="container">
      <div class="row">
        <a href="https://www.facebook.com/" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
        <a href="https://www.twitter.com/" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
        <a href="https://www.instagram.com/" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
        <a href="https://www.linkedin.com/" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
        <a href="https://www.pinterest.com/" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
        <a href="https://www.youtube.com/" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
      </div>
    </div>
  </div>

  <?php
 include "php/footer.php";
 ?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>