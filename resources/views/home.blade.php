
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
                                    <div class="mb-3 ">
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
    <!-- The social media icon bar -->
    <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
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
                    <img src="https://thumbs.dreamstime.com/b/cybersecurity-global-network-information-technology-security-services-internet-154742479.jpg" class="custom-img" alt="...">
                    <div class="carousel-caption">
                        <h5 style="text-shadow: 2px 2px 8px #000000;">Next-generation Technology</h5>
                        <p style="text-shadow: 2px 2px 8px #000000;">Best for Web & App Technology in Town</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://thumbs.dreamstime.com/b/internet-information-technology-businessman-hand-showing-concept-75784736.jpg" class="custom-img" alt="...">
                    <div class="carousel-caption ">
                        <h5 style="text-shadow: 2px 2px 8px #000000;">Best-in-Service</h5>
                        <p style="text-shadow: 2px 2px 8px #000000;">Best service in Town with awesome rating</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://thumbs.dreamstime.com/b/technical-support-center-customer-service-business-concept-154147567.jpg" class="custom-img" alt="...">
                    <div class="carousel-caption">
                        <h5 style="text-shadow: 2px 2px 8px #000000;">Top-notch Support</h5>
                        <p style="text-shadow: 2px 2px 8px #000000;">Real-time & local service anythime</p>
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


    <section id="services" class="ourservices">
        <h2 class="mt-5 mb-5 text-center">Build your Digital Presence with us</h2>
        <div class="container ">
            <div class="row row-cols-xs-2 row-cols-sm-3 row-cols-md-6 justify-content-center  gy-2">
                <div class="col">
                    <div class="card c-border " style="width: 9rem; ">
                        <div class="card-body">
                            <h5 class="card-title text-center "><i class="fa-solid fa-microphone-lines "></i></h5>
                            <h6 class="card-subtitle mb-2 text-center ">Good Listner</h6>
                            <p class="card-text text-center ">Will take your requirement seriouly.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card c-border " style="width: 9rem; ">
                        <div class="card-body ">
                            <h5 class="card-title text-center "><i class="fa-solid fa-mobile-screen-button "></i></h5>
                            <h6 class="card-subtitle mb-2 text-center ">Moble Apps</h6>
                            <p class="card-text text-center ">Static, Dynamic or Semi-dynamic all we can do.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card c-border " style="width: 9rem; ">
                        <div class="card-body ">
                            <h5 class="card-title text-center "><i class="fa-solid fa-globe "></i></h5>
                            <h6 class="card-subtitle mb-2 text-center ">Website</h6>
                            <p class="card-text text-center ">Static, Dynamic or Semi-dynamic all we can do.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card c-border " style="width: 9rem; ">
                        <div class="card-body ">
                            <h5 class="card-title text-center "><i class="fa-solid fa-pen-clip "></i></h5>
                            <h6 class="card-subtitle mb-2 text-center ">Best Designs</h6>
                            <p class="card-text text-center ">Best-in-class designs for you App and Websites.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card c-border " style="width: 9rem; ">
                        <div class="card-body ">
                            <h5 class="card-title text-center "><i class="fa-solid fa-magnifying-glass "></i></h5>
                            <h6 class="card-subtitle mb-2 text-center ">SEO Friendly</h6>
                            <p class="card-text text-center ">SEO friendly contents.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card c-border " style="width: 9rem; ">
                        <div class="card-body ">
                            <h5 class="card-title text-center "><i class="fa-solid fa-file-pen "></i></h5>
                            <h6 class="card-subtitle mb-2 text-center ">Real-Time Updates</h6>
                            <p class="card-text text-center ">Maintenance, Remote Support & much more.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="premium-services">
        <h2 class="mt-5 text-center">Premium services with Awesome support</h2>
        <p class="text-center">We develop Best-in-class Service with User Friendly, Robust, <br>Reliable & Efficient products.</p>
        <div class="container mt-5">
            <div class="row  justify-content-center gy-3 ">
                <div class="col-md-3 ">
                    <div class="card ">
                        <i class="fa-solid fa-laptop-code text-center mt-4 "></i>
                        <div class="card-body ">
                            <h5 class="card-title text-center ">Best UI/UX Design</h5>
                            <p class="card-text mt-3 ">We have the best Graphic Designers in town, so UI/UX designs will the best you can think of, All your worries are over now will take care of your all deigning needs with the best technological partners we will viral your brand.
                                provide latest designs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <i class="fa-solid fa-person-chalkboard text-center mt-4 "></i>
                        <div class="card-body ">
                            <h5 class="card-title text-center ">Beautiful Presentation</h5>
                            <p class="card-text mt-3 ">Appearance & Presentation is the first impression for your customer, let us bring the #WowFactor in your brand and shine among others, with the best Developers, Content Writers, Graphic Designers and Professionals we will Present
                                you in the Best Possible Way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card ">
                        <i class="fa-brands fa-searchengin text-center mt-4 "></i>
                        <div class="card-body ">
                            <h5 class="card-title text-center ">SEO & Analytics</h5>
                            <p class="card-text mt-3 ">SEO, SEM & Analytics all @ most affordable rates that anyone can afford, get reports on everything what we do for you, convert you leads into customers & the best ideas to boost your business. “Data is Money” we will help you
                                to earn more Data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients">
        <h2 class="mt-5 text-center">Our Awesome Clients</h2>
        <p class="text-center">We have had a amazing journey with our Clients that brings us to <br>where we are stands today.</p>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="owl-carousel owl-theme">

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
        </div>
    </section>

    <section id="pricing" class="plans">
        <h2 class="mt-5 text-center">Best of our Plans that will suite your budget.</h2>
        <p class="text-center">We providing the best plans that are value for money</p>
        <div class="container mt-5">
            <div class="row  justify-content-center gy-3 ">
                <div class="col-md-3 ">
                    <div class="card">
                        <p class="text-center mt-2">Basic Plan</p>
                        <h1 class="text-center">&#8377;&nbsp;15K</h1>
                        <div class="card-body">
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;10 Dynamic Pages (Max)</p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;7 Static Pages(Max) </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Contact us Page(Semi-dynamic)</p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;Free Consultation</p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp; SSD Hosting for 1yr </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp; Domain for 1yr </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp; Social Media Handles Creation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp; Email Id Creation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp; 6 months Technical Support </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp; Free Logo </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp; Free Content Writing </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp; Free Business Card (100pcs)</p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp; Free Organic Marketing (1 month)</p>
                            <center><button type="submit" class="btn mt-4" data-bs-toggle="modal" data-bs-target="#get-quatation">GET QUATATION</button></center>
                        </div>
                    </div>
                </div>
                <!-- end of card -->
                <div class="col-md-3 ">
                    <div class="card">
                        <p class="text-center mt-2">Business Plan</p>
                        <h1 class="text-center">&#8377;&nbsp;20K</h1>
                        <div class="card-body">
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;5 Dynamic Pages (Max) </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;4 Static Pages(Max) </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Contact us Page(Semi-dynamic)</p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Free Consultation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;SSD Hosting for 1yr </p>
                            <p class="card-text mt-3 mb-2 "> <i class="fa-solid fa-check"></i>&nbsp;&nbsp;Domain for 1yr </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Social Media Handles Creation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Email Id Creation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;9 months Technical Support </p>
                            <p class="card-text mt-3 mb-2 "> <i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;Free Logo </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;Free Content Writing </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;Free Business Card (100pcs)</p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-xmark"></i>&nbsp;&nbsp;Free Organic Marketing (1month)</p>
                            <center><button type="submit" class="btn mt-4" data-bs-toggle="modal" data-bs-target="#get-quatation">GET QUATATION</button></center>
                        </div>
                    </div>
                </div>
                <!-- end of card -->
                <div class="col-md-3 ">
                    <div class="card">
                        <p class="text-center mt-2">Exclusive Plan &nbsp;&nbsp;<span class="c-text">&nbsp;CUSTOMISEABLE PLAN&nbsp;</span></p>
                        <h1 class="text-center">&#8377;&nbsp;30K</h1>
                        <div class="card-body">
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;10 Dynamic Pages (Max) </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;4 Static Pages(Max) </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Contact us Page(Semi-dynamic)</p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Free Consultation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;SSD Hosting for 1yr </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Domain for 1yr </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Social Media Handles Creation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Email Id Creation </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;1 yr Technical Support </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Free Logo </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Free Content Writing </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Free Business Card (100pcs) </p>
                            <p class="card-text mt-3 mb-2 "><i class="fa-solid fa-check"></i>&nbsp;&nbsp;Free Organic Marketing (1month)</p>
                            <center><button type="submit" class="btn mt-4" data-bs-toggle="modal" data-bs-target="#get-quatation">GET QUATATION</button></center>
                        </div>
                    </div>
                </div>
                <!-- end of card -->
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class=" mt-5 ">
                    <div class="card c-border ">
                        <div class="card-body">
                            <p class="text-center">A Technology Company that can produce anything for your technical needs. We are a startup company currenty in intial phase and can produce anything for your technical needs, We have Experienced & Award Winning Developers with
                                the best Mentors in the islands.</p>
                        </div>
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

    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>

    <!-- carousel cdn  -->
    <!-- carousel jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js " integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <!-- carousel min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js " integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <!-- owl carousel initiate -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 3
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
    <script>
        var speed = 200;
        var speed2 = 150;
        var str = document.getElementById('str');
        var i = 0;
        var isRemoving = false;

        @php
            foreach($portfolios as $portfolio){
                $name[] = $portfolio->Name;
            }
        @endphp

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
