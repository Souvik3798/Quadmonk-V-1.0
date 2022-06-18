
@extends('layout/main')
@section('content')

    <!--get quation  Modal for pricing section -->
    <form action="{{url('quatation')}}" method="POST">
        @csrf
        <div class="modal fade" id="get-quatation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Get Quatation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container mt-5 mb-4">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-12">
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Name</label>
                                        <input type="text " name="name" class="form-control c-text" id="exampleFormControlInput1 " placeholder="Enter Your Name " required>
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Email address</label>
                                        <input type="email " name="email" class="form-control c-text " id="exampleFormControlInput1 " placeholder="yourid@example.com " required>
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Phone Number</label>
                                        <input type="text " name="phone" class="form-control c-text " id="exampleFormControlInput1 " placeholder="9933XXXX45 " required>
                                    </div>
                                    <div class="mb-3 " id="quotation">
                                        <label for="exampleFormControlInput1 " class="form-label ">Quotation</label>
                                        <input type="text " name="plan" class="form-control c-text" readonly>
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Quatation</label>
                                        <input type="text " name="quatation" class="form-control c-text" id="exampleFormControlInput1 " placeholder="Quation for..? " required>
                                    </div>
                                    <div class="mb-3 ">
                                        <center><button type="submit " class="btn mt-4 ">Submit your Quatation</button></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> -->
                </div>
            </div>
        </div>
    </form>




    <form action="{{url('quatation')}}" method="POST">
        <div class="modal fade" id="get-quatation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Get Quotation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container mt-2 mb-4">
                            <div class="row justify-content-center align-items-center">
                                <center><img src="{{asset('images/logo.png')}}" alt="" style="width: 120px;"></center>
                                <div class="col-md-12">

                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Name</label>
                                        <input type="text " name="name" class="form-control c-text" id="exampleFormControlInput1 " placeholder="Enter Your Name " required>
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Email address</label>
                                        <input type="email " name="email" class="form-control c-text " id="exampleFormControlInput1 " placeholder="yourid@example.com " required>
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Phone Number</label>
                                        <input type="text " name="phone" class="form-control c-text " id="exampleFormControlInput1 " placeholder="9933XXXX45 " required>
                                    </div>
                                   <div class="mb-3 " id="quatation">
                                        <label for="exampleFormControlInput1 " class="form-label ">Plan</label>
                                        <select name="plan" class="form-control c-text " id="exampleFormControlInput1 " required>
                                            <option value="">Select Plan</option>
                                            <option value="Basic Plan">Basic Plan</option>
                                            <option value="Business Plan">Business Plan</option>
                                            <option value="Exclusive Plan">Exclusive Plan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleFormControlInput1 " class="form-label ">Quatation</label>
                                        <input type="text " name="quatation" class="form-control c-text" id="exampleFormControlInput1 " placeholder="Quation for..? " required>
                                    </div>
                                    <div class="mb-1 ">
                                        <center><button type="submit " class="btn mt-4 btn-primary btn-rounded">Submit your Quotation</button></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <!-- The social media icon bar -->
    <div class="icon-bar">
        <a href="https://ne-np.facebook.com/watch/QuadMonkSolutions" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/quadmonk" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/quadmonk" class="google"><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC-c6-IzJRdLRv41n2iecd_w" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>





    <section class="sliderbanner">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <video src="images/vid2.mp4" autoplay loop muted style=" width:100%;" alt="..."></video>
                    <div class="carousel-caption">
                        <h5 class="">Next-generation Technology</h5>
                        <p class="">Best for Web & App Technology in Town</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <video src="images/vid6.mp4" autoplay loop muted style=" width:100%;" alt="..."></video>

                    <div class="carousel-caption ">
                        <h5>Best-in-Service</h5>
                        <p>Best service in Town with awesome rating</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <video src="images/vid5.mp4" autoplay loop muted style=" width:100%;" alt="..."></video>

                    <div class="carousel-caption">
                        <h5>Top-notch Support</h5>
                        <p>Real-time & local service anythime</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

    </section>


    <!-- typing amination section -->
    <section class=" recomandation mt-5">
        <div class="flex-container text-center ">
            <h5>
                <i class="fa-solid fa-star"></i> Recomended By
                <span id="str"></span>
            </h5>

        </div>
    </section>
    <!-- end typing amination section -->

    @if(session('success'))
    <div class="alert alert-success">
        <center>
        {{ session('success') }}
        </center>
    </div>
    @endif


    <!-- header section
      <section class="header">
        <div class="container  pt-5">
            <div class="row d-flex justify-content-center align-items-center ">
              <div class="col-md-6">

                <h1>Best Technocrats in modern business <br>Development</h1>
                <button type="button" class="btn btn-outline-dark btn-lg">See Our Work</button>
              </div>
              <div class="col-md-6">
               <img src="assets/images/Web Developer_Monochromatic.png" alt="">
              </div>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-center align-items-center ">
                <div class="card col-md-4" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                      <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                      <p class="card-text">Best for Web & App Technology in Town</p>

                    </div>
                  </div>
                  <div class="card col-md-4" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                      <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                      <p class="card-text">Best for Web & App Technology in Town</p>

                    </div>
                  </div>
                  <div class="card col-md-4" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                      <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                      <p class="card-text">Best for Web & App Technology in Town</p>

                    </div>
                  </div>

            </div>
        </div>

    </section>
<!-- end of header section -->


    <!-- services section
    <section class="services mt-5">
        <h1 class="text-center">Build your Digital Presence with Us</h1>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="card col-md-2 mx-1" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                        <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                        <p class="card-text">Best for Web & App Technology in Town</p>
                    </div>
                </div>
                <div class="card col-md-2 mx-1" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                        <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                        <p class="card-text">Best for Web & App Technology in Town</p>
                    </div>
                </div>
                <div class="card col-md-2 mx-1" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                        <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                        <p class="card-text">Best for Web & App Technology in Town</p>

                    </div>
                </div>
                <div class="card col-md-2 mx-1" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                        <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                        <p class="card-text">Best for Web & App Technology in Town</p>
                    </div>
                </div>
                <div class="card col-md-2 mx-1" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                        <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                        <p class="card-text">Best for Web & App Technology in Town</p>
                    </div>
                </div>
                <div class="card col-md-2 mx-1" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa-solid fa-computer-mouse "></i>
                        <h6 class="card-subtitle mb-2 text-muted">Next-generation Technology</h6>
                        <p class="card-text">Best for Web & App Technology in Town</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- end of services section -->


    <section class="container pt-3 mb-3" id="services">

        <h2 class="mt-5 mb-5 text-center ">Build your Digital Presence with us</h2>
        <div class="row pt-5 mt-30">
            <div class="col-lg-4 col-sm-6 mb-5 pb-5">
                <a class="service-card" href="#">
                    <div class="box-shadow-service bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa-solid fa-microphone-lines fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title-service pt-1 ">Good Listner</h3>
                        <p class="card-text-service text-sm-service">Will take your requirement seriously.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 pb-5">
                <a class="service-card" href="#">
                    <div class="box-shadow-service bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa-solid fa-mobile-screen-button fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title-service pt-1">Mobile Apps</h3>
                        <p class="card-text-service text-sm-service">Static, Dynamic or Semi-dynamic all we can do.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 pb-5">
                <a class="service-card" href="#">
                    <div class="box-shadow-service bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa-solid fa-globe fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title-service pt-1">Website</h3>
                        <p class="card-text-service text-sm-service">Static, Dynamic or Semi-dynamic all we can do.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 pb-5">
                <a class="service-card" href="#">
                    <div class="box-shadow-service bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa-solid fa-pen-clip fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title-service pt-1">Best Designs</h3>
                        <p class="card-text-service text-sm-service">Best-in-class designs for you App and Websites.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 pb-5">
                <a class="service-card" href="#">
                    <div class="box-shadow-service bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa-solid fa-magnifying-glass fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title-service pt-1">SEO Friendly</h3>
                        <p class="card-text-service text-sm-service">SEO friendly contents.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-5 pb-5">
                <a class="service-card" href="#">
                    <div class="box-shadow-service bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa-solid fa-file-pen fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title-service pt-1">Real-Time Updates</h3>
                        <p class="card-text-service text-sm-service">Maintenance, Remote Support & much more.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2><span>Premium services</span> with Awesome support</h2>
                        <h4>We develop Best-in-class Service with User Friendly, Robust, <br>Reliable & Efficient products.</h4>
                    </div>
                </div>
            </div>
                <div class="row our-offer-items less-carousel">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fa-solid fa-laptop-code"></i>
                            <h4>Best UI/UX Design</h4>
                            <p>
                                We have the best Graphic Designers in town, so UI/UX designs will the best you can think of, All your worries are over now will take care of your all deigning needs with the best technological partners we will viral your brand. Provide latest designs.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fa-solid fa-person-chalkboard"></i>
                            <h4>Beautiful Presentation</h4>
                            <p>
                                Appearance & Presentation is the first impression for our customers,
                                we bring the #WowFactor in your brand and shine among others, with the best Developers, Content Writers, and Professionals, we will Present you in the Best Possible Way.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fa-brands fa-searchengin"></i>
                            <h4>SEO & Analytics</h4>
                            <p>
                                SEO, SEM & Analytics all @ most affordable rates that anyone can afford, get reports on everything what we do for you, convert your leads into customers & the best ideas to boost your business. “Data is Money” we will help you
                                to earn more Data.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
        </div>
    </section>


    <section class="clients">
        <h2 class="mt-5 text-center">Our Awesome Clients</h2>
        <p class="text-center">We have had a amazing journey with our Clients that brings us to <br>where we are stands today.</p>
        <div class="carousel-wrap">
            <div class="owl-carousel">

                @foreach ($portfolios as $portfolio)

                <div class="item mb-1">
                    <div class="card border-0 shadow">
                        <img src="public/portfolioimg/{{$portfolio->Image}}" alt="client-image" class="card-img-top">
                    </div>
                </div>
                <!-- item end -->

            @endforeach
            </div>
          </div>
    </section>

    <div class="demo" id="pricing">

        <h2 class="mt-5 text-center">Best of our Plans that will suite your budget.</h2>
        <p class="text-center mb-5">We providing the best plans that are value for money</p>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="pricingTable blue">
                        <div class="pricingTable-header mb-3">
                            <i class="fa fa-adjust"></i>
                            <div class="price-value"> <span style="font-size: 23px;">&#8377;</span> 15000<span style="font-size: 23px;">.00</span>  <span class="month">per month</span> </div>
                        </div>
                        <h3 class="heading">Basic</h3>
                        <span class="badge bg-info d-inline-block mb-3">FIXED</span>
                        <div class="pricing-content">
                            <ul>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i><b>10</b> Dynamic Pages (Max)</li>
                                <li><i class="far fa-check-circle"></i><b>7</b> Static Pages(Max)</li>
                                <li><i class="far fa-check-circle"></i>Contact us Page(Semi-dynamic)</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Consultation</li>
                                <li><i class="far fa-check-circle"></i>SSD Hosting for 1yr</li>
                                <li><i class="far fa-check-circle"></i>Domain for 1yr</li>
                                <li><i class="far fa-check-circle"></i>Social Media Handles Creation</li>
                                <li><i class="far fa-check-circle"></i>Email Id Creation</li>
                                <li><i class="far fa-check-circle"></i><b>6</b> months Technical Support</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Logo</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Content Writing</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Business Card (100pcs)</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Organic Marketing (1 month)</li>
                            </ul>
                        </div>
                        <div class="pricingTable-signup">
                            <a id="basic" data-bs-toggle="modal" data-bs-target="#get-quatation" >GET Quotation</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="pricingTable blue">
                        <div class="pricingTable-header mb-3">
                            <i class="fa fa-briefcase"></i>
                            <div class="price-value"> <span style="font-size: 23px;">&#8377;</span> 20000<span style="font-size: 23px;">.00</span> <span class="month">per month</span> </div>
                        </div>
                        <h3 class="heading">Business</h3>
                        <span class="badge bg-info d-inline-block mb-3">FIXED</span>
                        <div class="pricing-content">
                            <ul>
                                <li><i class="far fa-check-circle"></i><b>10</b> Dynamic Pages (Max)</li>
                                <li><i class="far fa-check-circle"></i><b>7</b> Static Pages(Max)</li>
                                <li><i class="far fa-check-circle"></i>Contact us Page(Semi-dynamic)</li>
                                <li><i class="far fa-check-circle"></i>Free Consultation</li>
                                <li><i class="far fa-check-circle"></i>SSD Hosting for 1yr</li>
                                <li><i class="far fa-check-circle"></i>Domain for 1yr</li>
                                <li><i class="far fa-check-circle"></i>Social Media Handles Creation</li>
                                <li><i class="far fa-check-circle"></i>Email Id Creation</li>
                                <li><i class="far fa-check-circle"></i><b>6</b> months Technical Support</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Logo</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Content Writing</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Business Card (100pcs)</li>
                                <li><i class="far-x fa-regular fa-circle-xmark"></i>Free Organic Marketing (1 month)</li>
                            </ul>
                        </div>
                        <div class="pricingTable-signup">
                            <a data-bs-toggle="modal" data-bs-target="#get-quatation" id="business" >GET Quotation</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="pricingTable blue">
                        <div class="pricingTable-header mb-3">
                            <i class="fa fa-diamond"></i>
                            <div class="price-value"> <span style="font-size: 23px;">&#8377;</span> 30000<span style="font-size: 23px;">.00</span> <span class="month">per month</span> </div>
                        </div>
                        <h3 class="heading">Exclusive </h3>
                        <span class="badge bg-warning d-inline-block mb-3">CUSTOMISEABLE</span>
                        <div class="pricing-content">
                            <ul>
                                <li><i class="far fa-check-circle"></i><b>10</b> Dynamic Pages (Max)</li>
                                <li><i class="far fa-check-circle"></i><b>7</b> Static Pages(Max)</li>
                                <li><i class="far fa-check-circle"></i>Contact us Page(Semi-dynamic)</li>
                                <li><i class="far fa-check-circle"></i>Free Consultation</li>
                                <li><i class="far fa-check-circle"></i>SSD Hosting for 1yr</li>
                                <li><i class="far fa-check-circle"></i>Domain for 1yr</li>
                                <li><i class="far fa-check-circle"></i>Social Media Handles Creation</li>
                                <li><i class="far fa-check-circle"></i>Email Id Creation</li>
                                <li><i class="far fa-check-circle"></i><b>6</b> months Technical Support</li>
                                <li><i class="far fa-check-circle"></i>Free Logo</li>
                                <li><i class="far fa-check-circle"></i>Free Content Writing</li>
                                <li><i class="far fa-check-circle"></i>Free Business Card (100pcs)</li>
                                <li><i class="far fa-check-circle"></i>Free Organic Marketing (1 month)</li>
                            </ul>
                        </div>
                        <div class="pricingTable-signup">
                            <a data-bs-toggle="modal" data-bs-target="#get-quatation" id="exclusive">GET Quotation</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class=" mt-5 ">
                    <div class="alert alert-info container text-center" role="alert">
                        A Technology Company that can produce anything for your technical needs. We are a startup company currenty in intial phase and can produce anything for your technical needs, We have Experienced & Award Winning Developers with
                        the best Mentors in the islands.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contactUs" class="callback">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class=" col-md-6 ">
                    <h1>Request a callback</h1>
                    <p class="mt-3">Great things in business are never done one. They're done by a team of people. For Collab, Promotion or Mega Projects Pls request call back will get back to you soon</p>
                    <div class="text-center justify-content-center">
                        <img src="{{asset('images/logo.png')}}" alt="" style="width: 400px; padding-right: 100px;">
                    </div>
                </div>
                <form method="POST" action="contact" class="col-md-6 mt-5 ">
                    @csrf
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Name</label>
                        <input type="text " name="name" class="form-control c-text" id="exampleFormControlInput1 " placeholder="Enter Your Name ">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Email address</label>
                        <input type="email " name="email" class="form-control c-text " id="exampleFormControlInput1 " placeholder="yourid@example.com ">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Subject</label>
                        <input type="email " name="subject" class="form-control c-text " id="exampleFormControlInput1 " placeholder="wanna make a website for my business...">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Phone Number</label>
                        <input type="text " name="phone" class="form-control c-text " id="exampleFormControlInput1 " placeholder="9933XXXX45 ">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlTextarea1 " class="form-label ">Message</label>
                        <textarea class="form-control c-text " name="message" id="exampleFormControlTextarea1 " placeholder="Type your message..! " rows="3 "></textarea>
                    </div>
                    <div class="mb-3 ">
                        <center><button type="submit " class="btn mt-4 ">Send Your Message</button></center>
                    </div>
                </form>
            </div>
        </div>

    </section>



    <!-- scroll up button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- end scroll up button -->
    <!-- Bootstrap JavaScript Libraries -->

    {{-- <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script> --}}

    <!-- carousel cdn  -->
    <!-- carousel jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js " integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <!-- carousel min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js " integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <!-- owl carousel initiate -->
    <script type="text/javascript">
        var inputBasic = '<label for="exampleFormControlInput1 " class="form-label ">Quotation</label> <input type="text " value="Basic Plan" class="form-control c-text" readonly>'
        var inputBusi = '<label for="exampleFormControlInput1 " class="form-label ">Quotation</label> <input type="text " value="Business Plan" class="form-control c-text" readonly>'
        var inputExclu = '<label for="exampleFormControlInput1 " class="form-label ">Quotation</label> <input type="text " value="Exclusive Plan" class="form-control c-text" readonly>'


       $("#basic").click(function () {
           console.log("helklo")
           $("#quotation").html(inputBasic);
       });
       $("#business").click(function () {
           console.log("helklo")
           $("#quotation").html(inputBusi);
       });
       $("#exclusive").click(function () {
           console.log("helklo")
           $("#quotation").html(inputExclu);
       });
  </script>
  <!-- end of modal update script -->

   <script>
      $('.owl-carousel').owlCarousel({
     loop: true,
     margin: 10,
      autoplay: true,
      autoplayTimeout:1000,
     autoplayHoverPause: true,
     responsive: {
        0: {
            items: 1
        },
       600: {
        items: 3
       },
       1000: {
         items: 5
        }
      }
    })
   </script>
    <!-- typing animation script -->
     @php
            foreach($portfolios as $portfolio){
                $name[] = $portfolio->Name;
            }
        @endphp
    <script>
        var speed = 200;
        var speed2 = 150;
        var str = document.getElementById('str');
        var i = 0;
        var isRemoving = false;

        var messages = <?php

        if($name == ''){

        }else{
            echo json_encode($name);
        }

        ?>;
        function action() {
            if (isRemoving) {
                if (str.innerText.length > 0) {
                    str.innerText = str.innerText.substr(0, str.innerHTML.length - 1);
                    setTimeout(action, speed2);
                    return;
                }
                isRemoving = false;
                i++;
                if (i >= messages.length) {
                    i = 0;
                }
                setTimeout(action, speed);
                return;
            }
            var message = messages[i];
            str.innerText = message.substr(0, str.innerHTML.length + 1);
            if (str.innerText.length === message.length) {
                isRemoving = true;
            }
            setTimeout(action, isRemoving ? speed2 : speed);
        }

        setTimeout(action, speed);
    </script>
    <!--end of typing animation script -->


    @endsection
