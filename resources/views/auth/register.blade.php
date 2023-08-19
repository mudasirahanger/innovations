@include('components.header')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center align-items-center mb-5" style="min-height: 60vh;">
            <form class="border p-4 rounded shadow form-submit" method="post" id="register" action="{{ route('register') }}" style="width: 600px;">
                @csrf
                <h3 class="mb-3 text-center pageh1">Register Form</h3>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>               
                <div class="mb-3">
                    <label for="name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="name" name="lname" required>
                </div> 
                <div class="mb-3">
                    <label for="name" class="form-label">University</label>
                    <select class="form-control" style="margin: 5px;" name="university">
                        <option value="">Please Select</option>
                        @foreach ($data['universities'] as $university)
                        <option value="{{ $university['uni_id'] }}">{{ $university['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-control" style="margin: 5px;" name="department">
                        <option value="">Please Select</option>
                        @foreach ($data['departments'] as $department)
                        <option value="{{ $department['dept_id'] }}">{{ $department['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div id="" class="form-text">
                        Email must be valid.
                        </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="mobile" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" required>
                    <div id="" class="form-text">
                        10 digit mobile number required and must be valid.
                        </div>
                </div> 
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="col-auto">
                        <span id="" class="form-text">
                        Must be 8-20 characters long.
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    <div class="col-auto">
                        <span id="" class="form-text">
                        Must be 8-20 characters long.
                        </span>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-top"> <i class="fa-solid fa-user-plus"></i> Register</button>
                </div>
                <div class="mb-3 mt-3">
                    <p class="d-inline">If You have already account click to <a href="{{ route('login') }}" class=""><span>Login </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>


@include('components.footer')