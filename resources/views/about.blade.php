@extends('layout/main')
@section('content')

<style>
    body{
         font-family: url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');;
    }
    #te{
        font-size:medium;
    }
    h3{
        font-size: xx-large;
    }

    .why-us h2 {
    position: relative;
    margin-bottom: 35px;
}
.why-us h2::after {
    content: "";
    width: 120px;
    height: 3px;
    display: inline-block;
    background: #3975ed;
    position: absolute;
    left: 0px;
    right: 0px;
    bottom: -20px;
    margin: 0 auto;
}

.why-us .box {
    padding: 70px 60px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.10);
    background-color: rgba(0, 0, 0, 0.3);
    transition: 0.5s;
    position: relative;
    /* background-color: rgb(107, 183, 249); */
    max-height: 230px;
    overflow: hidden;
    margin-bottom: 30px;
    border-radius: 10px;
}
.why-us .box:hover {
	padding: 80px 80px 200px 80px;
	box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.20);
}
.why-us .box img {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	z-index: -1;
	opacity: 1;
	transition:all ease 1s;
}
.why-us .box:hover img {
	opacity:1;
}
.why-us .box h4 {
	font-size: 24px;
	font-weight: 600;
	padding: 0;
	margin: 20px 0;
	color: #f4f4f4;
	text-decoration: none;
    text-align: center;
}
/* .why-us .box:hover span,
.why-us .box:hover h4 a,
.why-us .box:hover p {
  	color: rgb(255, 255, 255);
} */

</style>

    <!-- breadcrumb -->
<div class="container mt-5 bc-custom">
    <div class="row justify-content-center align-items-center">
        <div class="col md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mt-5">
                    <li class="breadcrumb-item px-3"><a href="{{ url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- about-us section -->
<section class="about-us mt-5">
    <div class="container">
        <h1 class="text-center mb-5">About Us</h1>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="{{asset('images/aboutus.gif')}}" alt="" srcset="" style="width: 90%;">
            </div>
            <div class="col-md-6">
                <h3>Our Story</h3>
                <p class="mt-3" id="te">Founded in 2021, <b>​Quadmonk Solutions LLP</b> is headquartered in Andaman & Nicobar Islands, India. In the first phase, we intend to digitalize every business in Andaman, and in the following phase, we will digitalize all remote parts of India. We offer technology solutions, content management, e-learning, and online services with the latest technologies. We are an IT solutions company trusted by SMBs, SMEs & large enterprises to grow their businesses locally. We have helped almost <b>30+ businesses</b> in just one year. Specifically designed for the services economy, our scalable and comprehensive solutions include a full-featured, modular, and secure Platform, a flexible subscription billing engine, a channel partner order and revenue management solution, and integrated global payments, as well as a constantly expanding worldwide digital affiliate network. </p>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- why to choose Us -->

<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mt-5 text-center">Why Choose Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="box">
                    <h4>Certified Company</h4>
                    <img src="{{asset('images/why to choose us/certified company.webp')}}" height="auto" width="auto"class="image-fluid" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="box">
                    <h4>Great Support</h4>
                    <img src="{{asset('images/why to choose us/support.webp')}}" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="box">

                    <h4>Reasonable Pricing</h4>
                    <img src="{{asset('images/why to choose us/price.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="box">

                    <h4>Experienced Team</h4>
                    <img src="{{asset('images/why to choose us/team.webp')}}" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="box">

                    <h4>Success Guarantee</h4>
                    <img src="{{asset('images/why to choose us/success.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="box">

                    <h4>Managed Tools</h4>
                    <img src="{{asset('images/why to choose us/tools.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
