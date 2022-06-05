@extends('layout.main')
@section('content')



<!-- UPDATE BANNER SECTION -->
<section class="updatebanner">
    <h3 class="text-center mb-4">ADD PORTFOLIO</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        <center>
                            {{Session::get('success')}}
                        </center>
                    </div>
                @endif
                <form action="{{url('addportfolio')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="formwidth">
                        <div class="mb-3">
                            <label for="Username" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name" id="captionheader" required>
                        </div>
                        <div class="mb-3">
                            <label for="Username" class="form-label">Brief About Product </label>
                            <input type="text" class="form-control" name="breif" id="captionheader" required>
                        </div>
                        <div class="mb-3">
                            <label for="Username" class="form-label">Product Link </label>
                            <input type="text" class="form-control" name="link" id="captionheader">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Image</label>
                            <input class="form-control" type="file" name="image" id="bannerimage" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<center>
    <section class="listbanner mt-5 mb-5">
        <h5 class="text-center mb-4">LIST OF PORTFOLIO</h5>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row gy-5">


                @foreach ($portfolios as $portfolio)
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <center><img src="public/portfolioimg/{{$portfolio->Image}}" class="card-img-top p-3" alt="..." style="width: 12rem; height: 12rem;"></center>
                            <div class="card-body">
                                <h5 class="card-title">{{$portfolio->Name}}</h5>
                                <p>{{$portfolio->Breif}}.</p>
                                @if($portfolio->Link)
                                     <p><a href="{{$portfolio->Link}}">Goto site <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                                @endif
                                {{-- <button type="button" class="btn btn-primary">UPDATE</button> --}}
                                <a href="{{url('delete/'.$portfolio->id)}}"><button type="button" class="btn btn-danger">DELETE</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
</center>



@endsection
