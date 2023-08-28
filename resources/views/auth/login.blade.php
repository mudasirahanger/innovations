@include('components.header')
<section class="contact-section">
<div class="auto-container">
    <div class="row clearfix">
        <div class="col-md-8 offset-md-3" style="min-height: 60vh;">
        <div class="form-inner">
        <div class="sec-title left">
                <h2>Login</h2>
             </div>
            <form class="border p-4 rounded shadow form-submit" method="post" id="login" action="{{ route('login') }}" style="width: 600px;">
                @csrf
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div id="" class="form-text">
                    Email must be valid.
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
                <div class="d-grid">
                    <button type="submit" class="theme-btn style-one"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
                </div>
                <div class="mb-3 mt-3">
                    <p class="d-inline">forgot password click <a href="{{ url('forgot-password') }}" class=""><span>here </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>


</section>





@include('components.footer')