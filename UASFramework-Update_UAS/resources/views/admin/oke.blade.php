@extends('admin.dashboard')
@section('content')

    <div class="ms-2 me-2 py-2 d-flex align-items-center justify-content-center" style="width: 95%; height: auto; background-color: none; overflow-x: hidden; flex-wrap: wrap;">
        <form action="{{route('admin_dashboard.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="d-flex align-items-center justify-content-center">Form Pemesanan</div>
          <div class="mb-3">
            <label for="label_nama" class="form-label">Nama Lengkap</label>
            <input type="name" class="form-control" id="label_nama"  name="nama" required>
          </div>

          <div class="mb-3">
            <label for="label_telepon" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="label_telepon" name="no_telepon" required>
          </div>

          <div class="mb-3">
            <label for="label_alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="label_alamat" name="alamat" required>
          </div>

          <div class="mb-3">
            <label for="label_catatan" class="form-label">Catatan</label>
            <input type="text" class="form-control" id="label_catatan" name="catatan">
          </div>

          <label for="label_bayar" class="form-label">bukti bayar</label>
          <input type="file" class="form-control" name="bukti_bayar" id="label_bayar" required>
      </div>
          <!-- Pemilihan menu -->
          <div class="ms-2 me-2 py-2 d-flex align-items-center justify-content-center" style="width: 95%; height: auto; background-color: pink; overflow-x: hidden; flex-wrap: wrap;">
            @forelse ($kirim as $tampilkan)
            <!-- Mulai Pemesanan Item -->
            <div class="card ms-2 me-2 mt-2 d-flex align-items-center justify-content-center" style="width: 40%;">
              <img class="d-flex w-100" style="width: fit-content;" src="assets/img/menu/{{$tampilkan->nama_menu}}.jpg" alt="image">
              <div class="card-body">
                <?php 
                  $tempat = $tampilkan->nama_menu;
                  $hasil = preg_replace("/-/", " ", $tempat);
                ?>
                <h5 class="card-title" style="font-size: medium;"><?php echo $hasil; ?></h5>
                
                <h5 class="card-title" style="font-size: small; font-style: italic;">{{$tampilkan->harga_menu}}</h5>
                
                <input type="hidden" value="{{$tampilkan->harga_menu}}" name="harga_menu{{$tampilkan->id}}"/>
                <input type="hidden" value="{{$hasil}}" name="nama_menu{{$tampilkan->id}}"/>
                <input type="number" name="item{{$tampilkan->id}}" value="" placeholder="tulis jumlah pesanan" min="0" max="50" style="width: 200px;"/>
                
                {{-- <div class="quantity-counter">
                  <button id="counter-decrement" class="decrement">-</button>
                  <input id="counter-value" class="value" type="number" value="0" min="0" max="200" name="item{{$tampilkan->id}}">
                  <button id="counter-increment" class="increment">+</button>
                </div> --}}
              </div>
            </div>
            
            @empty
              Kosong
            @endforelse
            <!-- Akhir Pemesanan Item -->
          </div>
          <!-- Pemilihan menu -->

          <?php 
            $iterasi = 0;
            $simpan_hari = [];
            $simpan_banyak_penjualan = [];
            foreach ($kirim_juga as $tampilkan) {
              $simpan_hari[] = $tampilkan->hari;
              $simpan_banyak_penjualan[] = $tampilkan->banyak_penjualan;
            }
            $simpan_banyak_penjualan = implode(', ', $simpan_banyak_penjualan);
          ?>

          {{-- harga --}}
          <div class="ms-2 me-2 py-2 d-flex align-items-center justify-content-center" style="width: 95%; height: auto; background-color: pink; overflow-x: hidden; flex-wrap: wrap;">
            <input type="hidden" name="jumlah_item" value="{{$tampilkan->id}}" style="background: none; border-style: none; width: 100px;"/>
            <button type="submit" class="btn btn-primary" style="font-size: smaller; background-color: rgb(57, 122, 182);">Kirim</button>
            <input type="hidden" value="<?php echo date('l');?>" name="hari"/>
            {{-- <input type="hidden" value="<?php echo $simpan_banyak_penjualan; ?>" name="banyak_penjualan"/> --}}
          </div>

          {{-- harga --}}

          <!-- tombol submit -->
          <div class="ms-2 me-2 py-2 d-flex align-items-center justify-content-center" style="width: 95%; height: auto; background-color: pink; overflow-x: hidden; flex-wrap: wrap;">
          </div>
          <!-- tombol submit -->
      </form>

        <div class="row mt-4">
          {{-- <div class="col-lg-5 mb-lg-0 mb-4"> --}}
            {{-- <div class="card z-index-2">
              
            </div> --}}
          {{-- </div> --}}
        </div>
        <div class="col-lg-7" style="mt-4">
          <div class="card z-index-2">
            <div class="card-header pb-0">
              <h6>Statistika Penjualan</h6>
              {{-- <p class="text-sm">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">4% more</span> in 2021
              </p> --}}
            </div>
            <div class="card-body p-3">
              
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
              {{-- <div class="chart"> --}}
                <canvas id="chart-bars" class="chart-canvas" height="10"></canvas>
              {{-- </div> --}}
            </div>
          </div>
        </div>
      </div>


      

@endsection