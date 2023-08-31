@php
  $innovations = App\Models\Upload::count();
  $startups = App\Models\Upload::where('innovation_type','2')->count();
  $patents = App\Models\Upload::where('patentno' ,'>', '0')->count();
  @endphp
 

    <!-- counts-section -->
    <section class="skills-section centred">
        <div class="auto-container">
            <div class="title-box">
                <div class="sec-title">
                    <h2>We Have Great Facts</h2>
                    <span class="separator"></span>
                </div>
                <div class="text">
                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled <br />and demoralized by the pleasure of the desire that they cannot foresee.</p>
                </div>
            </div>
            <div class="row clearfix">
              
                <div class="col-lg-4 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" style="font-size: 86px;" data-stop="0">0</span>+
                        </div>
                        <p>Innovations</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" style="font-size: 86px;" data-stop="0">0</span>+
                        </div>
                        <p>Patents</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" style="font-size: 86px;" data-stop="0">0</span>+
                        </div>
                        <p>Startups</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counts end -->


   