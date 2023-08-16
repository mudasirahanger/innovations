@include('components.header')

<div class="container">
    <div class="row">
   
    <div class="d-flex justify-content-center align-items-center mb-5" style="min-height: 30vh;">
       <form class="border p-4 rounded shadow form-submit" method="post" id="upload" action="{{ route('approveInn') }}" enctype="multipart/form-data" style="width: 600px;">
                @csrf
                <h3 class="mb-3 text-center pageh1">Innovations Detials</h3>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
               
       
               @if ($datas)
               @foreach ($datas as $data) 
                <div class="mb-3">
                    <label for="name" class="form-label">Name Of Innovator</label>
                    <input type="text" class="form-control" id="name" name="name_innovator"   value="{{ $data['name_innovator'] }}"  disabled>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="upload_id" value="{{ $data['upload_id'] }}">
                    <input type="hidden" name="innovation_id" value="{{ $data['innovation_id'] }}">
                    <input type="hidden" name="status" value="Approved">
                </div>  
                <div class="mb-3">
                    <label for="heading_innovator" class="form-label">Heading Of Innovation</label>
                    <input type="text" class="form-control" id="heading_innovator" name="heading_innovator"   value="{{ $data['heading_innovator'] }}"  disabled>
                </div>  
               
                <div class="mb-3">
                    <label for="name" class="form-label">Details About Project</label>
                    <textarea class="form-control" name="about" rows="3" disabled>{{ $data['about'] }}</textarea>
                </div>   
             
                <div class="mb-3">
                    <label for="heading_innovator" class="form-label">University</label>
                    <input type="text" class="form-control" id="university" name="" value="{{ $uni_name }}"  disabled>
                    
                </div>               
                <div class="mb-3">
                    <label for="heading_innovator" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="" value="{{ $dept_name }}"  disabled>
                    
                </div>        

                <div class="mb-3">                  
                    <label for="patentno" class="form-label " id="patentnolabel">Patent no</label>
                    <input type="text" class="form-control " id="patentno" name="patentno" value="{{ $data['patentno'] }}"  disabled >
                </div> 

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo of Innovator</label>
                    <a href="{{ asset('storage/app/'. $data['photo']) }}" data-lightbox="image-1" data-title="{{ $data['heading_innovator'] }}">   <img src="{{ asset('storage/app/'. $data['photo']) }}" class="" width="200px"> </a>
                    
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo of Innovation</label>
                  <a href="{{ asset('storage/app/'. $data['photo_innovation']) }}" data-lightbox="image-2" data-title="{{ $data['heading_innovator'] }}"> <img src="{{ asset('storage/app/'. $data['photo_innovation']) }}"  class="" width="200px"> </a>
                 
                </div>

                <div class="d-grid">
                @if (Auth::user()->role_id  == 1 && $data['status'] !== 'Approved')
                    <button type="submit" class="btn btn-success">Approve Innovation</button>
                @else
                    <a class="btn btn-warning">{{ $data['status'] }}</a>
                @endif
                </div>
                @endforeach
                @endif
       </form>
    </div>
   
   
</div>


@include('components.footer')

