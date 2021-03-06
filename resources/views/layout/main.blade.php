<!doctype html>
<html lang="en">

<head>
    <title>QuadMonk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" CONTENT="Your tech best friend ">
    <link rel="shortcut icon" href="{{ asset('images/title-icon-logo.jpeg')}}" type="image/x-icon">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/adminstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/adminstyle1.css')}}">
     <!-- for services section -->
     <link rel="stylesheet" href="{{ asset('css/services-premium.css')}}">
     <link rel="stylesheet" href="{{ asset('css/services.css')}}">
     <link rel="stylesheet" href="{{ asset('css/pricing.css')}}">
     <link rel="stylesheet" href="{{ asset('css/style1.css')}}">
    <!-- casousel css cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- carousel theme cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <style>
        .nav-item{
            padding-left: 10px;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-1 pb-1 custom-nav">

        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}" id="qd"> <img src="{{ asset('images/logo.png')}}" alt="Quadmonk Solutions" style="width: 60px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand  "  href="{{url('/')}}" ><img src="{{asset('images/qm.png')}}" alt="Quadmonk Solutions" style="width:180px ;"></a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="{{ url('/') }}#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('portfolios') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact')}}">Contact Us</a>
                    </li>
                    @if(Session::get('quadmonk'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('portfolio') }}"> <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}"> <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                        </li>
                    @endif

                    @if(Session::get('quadmonk'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('logout')}}"> <i class="fa fa-power-off" aria-hidden="true"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>






    @yield('content');


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 270">
        <path fill="#2666CF" fill-opacity="1" d="M0,320L60,314.7C120,309,240,299,360,272C480,245,600,203,720,197.3C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
      </svg>


    <section class="footer">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-4 mt-5">
                    <h5>Company Links</h5>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#customers">Customers</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mt-5">
                    <h5>Address</h5>
                    <p>Room No 202,Mahender Singh Building, beside Hotel Rajadeepam, Dollygunj, Port Blair,<br> Andaman and Nicobar Islands 744103</p>
                    <p>Phone:+91-9382217100</p>

                    <p class="px-5">&nbsp; <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=support@quadmonk.com" target="_blank" style="font-size: 16px;"><u>support@quadmonk.com</u> </a></p>


                </div>
                <div class="col-md-4 mt-5">
                    <h5>Follow Us</h5>
                    <a href="https://ne-np.facebook.com/watch/QuadMonkSolutions" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
                    <a href="https://twitter.com/quadmonk" target="_blank"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/quadmonk" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                    <a href="https://www.youtube.com/channel/UC-c6-IzJRdLRv41n2iecd_w" target="_blank"><i class="fa-brands fa-youtube-square"></i></a>
                    <a href="https://in.linkedin.com/company/quadmonk-solutions" target="_blank"><i class="fa-brands fa-linkedin-square"></i></a>
                    <p>
                        <h5>Policy</h5>
                    </p>
                    <p><a href="{{ url('terms-and-condition')}}">Terms and Conditions</a></p>
                </div>
            </div>

        </div>

    </section>
    <section class="dev-info">
        <div class="container-fluid">
            <div class="row">
                <div class="devinfo text-center">
                    <p class="text-white mt-2"> &#169;2022 Made with &hearts; by QuadMonk V1.0</p>
                </div>
            </div>
        </div>

    </section>
    <!-- scroll up button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- end scroll up button -->
    <!-- Bootstrap JavaScript Libraries -->

    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"+919382217100","welcomeMessage":"Hi,\n*Having trouble with your business?* or\n*Are you looking to upgrade your service?*\nThere are many ways that we can assist you.\nWe are happy to connect you with the right solution if you let us know more about your requirements.","zIndex":999999,"btnColorScheme":"light"};
          var wa_widgetSetting = {"title":"QuadMonk Solutions","subTitle":"Typically replies in few hours","headerBackgroundColor":"#e0feef","headerColorScheme":"dark","greetingText":"Hi there,\nHaving trouble with your business? or\nAre you looking to upgrade your service?\nThere are many ways that we can assist you.\nWe are happy to connect you with the right solution if you let us know more about your requirements.","ctaText":"Get Solutions","btnColor":"#4ac402","cornerRadius":40,"welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"https://www.quadmonk.com/images/logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};
          window.onload = () => {
            _waEmbed(wa_btnSetting, wa_widgetSetting);
          };
        </script>

    <!-- script for smooth scrolling -->
    <script type="text/javascript">
        $(document).on('click', 'a[href^="#"]', function(event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 600);
        });
    </script>
    <!-- end of script for smooth scrolling -->



    <!-- scroll up button script -->
    <script type="text/javascript">
        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    <!-- end of scroll up button script -->


</body>

</html>
