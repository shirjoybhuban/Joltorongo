@extends('JS and CSS.jscss')
@section('master')
<!DOCTYPE html>
<html>
  <head>
    <title>Joltorongo</title>
  </head>
  <body>

    <!-- Preloader Start -->
    <div class="row " id="preloader">
      <div id="status" class="col-sm-12">&nbsp;</div>
    </div>

      <!-- Preloader End -->
          <!-- navbar start -->
    @include('header-footer.header')
    <!-- navbar end -->

    <!-- Home Section start -->
    <section id="home" >
      <!-- Background Video -->
      <video id="home-bg-video" poster="{{ asset('image/home/Tape.jpg') }}" autoplay loop muted >
        <source src="{{ asset('video/home/Tape.mp4') }}" type="video/mp4">
        <!-- <source src="video/solo.ogv" type="video/ogg">
        <source src="video/solo.webm" type="video/webm"> -->
      </video>
      <!-- Overlay -->
      <div id="home-overlay"></div>
      <!-- Home Content -->
      <div id="parent" class="container align-middle">
        <div id="child">
          <div class="row align-toMusic-logo" id="home-logo" data-wow-duration="1.5s">
            <span data-tilt> <!-- fot tilt -->
              <img class="img-fluid logo-size"  src="{{ asset('image/home/test-logo.png') }}" alt="LOGO">
            </span>
          </div>
          <div class="row">
            <div class="col-md-12" id="home-h1" data-wow-duration="0.5s">
              <!--  <h1 class=" home-content-feel" id="home-h1">Feel the <span style="color: #f66f6f">music</span></h1>  -->
              <div class="cd-intro"> <!-- animate head -->
               <h1 class="cd-headline rotate-1">
                  <span class="home-content-feel" >Feel the</span>
                  <span class="cd-words-wrapper home-content-feel">
                     <b class="is-visible home-content-feel"  style="color: #f66f6f" >music</b>
                     <b class=" home-content-feel"  style="color: #f66f6f">jazz</b>
                     <b class=" home-content-feel"  style="color: #f66f6f">tune</b>
                     <b class=" home-content-feel"  style="color: #f66f6f">song</b>
                     <b class=" home-content-feel"  style="color: #f66f6f">melody</b>
                     <b class=" home-content-feel"  style="color: #f66f6f">folk</b>
                  </span>
               </h1>
             </div> 
            </div> 
            <div id="home-button-parent">
              <!-- <a href="" class="btn btn-general">BHUBAN</a> -->
              <div class="col-md-12 align-toMusic-button" id="home-button-child">
              <a href="#" class="btn-general btn-yellow"  role="button">Discover</a>
              <!-- <a href="#" class="btn btn-general btn-home btn-yellow col-sm-2" role="button">Sign Up</a> -->
            </div>
            </div>
            
          </div>              
                        
        </div>
      </div>
    </section>
      <!-- Home Section end-->

    <!-- Album Section start -->
    <section>
      <div class="container-fluid">
        <div class="row content-box-xsm">
          <div class="col-md-12 col-sm-12 album-head">
            <p class="wow slideInLeft " data-wow-duration="1.5s"  data-wow-delay="0.1s">Whats New</p>
            <h1 class="wow slideInRight" data-wow-duration="1.5s"  data-wow-delay="0.1s">Recent Released Album</h1>
          </div>
        </div>
        <div class="row ">
          <div id="albums" class="owl-carousel owl-theme">
            <!-- Album 01 -->
            <div class="album wow fadeinUp" data-wow-duration="0.6s" data-wow-delay="0.2s">
              <img src="{{ asset('image/album/a1.jpg') }}" alt="album Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#">Album name</a>
                </div>
              </div>
            </div>
            <!-- Album 02 -->
            <div class="album wow fadeinUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
              <img src="{{ asset('image/album/a2.jpg') }}" alt="team Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#" class="text">Album name</a>
                </div>
              </div>
            </div>
            <!-- Album 03 -->
            <div class="album wow fadeinUp" data-wow-dufaion="0.6s" data-wow-delay="0.6s" >
              <img src="{{ asset('image/album/a3.jpg') }}" alt="team Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#">Album name</a>
                </div>
              </div>
            </div>
            <!-- Album 04 -->
            <div class="album wow fadeinUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
              <img src="{{ asset('image/album/a4.jpg') }}" alt="team Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#">Album name</a>
                </div>
              </div>
            </div>
            <!-- Album 05 -->
            <div class="album wow fadeinUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
              <img src="{{ asset('image/album/a5.jpg') }}" alt="team Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#">Album name</a>
                </div>
              </div>
            </div>
            <!-- Album 06 -->
            <div class="album wow fadeinUp" data-wow-duration="0.6s" data-wow-delay="0.7s">
              <img src="{{ asset('image/album/a6.jpg') }}" alt="team Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#">Album name</a>
                </div>
              </div>
            </div>
            <!-- Album 07 -->
            <div class="album wow fadeinUp" data-wow-duration="0.6s" data-wow-delay="0.8s">
              <img src="{{ asset('image/album/a7.jpg') }}" alt="team Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#">Album name</a>
                </div>
              </div>
            </div>
            <!-- Album 08 -->
            <div class="album wow fadeinUp" data-wow-duration="0.6s" data-wow-delay="0.9s">
              <img src="{{ asset('image/album/a8.jpg') }}" alt="team Album" class="img-responsive">
              <div class="album-overlay">
                <div class="album-info text-center">
                  <a href="#">Album name</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Artist section start -->
    <section id="album">
      <div class="content-box-lg">
        <div class="container">
          <!-- album Members -->
          <div class="row">
            <!-- album Left Side -->
            <div class="col-md-6 col-sm-6">
              <div id="album-left" class="album-left wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
                
                <h1>Meet Our<br>New<strong class="album-left-color">Artist</strong> </h1>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, repellat, eos! Dignissimos expedita totam cum quidem autem alias dolorum error a quia optio eligendi, amet animi reprehenderit, quaerat.</p>
              </div>
            </div>
            <!-- artist Right Side -->
            <div class="col-md-6 col-sm-6">
              <div id="album-members" class="owl-carousel owl-theme">
                <!-- Member 01 -->
                 <div class="album wow flipinX" data-wow-duration="1.5s" data-wow-delay="1s">
                  <img src="{{ asset('image/artist/a1.jpg') }}" alt="album Album" class="img-responsive">
                  <div class="album-overlay">
                    <div class="album-info text-center">
                      <a href="#">Album name</a>
                    </div>
                  </div>
                </div>
                <!-- Member 02 -->
                <div class="album wow flipinX" data-wow-duration="1.5s" data-wow-delay="1s">
                  <img src="{{ asset('image/artist/a2.jpg') }}" alt="album Album" class="img-responsive">
                  <div class="album-overlay">
                    <div class="album-info text-center">
                      <a href="#">Album name</a>
                    </div>
                  </div>
                </div>
                <!-- Member 03 -->
                <div class="album wow flipinX" data-wow-duration="0.9s" data-wow-delay="1s">
                  <img src="{{ asset('image/artist/a3.jpg') }}" alt="album Album" class="img-responsive">
                  <div class="album-overlay">
                    <div class="album-info text-center">
                      <a href="#">Album name</a>
                    </div>
                  </div>
                </div>
                <!-- Member 04 -->
                <div class="album wow flipinX" data-wow-duration="0.9s" data-wow-delay="1s">
                  <img src="{{ asset('image/artist/a4.jpg') }}" alt="album Album" class="img-responsive">
                  <div class="album-overlay">
                    <div class="album-info text-center">
                      <a href="#">Album name</a>
                    </div>
                  </div>
                </div>
                <!-- Member 05 -->
                <div class="album wow flipinX" data-wow-duration="0.9s" data-wow-delay="1s">
                  <img src="{{ asset('image/artist/a5.jpg') }}" alt="album Album" class="img-responsive">
                  <div class="album-overlay">
                    <div class="album-info text-center">
                      <a href="#">Album name</a>
                    </div>
                  </div>
                </div>
                <!-- Member 06 -->
                <div class="album wow flipinX" data-wow-duration="0.9s" data-wow-delay="1s">
                  <img src="{{ asset('image/artist/a6.jpg') }}" alt="album Album" class="img-responsive">
                  <div class="album-overlay">
                    <div class="album-info text-center">
                      <a href="#">Album name</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Package -->
    <section id="pricing">
      <div class="">
        <div class="container">
          <div class="row">
            <div class="col-md-12  text-center wow slideInDown">
              <div class="pricing-heading wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                <h1>Our Package</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
              <!-- Pricing Table 02 -->
              <div class="pricing-table black">
                <div class="type text-center">
                  <h4>Basic</h4>
                </div>
                <div class="price">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <h2>FREE</h2>
                      <p>TK/Month</p>
                    </div>
                  </div>
                </div>
                <div class="text-center description row">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="price-button">
                  <a class="btn-general btn-yellow" href="#" title="Get Started" role="button">GO</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
              <!-- Pricing Table 02 -->
              <div class="pricing-table black">
                <div class="type text-center">
                  <h4>Unlimited</h4>
                </div>
                <div class="price">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <h2>700</h2>
                      <p>TK/Month</p>
                    </div>
                  </div>
                </div>
                <div class="text-center description row">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="price-button">
                  <a class="btn-general btn-yellow" href="#" title="Get Started" role="button">GO</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Package Ends -->

    <!-- Quote -->
    <section>
      <div class="content-box-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn">
              <div id="quote-statement" class="text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.3s">
                <h3><i class="fa fa-quote-left"></i> One good thing about music,
                <br>when it hits you, you feel no pain. <i class="fa fa-quote-right"></i> </h3>
                <p>- Bob Marley -</p>
              </div>
              <br>
              <div id="quote-statement" class="text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <h3><i class="fa fa-quote-left"></i> I feel like good music comes and goes in waves.
                <i class="fa fa-quote-right"></i> </h3>
                <p>- Santigold -</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Quote Ends -->

    <!-- COntact -->
    <section class="contact-bg">
      <div class="content-box-lg contact-bg-overlay">
        <div class="container">
          <div class="row">
            <!-- left parts start -->
            <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
              
                <!-- Contact Left -->
                <div id="contact-left">
                  <div class="vertical-heading-1">
                    <h5>Who We Are</h5>
                    <h2>Get<br>In <strong style="color: #f66f6f">Touch</strong></h2>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias modi est itaque aliquam sit, minima esse nihil mollitia no.</p>
                  <div id="offices">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="office">
                          <h4>North South University</h4>
                          <ul class="office-details">
                            <li><i class="fa fa-mobile" style="color: #f66f6f"></i><span>+8801771502072</span></li>
                            <li><i class="fa fa-envelope" style="color: #f66f6f"></i><span>support@northsouth.com</span></li>
                            <li><i class="fa fa-map-marker" style="color: #f66f6f"></i><span>Plot, 15, Block B Kuril - NSU Rd<br>Dhaka 1229.</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="social-icon col-sm-12 ">
                    <ul>
                      <li><a href="#" class="fab fa-facebook faba"></a></li>
                      <li> <a href="#" class="fab fa-google-plus-g faba"></a> </li>
                      <li><a href="#" class="fab fa-instagram faba"></a> </li>
                    </ul>
                  </div>
                </div>
                                              
     
              </div>
            </div>
            <!-- left parts end -->
            <!-- r8 parts start -->
            <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
              <form class="contact1-form">
                <span class="contact1-form-title">
                  Anything to Say
                </span>
                <div class="wrap-input1" >
                  <input class="input1" type="text" name="name" placeholder="Name">
                  <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1">
                  <input class="input1" type="text" name="email" placeholder="Email">
                  <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1">
                  <input class="input1" type="text" name="subject" placeholder="Subject">
                  <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1">
                  <textarea class="input1" name="message" placeholder="Message"></textarea>
                  <span class="shadow-input1"></span>
                </div>
                <div class="container-contact1-form-btn">
                  <button class="contact1-form-btn">
                  <span>
                    Send
                    <i class="fas fa-arrow-right"></i>
                  </span>
                  </button>
                </div>
              </form>
              
            </div>
            <!-- r8 parts end -->
          </div>
        </div>
      </div>
    </section>
    <!-- COntact Ends -->
    <!-- Footer  -->
    <footer class="text-center wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0s">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
              Copyright &copy; 2018-19 All Rights Reserved By <span>Joltorongo$BBN</span>
            </p>
          </div>
        </div>
      </div>
      <!-- Back To Top -->
      <a href="#home" id="back-to-top" class="btn btn-sm btn-yellow btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
        <i class="fa fa-angle-up"></i>
      </a>
    </footer>
    <!-- Footer Ends -->
<!-- Modal -->
<!--     <div class="md-modal md-effect-18" id="modal-18">
          <div class="md-content">
            <h3>Modal Dialog</h3>
            <div>
              <p>This is a modal window. You can do the following things with it:</p>
              <ul>
                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                <li><strong>Close:</strong> click on the button below to close the modal.</li>
              </ul>
              <button class="md-close">Close me!</button>
            </div>
          </div>
         </div>

        <button class="md-trigger md-setperspective" data-modal="modal-18">Make way!</button>
        <div class="md-overlay"></div> -->
<!-- modal end -->
 <!-- Animsition -->
<!--   <div class="animsition-overlay" data-animsition-overlay="true">
    <a href="{{ route('login') }}" class="animsition-link">animsition link 1</a>
  
  </div> -->


  </body>
</html>
@endsection