@extends('layout/main')
@section('content')
    <!-- breadcrumb -->
    <div class="container mt-5 bc-custom">
        <div class="row">
            <div class="col md-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item px-3"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- faq section -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="contactUs-form mt-5">
        <div class="container">
            <h1 class="text-center mb-5">Our Contact</h1>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <h5 class="mt-5"><i class="fa-solid fa-location-dot"></i>Address</h5>
                    <p class="mt-3">Room No 202,Mahender Singh Building, beside Hotel Rajadeepam, Dollygunj, Port Blair, Andaman and Nicobar Islands 744103</p>
                    <h5 class="mt-3"><i class="fa-solid fa-phone"></i>Call</h5>
                    <p class="mt-3">Phone:+91-9382217100</p>
                    <h5 class="mt-3"><i class="fa-solid fa-envelope"></i>Email</h5>
                    <p class="mt-3">quadmonkpb@gmail.com</p>
                    <p>support@quadmonk.com</p>
                    <h5 class="mt-3"><i class="fa-brands fa-internet-explorer"></i>website</h5>
                    <p class="mt-3">https://quadmonk.com</p>

                </div>

                <form method="POST" action="contact" class="col-md-6 mt-5 ">
                    @csrf
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Name</label>
                        <input type="text " name="name" class="form-control c-text" id="exampleFormControlInput1 " placeholder="Enter Your Name " required>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Email address</label>
                        <input type="email " name="email" class="form-control c-text " id="exampleFormControlInput1 " placeholder="yourid@example.com " required>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Subject</label>
                        <input type="email " name="subject" class="form-control c-text " id="exampleFormControlInput1 " placeholder="wanna make a website for my business... " required>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlInput1 " class="form-label ">Phone Number</label>
                        <input type="text " name="phone" class="form-control c-text " id="exampleFormControlInput1 " placeholder="9933XXXX45 " required>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleFormControlTextarea1 " class="form-label ">Message</label>
                        <textarea class="form-control c-text " name="message" id="exampleFormControlTextarea1 " placeholder="Type your message..! " rows="3 " required></textarea>
                    </div>
                    <div class="mb-3 ">
                        <center><button type="submit " class="btn mt-4 ">Send Your Message</button></center>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <section class="map mt-5">
        <div class="container">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.845152023669!2d92.71868551533734!3d11.634381945950812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x308894685a51101d%3A0xa982d368b0e4662c!2sQuadMonk%20Solutions!5e0!3m2!1sen!2sin!4v1650041824527!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
@endsection
