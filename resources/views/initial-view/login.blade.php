@extends('initial-view.main')

@section('container')  
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="card my-5">

          @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

          <form action="/login" method="POST" class="card-body cardbody-color p-lg-5">
            @csrf

            <div class="text-center">
              <img src="assets/img/logoo.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="Email" name="Email" class="form-control @error('Email') is-invalid @enderror" id="Email" placeholder="name@example.com" authofocus required value="{{ old('Email') }}">
            @error('Email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            
            <div class="mb-3">
              <input type="Password" name="Password" class="form-control" id="Password" placeholder="Password" required>
            </div>
            
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>

            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="register" class="text-blue fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
              

@endsection