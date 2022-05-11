@include('headers.header')

<div class="container">
    <div class="card mt-5 col-md-4 offset-md-4">
        <div class="card-header bg bg-info text-white text-center fs-3 fw-bold">
            Register
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <span class="alert alert-success alert-dismissible" aria-label="Close" role="alert">{{ session()->get('message') }}</span>
            @endif
            @if (session()->has('error'))
                <span class="alert alert-danger alert-dismissible" aria-label="Close" role="alert">{{ session()->get('error') }}</span>
            @endif
            <form action="{{ route('user.reg.save') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="njr@email.com">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Re-enter Password</label>
                    <input type="password" class="form-control" id="password_confirmation"
                        name="password_confirmation">
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('headers.footer')
