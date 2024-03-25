@extends('dashboard.layout.main');

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-4 border-bottom">
    <h3>Tambah Foto</h3>
</div>
<br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Gallery Foto</h4>
              </div>

              <form method="post" action="{{ route('photo-data.store') }}" class="mb-5" enctype="multipart/form-data">
                @csrf
                <input type="hidden" >
              <div class="card-body">
              <div class="form-group row mb-4">
                <label for="JudulFoto" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Foto</label>
                <div class="col-sm-12 col-md-7">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('JudulFoto') is-invalid @enderror" type="file" id="JudulFoto" name="JudulFoto" onchange="previewImage()">
                </div>
              </div>
              @error('JudulFoto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror

              <div class="form-group row mb-4">
                <label for="DeskripsiFoto" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                @error('DeskripsiFoto')
                <p class="text-danger">{{ $message }}</p> 
                @enderror
                <div class="col-sm-12 col-md-7">
                  <textarea id="body" type="hidden" name="body" value="{{ old('body') }}" class="summernote-simple"></textarea>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Unggah</label>
                <div class="col-sm-12 col-md-7">
                    <input type="datetime-local" name="finished" class="form-control">
                </div>
              </div>
              
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi File</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric">
                    <option>Makanan</option>
                    <option>Minuman</option>
                    <option>Ice Cream</option>
                    <option>Toping</option>
                    <option>Toko</option>
                    <option>Acara</option>
                  </select>
                </div>
              </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-primary">Publish</button>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>

        <script>
            function previewImage() {
                const image = document.querySelector('#JudulFoto');
                const imgPreview = document.querySelector('.img-preview');
            
                imgPreview.style.display = 'block';
            
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
            
                oFReader.onload = function(oFREvent) {
                  imgPreview.src = oFREvent.target.result;
                }
            }
            </script>

@endsection