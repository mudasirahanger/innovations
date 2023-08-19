@php
  $innovations = App\Models\Upload::count();
  $startups = App\Models\Upload::where('innovation_type','2')->count();
  $patents = App\Models\Upload::where('patentno' ,'>', '0')->count();
  @endphp
 
 <!-- counts -->
 <section class="mt-3">
      <div class="row ">
        <div class="col-md-4">
          <div class="card text-bg-light mb-3 countcard">
            <div class="card-body text-center p-5">
              <div class="row mt-5">
                <div class="col">
                  <i style="font-size: 105px;" class="fa-solid fa-lightbulb"></i>
                </div>
                <div class="col">
                  <p class="ml-1 fs-1 count"> {{ $innovations }} </p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col">
                  <h3>Innovations</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-light mb-3 countcard2">
            <div class="card-body text-center p-5">
              <div class="row mt-5">
                <div class="col">
                  <i style="font-size: 105px;" class="fa-solid fa-pen-nib"></i>
                </div>
                <div class="col">
                  <p class="ml-1 fs-1 count"> {{ $patents }} </p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col">
                  <h3>PATENTS</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-light mb-3 countcard3">
            <div class="card-body text-center p-5">
              <div class="row mt-5">
                <div class="col">
                  <i style="font-size: 105px;" class="fa-solid fa-ranking-star"></i>
                </div>
                <div class="col">
                  <p class="ml-1 fs-1 count"> {{ $startups }} </p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col">
                  <h3>Startups</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--counts close-->