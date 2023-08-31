@include('components.counts')
@php
  $universities = App\Models\Universities::orderBy('uni_id','ASC')->take(5)->get();
  $l_innovations = App\Models\Upload::where('status','Approved')
                                      ->where('innovation_type','1')
                                      ->orderBy('upload_id','ASC')->take(1)->get();
  $l_startups = App\Models\Upload::where('status','Approved')
                                      ->where('innovation_type','2')
                                      ->orderBy('upload_id','ASC')->take(1)->get();
  $l_patents = App\Models\Upload::where('status','Approved')
                                      ->where('patentno' ,'>', '0')
                                      ->orderBy('upload_id','ASC')->take(1)->get();
@endphp



<!-- service-section -->
    <section class="service-section bg-color-1 centred pt-1">
        <div class="pattern-layer" style="background-image: url("{{URL::asset('public/assets/images/shape/shape-2.png')}}");"></div>
        <div class="auto-container">
            <div class="sec-title">
                <p>Latest</p>
                <h2>Innovation/Startups/Patents</h2>
                <span class="separator"></span>
            </div>
            <div class="row clearfix">
            @foreach($l_innovations as $innovations)
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ url('/views') }}/{{$innovations->innovation_id}}"><img src="{{ URL::asset('public/assets/images/service/service-1.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <small>Innovation</small>
                                <h3><a href="{{ url('/views') }}/{{$innovations->innovation_id}}">{{ $innovations['name_innovator'] }}</a></h3>
                                <p>{{  Str::limit($innovations['heading_innovator'] ,50)}}</p>
                                <div class="link"><a href="{{ url('/views') }}/{{$innovations->innovation_id}}">Read More<i class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($l_startups as $innovations)
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ url('/views') }}/{{$innovations->innovation_id}}"><img src="{{ URL::asset('public/assets/images/service/service-2.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <small>Startup</small>
                                <h3><a href="{{ url('/views') }}/{{$innovations->innovation_id}}">{{ $innovations['name_innovator'] }}</a></h3>
                                <p>{{  Str::limit($innovations['heading_innovator'] ,50)}}</p>
                                <div class="link"><a href="{{ url('/views') }}/{{$innovations->innovation_id}}">Read More<i class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($l_patents as $innovations)
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="{{ url('/views') }}/{{$innovations->innovation_id}}"><img src="{{ URL::asset('public/assets/images/service/service-3.jpg') }}" alt=""></a></figure>
                            <div class="lower-content">
                                <small>Patent</small>
                                <h3><a href="{{ url('/views') }}/{{$innovations->innovation_id}}">{{ $innovations['name_innovator'] }}</a></h3>
                                <p>{{  Str::limit($innovations['heading_innovator'] ,50)}}</p>
                                <div class="link"><a href="{{ url('/views') }}/{{$innovations->innovation_id}}">Read More<i class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </section>


    <!-- about-section -->
    <section class="about-section mb-3" style="padding:0px;padding-bottom: 200px;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_01">
                        <div class="image-box">
                            <div class="pattern-layer" style="background-image: url({{ URL::asset("public/assets/images/shape/shape-1.png")}});"></div>
                            <figure class="image"><img src="{{ URL::asset('public/') }}/assets/images/resource/about-1.jpg" alt=""></figure>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title left">
                                <p>Applause</p>
                                <h2> JKEDI (25) </h2>
                                
                            </div>                          
                            <div class="inner-box">
                            @foreach($universities as $uni)   
                                <div class="single-item">
                                    <div class="count-box"><i class="fa fa-user-graduate"></i></div>
                                    <div class="inner">
                                        <h3><a href="">{{ $uni->name }} (35)</a></h3>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->




      <!-- clients-section -->
      <section class="clients-section pt-1" style="border:none;margin-top: -150px;">
        <div class="auto-container">
        <div class="sec-title">
                <p>Partner</p>
                <h2>Organisation</h2>
                <span class="separator"></span>
            </div>
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo" style="height:130px">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/partner1.png" alt=""></a>
                   
                </figure>
                <figure class="client-logo" style="height:130px">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/partner3.png" alt=""></a>
                   
                </figure>
                <figure class="client-logo" style="height:130px">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/partner6.png" alt=""></a>
                
                </figure>
             
               
            </div>
        </div>
    </section>
    <!-- clients-section end -->


      <!-- testimonial-section -->
      <section class="testimonial-section centred pt-1">
        <div class="auto-container">
            <div class="sec-title">
                <p>Latest</p>
                <h2>News</h2>
                <span class="separator"></span>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme owl-nav-none">
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>                       
                        <p>J&K Chief Secretary launches 3 online services of Science & Technology Department</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>J&K Chief Secretary</h3>                        
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>                       
                        <p>Union Minister Dr Jitendra Singh announces special drive for promoting StartUps and R&D activities in new and emerging areas in the universities of NE, J&K</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>Dr Jitendra Singh</h3>                        
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>                       
                        <p>J&K Chief Secretary launches 3 online services of Science & Technology Department</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>J&K Chief Secretary</h3>                        
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>                       
                        <p>Union Minister Dr Jitendra Singh announces special drive for promoting StartUps and R&D activities in new and emerging areas in the universities of NE, J&K</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>Dr Jitendra Singh</h3>                        
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- testimonial-section end -->

     <!-- clients-section -->
     <section class="clients-section pt-1">
        <div class="auto-container">
        <div class="sec-title">
                <p>Parent</p>
                <h2>Organisation</h2>
                <span class="separator"></span>
            </div>
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/1.png" alt=""></a>
                    <div class="overlay-box">
                        <a href="#"><img src="{{ URL::asset('public/') }}/images/1.png" alt=""></a>    
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/2.png" alt=""></a>
                    <div class="overlay-box">
                        <a href="#"><img src="{{ URL::asset('public/') }}/images/2.png" alt=""></a>    
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/3.png" alt=""></a>
                    <div class="overlay-box">
                        <a href="#"><img src="{{ URL::asset('public/') }}/images/3.png" alt=""></a>    
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/4.png" alt=""></a>
                    <div class="overlay-box">
                        <a href="#"><img src="{{ URL::asset('public/') }}/images/4.png" alt=""></a>    
                    </div>
                </figure>
             
                <figure class="client-logo">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/5.png" alt=""></a>
                    <div class="overlay-box">
                        <a href="#"><img src="{{ URL::asset('public/') }}/images/5.png" alt=""></a>    
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="{{ URL::asset('public/') }}/images/6.png" alt=""></a>
                    <div class="overlay-box">
                        <a href="#"><img src="{{ URL::asset('public/') }}/images/6.png" alt=""></a>    
                    </div>
                </figure>
               
            </div>
        </div>
    </section>
    <!-- clients-section end -->