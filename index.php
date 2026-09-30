<?php
session_start();
include 'php/session_check.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CourtWise &mdash; Home</title>
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

    <link rel="stylesheet" href="./css/style.css">
    
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
    
    <div class="site-blocks-cover overlay" style="background-image: url('images/mainpic.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">We Fight For Justice</h1>
            <p class="mb-5">Find the Right Lawyer
              for Your Legal Issue!
              <br>
              Fast, Free and Confidential.</p>
            <p><a href="#dossy" class="btn btn-primary px-4 py-3">Get Started</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div id="dossy" class="dosy">
    <h1>Find Lawyers :</h1>
    <form method="POST" action="php/search.php" onsubmit="return validateForm()">
      Location:
      <select name="location" id="locationSelect">
          <option value="">Select Location</option>
          <option value="Karachi">Karachi</option>
          <option value="Lahore">Lahore</option>
          <option value="Islamabad">Islamabad</option>
          <option value="Rawalpindi">Rawalpindi</option>
          <option value="Peshawar">Peshawar</option>
          <option value="Quetta">Quetta</option>
          <option value="Faisalabad">Faisalabad</option>
          <option value="Multan">Multan</option>
          <option value="Gujranwala">Gujranwala</option>
          <option value="Sialkot">Sialkot</option>
          <option value="Bahawalpur">Bahawalpur</option>
          <option value="Sukkur">Sukkur</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Mardan">Mardan</option>
          <option value="Sargodha">Sargodha</option>
          <option value="Murree">Murree</option>
      </select>

      Service Type:
      <select name="service_type">
          <option value="criminal">Criminal</option>
          <option value="divorce">Divorce</option>
          <option value="affidavit">Affidavit</option>
          <option value="civil">Civil</option>
      </select>

      <button type="submit">Search</button>
  </form>

  </div>
    <div class="site-section section-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-md-4">
            <img src="images/lawyer background.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4">
            <div class="px-lg-3">
              <p class="dropcap">Our law firm is known for its dedication to providing top-notch legal services across a variety of practice areas, affidavit law, including corporate law, criminal defense, family law, and personal injury.</p>
              <p>Led by highly experienced attorneys, we offer strategic advice, personalized attention, and effective representation to ensure the best outcomes for our clients!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <p>With years of proven success, our team has built a strong reputation for delivering results and maintaining ethical standards. Client feedback is overwhelmingly positive, with many praising our commitment, responsiveness, and professional expertise!</p>
            <p>We are proud of our long track record of satisfied clients who trust us with their most important legal matters.</p>
            <!-- <blockquote class="blockquote">
              <p>We're committed to success &amp; genuine provider of all types of legal services</p>
            </blockquote> -->
          </div>
        </div>
      </div>
    </div>


    <div class="section-2">
      <div class="container">
        <div class="row no-gutters align-items-stretch align-items-center">
          <div class="col-lg-3 section-title">
            <div class="service-1-title h-100">
              <h2 class="text-white">Featured Practice Area</h2>
              <p>Refers to a specific area of law that a law firm or attorney highlights as a key focus or specialty.</p>
              <p><a href="practice-single.php" class="more">View All</a></p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-1 first h-100" style="background-image: url('images/img_1.jpg')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-balance"></span>
                </span>
                <h2>Business Law</h2>
                <p>Business law concerns the establishment of companies and their legal operation.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-1 h-100" style="background-image: url('images/img_2.jpg')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-law"></span>
                </span>
                <h2>Criminal Law</h2>
                <p>Criminal law relates to fundamental legal issues and the personal liberties of citizens.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-1 h-100" style="background-image: url('images/img_3.jpg')">
              <div class="service-1-contents">
                <span class="wrap-icon">
                  <span class="flaticon-courthouse"></span>
                </span>
                <h2>Tax Law</h2>
                <p>Lawyers in this area primarily work to help clients reduce tax liabilities. Others ensure people adhere to local, state, federal and international tax laws.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section section-3">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-6 section-title text-center">
            <h2>Areas of Expertise</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><span class="flaticon-law"></span></div>
              <div class="service-2-contents">
                <h3>Civil law</h3>
                <p>Civil law concerns the private relations between community members rather than the criminal legal system.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><span class="flaticon-balance"></span></div>
              <div class="service-2-contents">
                <h3>Intellectual property law</h3>
                <p>Intellectual law protects an individual or company's legal rights regarding their creative works. Subcategories within this legal area include:
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><span class="flaticon-auction"></span></div>
              <div class="service-2-contents">
                <h3>Criminal law</h3>
                <p>Criminal law relates to fundamental legal issues and the personal liberties of citizens. </p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><span class="flaticon-auction"></span></div>
              <div class="service-2-contents">
                <h3>Divorce lawyer</h3>
                <p>Divorce lawyers assist clients who are considering or are currently in the process of filing for divorce. Specific duties of the job may include</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><span class="flaticon-courthouse"></span></div>
              <div class="service-2-contents">
                <h3>Banking and finance law</h3>
                <p>Banking and finance law focuses on the activities of banks and lending institutions. These lawyers advise clients about regulatory or lending compliance.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-2 d-flex">
              <div class="service-2-icon mr-3"><span class="flaticon-law"></span></div>
              <div class="service-2-contents">
                <h3>Affidavit Law</h3>
                <p>An affidavit is a sworn written statement of facts, made under oath, and under penalty of perjury, that the statements are true to the best of his or her knowledge.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section section-4" style="background-image: url('images/hero_2.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mr-auto mb-5">
            <h2 class="mb-3">Why Clients Choose Us?</h2>
            <p class="mb-4 d-block">Clients choose us for our commitment to quality, tailored solutions, and consistent, reliable results.</p>
            <p><a href="contact.php" class="btn btn-primary py-3 px-4" id="free-con">Free Consultation</a></p>
          </div>
          <div class="col-lg-6">
            <div class="row">

              <div class="col-md-6 mb-4">
                <div class="feature-1 d-flex">
                  <span class="feature-1-icon mr-3">
                    <span class="flaticon-law"></span>
                  </span>
                  <div class="feature-1-contents">
                    <strong class="number">%89</strong>
                    <span class="caption">Successful Case</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="feature-1 d-flex">
                  <span class="feature-1-icon mr-3">
                    <span class="flaticon-law"></span>
                  </span>
                  <div class="feature-1-contents">
                    <strong class="number">421</strong>
                    <span class="caption">Trusted Clients</span>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mb-4">
                <div class="feature-1 d-flex">
                  <span class="feature-1-icon mr-3">
                    <span class="flaticon-law"></span>
                  </span>
                  <div class="feature-1-contents">
                    <strong class="number">392</strong>
                    <span class="caption">Expert Lawyers</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="feature-1 d-flex">
                  <span class="feature-1-icon mr-3">
                    <span class="flaticon-law"></span>
                  </span>
                  <div class="feature-1-contents">
                    <strong class="number">913</strong>
                    <span class="caption">Honors and Awards</span>
                  </div>
                </div>
              </div>


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
    
  <script>
    function validateForm() {
      const selectField = document.getElementById("locationSelect");
      const selectedValue = selectField.value;
    
      if (!selectedValue) {
          alert("Please select a valid location.");
          return false; 
      }
    
    
      return true;
    }
    </script>
  </body>
</html>