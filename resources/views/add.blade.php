@include('components.header')

<div class="container">
    <div class="row">
   
    <div class="d-flex justify-content-center align-items-center mb-5" style="min-height: 30vh;">
       <form class="border p-4 rounded shadow form-submit" method="post" id="upload" action="{{ route('uploadPost') }}" enctype="multipart/form-data" style="width: 600px;">
                @csrf
                <h3 class="mb-3 text-center pageh1">Add Innovation Form</h3>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Name Of Innovator</label>
                    <input type="text" class="form-control" id="name" name="name_innovator"   required>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </div>  
                <div class="mb-3 col-8">
                    <label for="email_innovator" class="form-label">Email Of Innovator</label>
                    <input type="email" class="form-control" id="email_innovator" name="email_innovator"   required>
                </div> 
                <div class="mb-3 col-6">
                    <label for="mobile_innovator" class="form-label">Mobile Of Innovator</label>
                    <input type="text" class="form-control" id="phone_innovator" name="phone_innovator"   required>
                </div> 
                <div class="mb-3">
                    <label for="heading_innovator" class="form-label">Heading Of Innovation</label>
                    <input type="text" class="form-control" id="heading_innovator" name="heading_innovator"   required>
                </div>  
               
                <div class="mb-3">
                    <label for="name" class="form-label">Details About Project/Innovation</label>
                    <textarea class="form-control" name="about" rows="3"></textarea>
                </div>   
             
                <div class="mb-3">
                    <label for="heading_innovator" class="form-label">University</label>
                    <input type="text" class="form-control" id="university" name="" value="{{ $university }}"  disabled>
                    <input type="hidden" name="uni_id" value="{{ $uni_id }}">
                </div>               
                <div class="mb-3">
                    <label for="heading_innovator" class="form-label">Department</label>
                    <input type="text" class="form-control" id="department" name="" value="{{ $department }}"  disabled>
                    <input type="hidden" name="dept_id" value="{{ $dept_id }}">
                </div> 
              
                <div class="mb-3">
                    <label for="patentno" class="form-label">Whether Patented If Yes Enter Patent No</label>
                </div>   
                   <div class="form-check">
                    <input class="form-check-input" type="radio" id="patent_yes" name="patent_chck" >
                    <label class="form-check-label" for="patent_yes">
                        Yes
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio"  id="patent_no" name="patent_chck" checked>
                    <label class="form-check-label" for="patent_yes">
                      No
                    </label>
                    </div>
                    <div class="mb-3">                  
                    <label for="patentno" class="form-label d-none" id="patentnolabel">Patent no</label>
                    <input type="text" class="form-control d-none" id="patentno" name="patentno" >
                </div> 

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo of Innovator</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo of Innovation</label>
                    <input type="file" class="form-control" id="photo_innovation" name="photo_innovation">
                </div>
                           
                <div class="d-grid">
                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-address-card"></i> Add Innovation</button>
                </div>
                <div class="d-grid mt-1">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
                </div>
       </form>
    </div>
   
    <script>
        $('#patent_yes').change(function(){            
            $('#patentnolabel').removeClass('d-none');
            $('#patentno').removeClass('d-none');
        });
    </script>
   
</div>


@include('components.footer')

