@extends('layouts.app')

@section('content')
    <section class="blog-area section-padding-150-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="region region-content">
                            <div class="single-blog-area wow fadeInUp" data-wow-delay="0.2s" >
                                <div class="blog_thumbnail">
                                    <div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ url('/uploads/projects/'.$project->image) }}" alt="First slide">
    </div>
    @foreach($images as $image)
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ url('/uploads/projects/'.$image->image) }}" alt="Second slide">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>                                        
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <!-- Dream Dots -->
                                    <div class="dream-dots mt-30">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="post-meta">
                                        <p>
                                        <span><span>The project started at {{ $project->startedAt }} and ended at {{ $project->endedAt }}</span></span>
                                        </p>
                                    </div>        
                                    <h4 class="post-title">
                                        <span>{{ $project->title}}</span>
                                    </h4>
                                    <div class="paragraph">
                                        <p>{{ $project->project_description}}</p>
                                    </div>
                                        <p>
                                        <span>Tags : <span> {{ $project->tags}}</span></span>
                                        </p>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="col-12 col-md-3">
                            <div class="sidebar-area">
                                    <div class="region region-sidebar">
                                        <div class="views-element-container block block-views block-views-blockcocoon-blog-block-recent-posts mb-50" >
                                            <div class="widget-title wow fadeInUp" >
                                                <h5>Sposnors Project</h5>
                                            </div>
                                            <div class="ccn-content">
                                                @foreach($sponsors as $sponsor)
                                                <?php $spo_info = App\Suponsor::where('id', $sponsor->idSponsore)->first(); ?>
                                                @if (!empty($spo_info))
                                                    <div>
                                                        <div class="single-dont-miss-post mb-30 wow fadeInUp" data-wow-delay="0.4s">
                                                            <center>
                                                            <div class="dont-miss-post-thumb">
                                                                <a href="{{ $spo_info->url }}">
                                                                <img src="{{ url('uploads/sponsors/'.$spo_info->logo) }}" alt="">
                                                              </a>
                                                            </div>
                                                            </center>
                                                        </div>
                                                    </div>
                                                 @endif   
                                                @endforeach  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="sidebar-area">
                            <div class="region region-sidebar">
                                <div class="views-element-container block block-views block-views-blockcocoon-blog-block-recent-posts mb-50" >
                                    <div class="widget-title wow fadeInUp" >
                                        <h5>Recent Projects</h5>
                                    </div>
                                    <div class="ccn-content">
                                        <div>
                                            @foreach($projects as $pro)
                                            <div>
                                                <div class="single-dont-miss-post mb-30 wow fadeInUp" data-wow-delay="0.4s">
                                                    <div class="dont-miss-post-thumb">
                                                        <img src="{{ url('/uploads/projects/'.$pro->image) }}" style="height: 150px; width: 100%;" alt="">
                                                    </div>
                                                    <div class="dont-miss-post-content">
                                                        <a href="">{{ $pro->title}}</a>
                                                        <span>{{ $pro->created_at}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
@endsection
