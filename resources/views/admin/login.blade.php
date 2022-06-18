@extends('layout.main')
@section('content')


    <!-- admin login page -->
    {{-- <section class="loginform">
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
    </section> --}}

    <section class="vh-100 mt-5" >

        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="{{asset('images/adminlogin.gif')}}"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                @if(session('fail'))
                <div class="alert alert-danger">
                    <center>
                    {{ session('fail') }}
                </center>
                </div>
            @endif
              <form  method="post" action="{{url('admin')}}">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-linkedin-in"></i>
                  </button>
                </div>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" name="Username" class="form-control form-control-lg"
                    placeholder="Enter a valid User Name" />
                  <label class="form-label" for="form3Example3">UserName</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password"/>
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                {{-- <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body" data-bs-toggle="modal" data-bs-target="#forgot-password">Forgot password?</a>
                </div> --}}

                <div class="text-center text-lg-start mt-4 pt-2">

                        <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" >Login</button>


                  {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                      class="link-danger "  data-bs-toggle="modal" data-bs-target="#create-account">Register</a></p> --}}
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>

      <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
        fab{
            border-radius: 50%;
        }
        .btn-primary{
            background-color: #4bb6b5;
        }
        body{
            background-color: #fdfdfd;
        }
      </style>


@endsection
