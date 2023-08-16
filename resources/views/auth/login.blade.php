@include('components.header')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center align-items-center mb-5" style="min-height: 60vh;">
            <form class="border p-4 rounded shadow form-submit" method="post" id="login" action="{{ route('login') }}" style="width: 600px;">
                @csrf
                <h3 class="mb-3 text-center pageh1">Login</h3>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-top">Login</button>
                </div>
                <div class="mb-3 mt-3">
                    <p class="d-inline">forgot password click <a href="{{ url('forgot-password') }}" class=""><span>here </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>








@include('components.footer')