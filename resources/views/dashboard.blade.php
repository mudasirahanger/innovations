@include('components.header')

<div class="container">
    <div class="row">
    @if (Auth::user()->role_id  == 1)
    <div class="d-flex justify-content-center align-items-center mb-1" style="min-height: 30vh;">
      <h1 class="mb-1 text-center pageh1">Welcome :: {{ Auth::user()->name }} </h1>            
    </div>   
    @include('components.analytics')
    <div class="row">
      @include('components.users')
      </div>
      <div class="row">
      @include('components.uploads')
      </div>
    </div>
    @else
    <div class="d-flex justify-content-center align-items-center mb-5" style="min-height: 10vh;">
      <h1 class="mb-3 text-center pageh1">Welcome Department :: {{ Auth::user()->name }} </h1>            
    </div> 
    <div class="row">
      @include('components.upload')
      </div>
      @endif
</div>


@include('components.footer')

