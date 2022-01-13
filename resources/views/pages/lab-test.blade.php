@extends('template.front')
@section('content')
    <section id="callaction" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-10">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-10">
                                            <select name="city" class="form-control input-lg">
                                                <option value="">--Select City ---</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->city }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-10">
                                            <select name="test_id" class="form-control input-lg">
                                                <option value="">--Select Test ---</option>
                                                @foreach ($tests as $test)
                                                    <option value="{{ $test->id }}">{{ $test->testname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                    <div class="ca-bg">
                                        <a href="#" class="btn btn-skin btn-lg">Find Labs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">

                        <img src="{{ url('/assets/img/test-1.jpg') }}" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{ url('/assets/img/test-2-1.jpg') }}" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{ url('/assets/img/test-3-1.jpg') }}" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 test-box">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="test-heading">Calcium (Ca)</div>
                            <div class="about-test-desc">Availalble at 1 certified lab</div>
                            <div class="test-price">
                                <h3>Rs.2</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="btn-test"><a href="" class="btn test-button">Add</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-6 col-md-6 test-box">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="test-heading">Calcium (Ca)</div>
                            <div class="about-test-desc">Availalble at 1 certified lab</div>
                            <div class="test-price">
                                <h3>Rs.2</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="btn-test"><a href="" class="btn test-button">Add</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-6 col-md-6 test-box">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <div class="test-heading">Calcium (Ca)</div>
                            <div class="about-test-desc">Availalble at 1 certified lab</div>
                            <div class="test-price">
                                <h3>Rs.2</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="btn-test"><a href="" class="btn test-button">Add</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: services -->


@endsection
