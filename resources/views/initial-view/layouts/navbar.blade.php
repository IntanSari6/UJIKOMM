<div class="container-fluid bg-light position-relative shadow">
    <nav
      class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
    >
      <a
        href=""
        class="navbar-brand font-weight-bold text-secondary"
        style="font-size: 50px"
      >
        {{-- <i class="flaticon-043-teddy-bear"></i> --}}
        <img class="img-fluid" src="{{asset('assets/img/logoo.png')}}" style="height: 100px; width: 100px" alt="" />
        <span class="text-primary">Scoop and Skoops</span>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
      >
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="/" class="nav-item nav-link active">Beranda</a>
          <a href="gallery" class="nav-item nav-link">Gallery</a>
          <a href="category" class="nav-item nav-link">Category</a>
        </div>
        {{-- <a data-toggle="modal" data-target="#login" href="login" class="btn btn-primary px-4">Login</a> --}}
          <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
            Login
          </button>  

          <div class="row justify-content-center">

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

          <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-title text-center">
                    <h4>Login</h4>
                  </div>
                  <div class="d-flex flex-column text-center">
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Your email address...">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Your password...">
                      </div>
                      <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                    </form>
                </div>
              </div>
                <div class="modal-footer d-flex justify-content-center">
                  <div class="signup-section">Belum Punya Akun? <a href="#a" data-target="#a" class="text-info"> Register</a>.</div>
                </div>
            </div>
          </div>
       

          <div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-title text-center">
                    <h4>Register</h4>
                  </div>
                  <div class="d-flex flex-column text-center">
                    <form>
                      <div class="form-floating">
                        <input type="text" name="Username" class="form-control @error('Username')is-invalid @enderror" id="Username" placeholder="Username" required value="{{ old('Username') }}">
                        <label for="Username">Username</label>
                        @error('Username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                      <input type="Password" name="Password" class="form-control rounded-bottom @error('Password')is-invalid @enderror" id="Password" placeholder="Password" required >
                      <label for="Password">Password</label>
                      @error('Password')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>

                  <div class="form-floating">
                    <input type="Email" name="Email" class="form-control @error('Email')is-invalid @enderror" id="Email" placeholder="name@example.com" required value="{{ old('Email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('Email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror   
                </div>

                <div class="form-floating">
                  <input type="text" name="NamaLengkap" class="form-control rounded-top @error('NamaLengkap')is-invalid @enderror" id="NamaLengkap" placeholder="NamaLengkap" required value="{{ old('NamaLengkap') }}">
                  <label for="NamaLengkap">Nama Lengkap</label>
                  @error('NamaLengkap')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>

               <div class="form-floating">
                <input type="text-area" name="Alamat" class="form-control rounded-top @error('Alamat')is-invalid @enderror" id="Alamat" placeholder="Alamat" required value="{{ old('Alamat') }}">
                <label for="Alamat">Alamat</label>
                @error('Alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
                <div class="modal-footer d-flex justify-content-center">
                  <div class="signup-section">Sudah Punya Akun? <a href="#a" class="text-info"> Login</a>.</div>
                </div>
            </div>
          </div>
          </div>

    </nav>
  </div>

  