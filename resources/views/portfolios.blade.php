@extends('layout.main')
@section('content')

 <!-- breadcrumb -->
 <div class="container mt-5 bc-custom">
    <div class="row">
        <div class="col md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mt-5">
                    <li class="breadcrumb-item px-3"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section id="portfolio">
    <h1 class="mt-5 text-center">In Progress, Our Portfolio Speaks More than us!</h1>
    <p class="mt-3 mb-5 text-center">Happy, Satisfied & Growing Client is what we wish for and love to help them #Grow</p>

    <div class="container">

        <div class="row justify-content-center align-items-center">
            <!-- <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="Logo">Logo</button>
                <button class="btn btn-default filter-button" data-filter="Websites">Websites</button>
                <button class="btn btn-default filter-button" data-filter="Graphics">Graphics</button>
            </div>
            <br/> -->
            <!-- client list -->
            @foreach ($portfolios as $portfolio)

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <p>
                                        <div class="filter Websites">
                                            <img src="public/portfolioimg/{{$portfolio->Image}}" class="img-fluid">
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{$portfolio->Name}}</h4>
                                        <p class="card-text">{{$portfolio->Breif}}.</p>
                                        @if($portfolio->Link)
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="{{$portfolio->Link}}">
                                                    Visit {{$portfolio->Name}}&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            <!-- end of client -->
        </div>
    </div>

</section>
<!-- Team -->



@endsection
