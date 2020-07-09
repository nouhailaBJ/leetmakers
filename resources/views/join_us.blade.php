@extends('layouts.app')

@section('content')

    <div class="contact_us_area section-padding-100-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
<br><br>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s" >1337 Makers : Join Us</h2>
                          @if(Session::has('success'))
                  <br>
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

                        <center><em> {!! session('success') !!}</em></center>
                      </div>
                  @endif
                      @if (count($errors) > 0)
                          <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                            <center>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li style="list-style:none;">{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </center>
                          </div>
                      @endif
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact_form">
                        <form action="{{ url('/joinUs') }}"  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div id="success_fail_info"></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="first_name" id="name" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>First Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="last_name" id="name" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Last Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="intra" id="name" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Intra Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="number" id="name" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.3s" >
                                        <input type="text"  name="email"id="email" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.3s" >
                                        <input type="text"  name="exp_robotic"id="email" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Do you have any experience in robotics/electronics ? *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="description" id="message" required=""></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Give us a short description of your past skills</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" class="btn dream-btn">jOIN uS</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
 
@endsection
