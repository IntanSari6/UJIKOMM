<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-1 pt-5">
      
      <div class="ngesatuin">
        <div class="col-lg-6">
          <img class="img-header mt-1 mb-5" src="{{asset('assets/img/header1.png')}}" alt="" />
        </div>

        <div
          class="d-flex flex-column align-items-center justify-content-center"
          style="min-height: 400px"
        >
          <h3 class="display-3 font-weight-bold text-white">
           @if(Request::path()== '/')
           Beranda
           @elseif(Request::path()== 'gallery')
           Gallery
           @elseif(Request::path()== 'category')
           Category
           @elseif(Request::path()== 'login')
           Login
           @elseif(Request::path()== 'register')
           Registration
           @endif
           </h3>
          <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Beranda</a></p>

          </div>
        </div>
      </div>
    </div>
    </div>
</div>
  
