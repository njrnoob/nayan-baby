@include('headers.header')

<div class="container">
    <div class="card mt-5 col-md-4 offset-md-4">
        <div class="card-header bg bg-dark text-white text-center fs-3 fw-bold">
            Login
        </div>
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center">

                    <button type="submit" class="btn btn-success">Submit</button>

                </div>
                <a href="{{ route('user.register') }}">Not Registered Yet? Click here</a>

            </form>
        </div>
    </div>
</div>

@include('headers.footer')
