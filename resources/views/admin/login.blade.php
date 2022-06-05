@extends('layout.main')
@section('content')


    <!-- admin login page -->
    <section class="loginform">
        <h3 class="text-center mb-4">ADMIN LOGIN</h3>
        @if(session('fail'))
            <div class="alert alert-danger">
                <center>
                {{ session('fail') }}
            </center>
            </div>
        @endif
        <div class="container">
            <div class="row">

                <dic class="col-md-12">
                    <div class="formwidth">
                        <form method="post" action="{{url('admin')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="Username" id="Username" required>
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </dic>
            </div>
        </div>
    </section>


@endsection
