@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
    <h3>Data Foto</h3>
</div>
<br>

@if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
      @endif

<div class="col-12 col-md-6 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Data Foto</h4>
        <div class="card-body">
          <div class="dropdown d-inline mr-2">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pilih
            </button>
            <div class="dropdown-menu">
             {{-- @foreach ($labs as $lab) --}}
              <a class="dropdown-item" href="/labb/">pp</a>
             {{-- @endforeach --}}

            </div>
          </div>
      </div>
      </div>

      <div class="card-body p-0">
        <div class="table-responsive">
          <a href="/dashboard/photo-data/create" class="btn btn-primary mb-3">Tambah</a>
          <table class="table table-striped table-md">
            <tr>
              <th>#</th>
              <th>Judul Foto</th>
              <th>Deskripsi Foto</th>
              <th>Tanggal Unggah</th>
              <th>Lokasi File</th>
              <th>Album Id</th>
              <th>User Id</th>
            </tr>
            {{-- @foreach ($photo as $photo)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$photo->JudulFoto}}</td>
              <td>{{$photo->DeskripsiFoto}}</td>
              <td>{{$photo->TanggalUnggah}}</td>
              <td>{{$photo->LokasiFile}}</td>
            </tr>
            @endforeach --}}
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        {{-- {!! $inventory->links()!!} --}}
      </div>
    </div>
  </div>
@endsection