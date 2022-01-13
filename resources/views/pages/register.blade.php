@extends('template.front')
@section('content')

     <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Register</h2>
                            <p>In the history of modern astronomy, there is probably no one greater leap forward than
                                the
                                building and launch of the space telescope known as the Hubble.</p>
                            <div class="page_link">
                                <a href="{{url('/')}}">Home</a>
                                <a href="{{url('signup')}}">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-user"></i>
                            <h6>New User</h6>
                            <p>If you are new user, then regsiter with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    @include('common.flash-message')
                    <form method="post" action="newuser" autocomplete="off" >
                    @csrf
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label><span class="required">*</span>
                            <input type="text" maxlength="20" name="name" class="form-control" id="exampleFormControlInput1"
                                placeholder="John doe">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label><span class="required">*</span>
                            <input type="password" name="password" maxlength="15" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mobile</label><span class="required">*</span>
                            <input type="text" name="phone" maxlength="13" minlength="10" class="form-control" id="exampleFormControlInput1"
                                placeholder="98xxxxxxxx">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Register as</label>
                            <select class="form-control" name="user_type">
                            <option value="2">Student</option>
                            <option value="3">Teacher</option>
                            <option value="4">School/Institutes</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn primary-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection
