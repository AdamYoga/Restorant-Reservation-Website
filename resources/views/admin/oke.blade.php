@extends('admin.dashboard')
@section('content')

   
         
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
          <!-- <div class="ms-2 me-2 py-2 d-flex align-items-center justify-content-center" style="width: 95%; height: auto; background-color: pink; overflow-x: hidden; flex-wrap: wrap;">
            <input type="hidden" name="jumlah_item" value="{{$tampilkan->id}}" style="background: none; border-style: none; width: 100px;"/>
            <button type="submit" class="btn btn-primary" style="font-size: smaller; background-color: rgb(57, 122, 182);">Kirim</button>
            <input type="hidden" value="<?php echo date('l');?>" name="hari"/>
            {{-- <input type="hidden" value="<?php echo $simpan_banyak_penjualan; ?>" name="banyak_penjualan"/> --}}
          </div> -->

          {{-- harga --}}

          <!-- tombol submit -->
          
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