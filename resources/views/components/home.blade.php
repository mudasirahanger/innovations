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
<section class="container mt-3 p-5 section2">
      <div class="row">
        <div class="col-3">
          <h1 class="pageh2">Latest Innovation
          </h1>
          @foreach($l_innovations as $innovations)
          <p class="mt-5">{{  Str::limit($innovations['heading_innovator'] ,50)}}
          </p>
          <img src="https://static.vecteezy.com/system/resources/previews/001/268/345/original/businessman-holding-lightbulb-free-photo.jpg" width="250px" height="250px" style="border-radius: 10px 10px 10px 10px;">
          <h5 class="mt-3 mb-5"> {{ $innovations['name_innovator'] }}</h5>
          <a href="{{ url('/views') }}/{{$innovations->innovation_id}}" target="_parent">Learn More</a>
          @endforeach
        </div>
        <div class="col-3">
        <h1 class="pageh2">Latest Startups
          </h1>
          @foreach($l_startups as $innovations)
          <p class="mt-5">{{  Str::limit($innovations['heading_innovator'] ,50)}}
          </p>
          <img src="https://community.nasscom.in/sites/default/files/styles/960_x_600/public/media/images/why%20startups%20fail.png?itok=3Gngp-0D" width="250px" height="250px" style="border-radius: 10px 10px 10px 10px;">
          <h5 class="mt-3 mb-5"> {{ $innovations['name_innovator'] }}</h5>
          <a href="{{ url('/views') }}/{{$innovations->innovation_id}}" target="_parent">Learn More</a>
          @endforeach
        </div>
        <div class="col-3">
        <h1 class="pageh2">Latest Patent
          </h1>
          @foreach($l_patents as $innovations)
          <p class="mt-5">{{  Str::limit($innovations['heading_innovator'] ,50)}}
          </p>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe0eAf6b9XphlVRPFQVMqkC4mnOPIPqS5MqQ&usqp=CAU" width="250px" height="250px" style="border-radius: 10px 10px 10px 10px;">
          <h5 class="mt-3 mb-5"> {{ $innovations['name_innovator'] }}</h5>
          <a href="{{ url('/views') }}/{{$innovations->innovation_id}}" target="_parent">Learn More</a>
          @endforeach
        </div>


        <div class="col-3">
          <h1 class="pageh2 text-center">Applause </h1>
          <span class="text-dark" style="
                      width: 74%;
                      margin: 0 auto;
                      display: flex;
                      align-items: center;
                      --divider-border-style: solid;
        --divider-color: #000;
        --divider-border-width: 1px;
                      border: 1px solid #333;
                      border-left: none;
                      border-right: none;
                      border-top: none;
                      ">
            <span style="
                      border-color: #DDD;
                      color: #333;
                      margin: -11px 100px;
                      flex-shrink: 0;
                      ">
              <i aria-hidden="true" class="fa fa-star"></i>
            </span>
          </span>
          <div class="mt-5 p-1">
            <h2 class="p-4"> <i class="fa-solid fa-award"></i> JKEDI (94)</h2>
            <ul class="list-group list-group-flush">
               @foreach($universities as $uni)
              <li class="list-group-item"><i aria-hidden="true" class="far fa-star"></i>{{ $uni->name }} (35)</li>
              @endforeach
            </ul>
          </div>


        </div>




      </div>
    </section>


    <section class="container mt-5 mb-5 pt-5">
      <div class="row">
        <div class="col-4">
          <h1 class="pageh1">Partner Organisation </h1>
          <div class="partner-slider mt-5">
            <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/partner1.png">
            <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/partner3.png">
            <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/partner6.png">
          </div>

        </div>
        <div class="col-4">
          <h1 class="pageh1">Latest News</h1>
          <div class="mt-5" style="background-color: #CDEBFC; height: 300px;">
            <marquee height="200" direction="up" onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="60"
              truespeed="" scrollamount="1" behavior="scroll">
              <ul class="p-5 mt-5 news">
                <li class="">J&K Chief Secretary launches 3 online services of Science & Technology Department
                </li>
                <li class="">Union Minister Dr Jitendra Singh announces special drive for promoting StartUps and R&D
                  activities in new and emerging areas in the universities of NE, J&K
                </li>

              </ul>
            </marquee>
          </div>
        </div>
        <div class="col-4">
          <h1 class="pageh1">Important Link </h1>
          <ul class="list-group list-group-flush mt-5">
            <li class="list-group-item">JK Science Technology & Innovation Council
            </li>
            <li class="list-group-item">J & K Energy Development Agency
            </li>
            <li class="list-group-item">General Administrative Department
            </li>
            <li class="list-group-item">Ministry of New and Renewable Energy
            </li>
            <li class="list-group-item">Dept Science Technology GOI
            </li>
            <li class="list-group-item">Dept of Biotechnology GOI
            </li>
            <li class="list-group-item">Department of Earth Sciences
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container mt-5 mb-5 pt-5 section4">
      <div class="row">

        <div class="col-md-6">
          <h1> We Are A Modern Research Expert Company. </h1>
          <p class="justify-content-center">The Science and Technology has two wings under its Administrative Control
            viz
            J&K Energy Development Agency (JAKEDA) and J&K Science, Technology & Innovation Council. (JKSTIC). </p>

          <p class="justify-content-center">The role of JAKEDA is to provide New and Renewable Energy sources for
            un-electrified villages/hamlets, so as to replace the existing conventional energy sources like fossil
            fuels.
          </p>

          <h5 class="mt-3 mb-5"> WE ARE A MODERN RESEARCH EXPERT COMPANY. </h5>

         
        </div>
        <div class="col-md-6">
          <div class="slider-section4">
            <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/001.jpg" class="img-fluid" width="470px">
            <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/002.jpg" class="img-fluid" width="470px">
            <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/003.jpg" class="img-fluid" width="470px">

          </div>
        </div>

      </div>
    </section>

    <!--slider-->
    <section class="container mt-5 pt-5">
      <div class="row">
        <h1 class="pageh1">Parent Organisation</h1>
      </div>
      <div class="row">
        <div class="deptslider">
          <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/1.png" width="100px">
          <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/2.png" width="100px">
          <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/3.png" width="100px">
          <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/4.png" width="100px">
          <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/5.png" width="100px">
          <img src="https://kashmirimpulse.com/wp-content/uploads/2023/08/6.png" width="100px">

        </div>
      </div>
    </section>
    <!--slider-->