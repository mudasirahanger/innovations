@php
  $users = App\Models\User::count();
  $innovations = App\Models\Upload::count();
  $departments = App\Models\Departments::count();
  $universities = App\Models\Universities::count();
  @endphp

<div class="row mb-5">
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="tile tile-primary">
            <div class="tile-heading">Total Departments Users</div>
            <div class="tile-body"><i class="fa-solid fa-building"></i>
                <h2 class="float-md-end">{{ $users }}</h2>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="tile tile-primary">
                <div class="tile-heading">Total Innovations </div>
                <div class="tile-body"><i class="fa-solid fa-lightbulb"></i>
                
                    <h2 class="float-md-end">{{ $innovations }}</h2>
                </div>
            </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="tile tile-primary">
            <div class="tile-heading">Total Departments </div>
            <div class="tile-body"><i class="fa-solid fa-building"></i>
                <h2 class="float-md-end">{{ $departments }}</h2>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="tile tile-primary">
            <div class="tile-heading">Total Universities </div>
            <div class="tile-body"><i class="fa-solid fa-building"></i>
                <h2 class="float-md-end">{{ $universities }}</h2>
            </div>
        </div>
    </div>
</div>