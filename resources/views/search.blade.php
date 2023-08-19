<!-- header -->
@include('components.header')

<!-- body -->
<div class="container">
    <div class="row">
   
    <div class="d-flex justify-content-center align-items-center mb-5" style="min-height: 30vh;">
    <form class="border p-4 rounded shadow form-submit" method="post" action="{{ route('search') }}" enctype="multipart/form-data" style="width: 600px;">
                @csrf
                <h3 class="mb-3 text-center pageh1">Search Innovation</h3>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif
                <div class="mb-3">
                   <label for="inputPassword2" class="">Innovation</label>
                   <input type="text" class="form-control" name="heading_innovator" required>
                   <div id="" class="form-text">
                        Try to type the name or heading 
                        </div>
                </div>
                <div class="mb-3">
                   <button class="btn btn-top"><i class="fa fa-search"></i> Search</button>
                </div>

    </form>
    </div>

    <div class="row mt-5">
            @if (isset($results) && $results == '')
            <h2>Search Results</h2>
                <p>No results .</p>
            @else
            <h2>Search Results</h2>
            <table class="table">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>About</td>
                    <td>Patent No</td>
                    <td>Photo </td>
                    <td>Photo Innovation</td>
                    <td>Action</td>
                </tr>
                </thead>
                    @foreach ($results as $result)
                    <tr>
                         <td><h3>{{ $result->name_innovator }}</h3></td>
                         <td> <p>{{ $result->about }}</p> </td>
                         <td><i>{{ $result->patentno }}</i></td>
                         <td><a href="{{ asset('storage/app/'. $result->photo) }}" data-lightbox="image-1"> <img src="{{ asset('storage/app/'. $result->photo) }}" class="" width="200px"> </a> </td>
                         <td><a href="{{ asset('storage/app/'. $result->photo_innovation) }}" data-lightbox="image-2"> <img src="{{ asset('storage/app/'. $result->photo_innovation) }}" class="" width="200px"> </a> </td>
                         <td><a href="{{ url('/views') }}/{{ $result->innovation_id }}" target="_blank" class="btn btn-info"> <i class="fa-solid fa-print"></i> </a></td>
                    </tr>
                    @endforeach
             </table>
            @endif
      </div>
    

    </div>
</div>
<!-- body -->

<!-- footer -->
@include('components.footer')