@extends('initial-view.main')

@section('container')  
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Registration Form</h2>
        <div class="card my-5">

          <form action="/register" method="POST" class="card-body cardbody-color p-lg-5">
            @csrf

            <div class="text-center">
              <img src="assets/img/logoo.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
                <input type="text" name="Username" class="form-control @error('Username')is-invalid @enderror" id="Username" placeholder="Username" required value="{{ old('Username') }}">
                @error('Username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <input type="Password" name="Password" class="form-control rounded-bottom @error('Password')is-invalid @enderror" id="Password" placeholder="Password" required >
                @error('Password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="Email" name="Email" class="form-control @error('Email')is-invalid @enderror" id="Email" placeholder="name@example.com" required value="{{ old('Email') }}">
                @error('Email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror  
            </div>

            <div class="mb-3">
                <input type="text" name="NamaLengkap" class="form-control rounded-top @error('NamaLengkap')is-invalid @enderror" id="NamaLengkap" placeholder="NamaLengkap" required value="{{ old('NamaLengkap') }}">
                @error('NamaLengkap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="text" name="Alamat" class="form-control rounded-top @error('Alamat')is-invalid @enderror" id="Alamat" placeholder="Alamat" required value="{{ old('Alamat') }}">
                @error('Alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Register</button></div>

            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Already Registered? <a href="/login" class="text-blue fw-bold"> Login</a>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
              

@endsection