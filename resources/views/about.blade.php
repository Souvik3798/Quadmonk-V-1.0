@extends('layout/main')
@section('content')


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
                <img src="{{ asset('images/aboutus.jpg')}}" alt="" srcset="" style="width: 90%;">
            </div>
            <div class="col-md-6">
                <h3>Our Story</h3>
                <p class="mt-3">Founded in 2003, ​Momleetech is headquartered in Chennai, India. Our business name changed in 2005 from Momleetech to Thai Research Info tech. On 02 February 2017, Thai Research Info Tech​ sole proprietorship company converted into
                    the Thai Research Info Tech (OPC) Private Limited ​company. We are an e-commerce solutions provider, Content Management ,E-learning and Online Services company with the latest technologies. Thai Research Info Tech is the leading
                    IT solutions company trusted by SMBs, SMEs & large enterprises to grow their businesses globally. Specifically designed for the services economy, our scalable and comprehensive solutions include a full-featured, modular and secure
                    E-Commerce platform, a flexible subscription billing engine, a channel partner order and revenue management solution, and integrated global payments, as well as a constantly expanding worldwide digital affiliate network.</p>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- why to choose Us -->
<center>
    <section id="wtcu" class="wtcu ">
        <h2 class="mt-5 mb-5 text-center">Why to Choose Us</h2>
        <div class="container">
            <div class="row justify-content-center align-items-center  gy-5">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/why to choose us/certified company.webp')}}" class="card-img-top" alt="wtcu-image" style="width: 30%;">
                        <div class="card-body">
                            <h5>Certified Company</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/why to choose us/support.webp')}}" class="card-img-top" alt="wtcu-image" style="width: 30%;">
                        <div class="card-body">
                            <h5>Great Support</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/why to choose us/price.jpg')}}" class="card-img-top" alt="wtcu-image" style="width: 30%;">
                        <div class="card-body">
                            <h5>Reasonable Pricing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/why to choose us/team.webp')}}" class="card-img-top" alt="wtcu-image" style="width: 30%;">
                        <div class="card-body">
                            <h5>Experienced Team</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/why to choose us/success.jpg')}}" class="card-img-top" alt="wtcu-image" style="width: 30%;">
                        <div class="card-body">
                            <h5>Success Guarantee</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/why to choose us/tools.jpg')}}" class="card-img-top" alt="wtcu-image" style="width: 30%;">
                        <div class="card-body">
                            <h5>Managed Tools</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>


@endsection
