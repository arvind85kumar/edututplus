@extends('template.front')
@section('content')
    <section id="callaction" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-gray">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb doc-breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                            </ul>
                        </nav>
                        <h1>Sign In</h1>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: services -->
    <section id="service" class="home-section nopadding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('assets/img/dummy/img-1.jpg') }}" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 bg-gray">
                @include('common.flash-message')
                <p for="exampleFormControlInput1">If you are already registered, then sign in here.</p>
                  <br>
                    <form method="post" action="authenticate" autocomplete="off">
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <input title="Sign In" type="submit" class="form-control btn btn-info" value="Sign In">
                        </div>
                    </form> 
                    <div class="col-md-12 col-sm-12 text-right">
                    <a title="New User" class="text-reg text-decoration-none" href="{{url('register')}}">New User</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Section: services -->
@endsection
