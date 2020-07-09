@extends('layouts.app')

@section('content')
    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area video clearfix dzsparallaxer auto-init fullwidth" data-options='{direction: "normal"}' id="home">
        <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url(img/d.png)"></div>

        <!-- Hero Content -->
        <div class="hero-content dark-blue">
            <!-- blip -->
            <div class="dream-blip blip1"></div>
            <div class="dream-blip blip2"></div>
            <div class="dream-blip blip3"></div>
            <div class="dream-blip blip4"></div>

            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Content -->
                    <div class="col-12">
                        <!-- Wellcome Heading Text -->
                        <div class="welcome-text headline text-center">
                            <div class="cd-intro default-title">
                                <h2 class="cd-headline clip is-full-width">
                                    <span>Leet makers is </span>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Robotic Club</b>
                                        <b>1337 Club</b>
                                        <b>company</b>
                                    </span>
                                </h2>
                                <p class="desc">{{ getSetting('descriptionsite') }} </p>
                            </div>

                            <!-- Learn More Button-->
                            <div class="dream-btn-group">
                                <a href="{{ url('join_us') }}" class="btn dream-btn mr-3">Join Us</a>
                                <a href="#contact" class="btn dream-btn">contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <section class="demo section-padding-100-0" id="projects">
        <div class="container">
            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Our projects</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="carousel-wrap">
                    <div class="owl-carousel">
                    @foreach($projects as $project)
                      <div class="item">
                            <div class="demo-item">
                                    <a href="{{ url('/project/'.$project->id) }}" target="_blank"><img src="{{ url('/uploads/projects/'.$project->image) }}" alt="demo" class="img-responsive"></a>
                                    <div class="preview-btn-wrapper text-center">
                                        <a href="{{ url('/project/'.$project->id) }}" class="preview-demo" target="_blank">More details <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>  
                      </div>            
                    @endforeach
                    </div>
            </div> 
        </div>
    </section>
    <section class="our_team_area section-padding-100-0 clearfix" id="members">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" >
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s" >Our Awesome Members</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member -->
                @foreach($members as $member)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.5s" >
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="{{ url('/uploads/users/'.$member->avatar) }}" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <h5>{{ $member->name }}</h5>
                            <p>{{ $member->desc }}</p>
                        </div>
                        <!-- Icon 
                        <div class="team-social-icon">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>-->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="our_team_area section-padding-100-0 clearfix" id="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s" >Our Sponsors</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($sponsors as $sponsor)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member wow fadeInUp" data-wow-delay="0.5s" >
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <a href="{{ $sponsor->url }}"><img src="{{ url('uploads/sponsors/'.$sponsor->logo) }}" class="center-block" alt=""></a>
                        </div>
                    </div>
                </div>      
                @endforeach     
            </div>
        </div>
    </section>
    <div class="contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" >
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s" >Contact With Us</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
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
                        <form action="{{ url('/contact') }}"  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div id="success_fail_info"></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">
                                        <input type="text" name="contact_name" id="name" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.3s" >
                                        <input type="text"  name="contact_email"id="email" required="">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="contact_message" id="message" required=""></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" class="btn dream-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   



@endsection
