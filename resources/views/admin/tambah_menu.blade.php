@extends('admin.dashboard')
@section('content')

<div class="container-fluid py-4">
  <div class="card-body">
    <form action="{{route('menu.store')}}" method="post" role="form text-left" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label>Gambar</label>
        <input type="file" class="form-control" name="img">
      </div>
      <div class="mb-3">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama_menu">
      </div>
      <div class="mb-3">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga_menu">
      </div>
      <div class="mb-3">
        <label>Detail</label>
        <textarea name="detail" rows="4" cols="50"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Tambah</button>
      </div>
    </form>
  </div>
</div>

@endsection