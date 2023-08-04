@extends('admin.dashboard')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">

      <div class="card mb-4">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0 p-4">Tabel Menu</h6>
          </div>
          <div class="col-6 text-end  p-4">
            <a class="btn bg-gradient-dark mb-0 " href="{{route('menu.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Menu</a>
          </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Menu</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Menu</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail Menu</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($menu as $tampilkan)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <img src="{{ asset('images/'.$tampilkan->img) }}" alt="Gambar">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$tampilkan->nama_menu}}</h6>
                      </div>
                    </div>
                  </td>

                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{$tampilkan->harga_menu}}</span>
                  </td>


                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <p class="mb-0 text-sm">{{$tampilkan->detail}}</p>
                      </div>
                    </div>
                  </td>

                  <td class="table-icon-column">
                    <a href="" class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i></a>

                  </td>

                  <!-- <td class="align-middle text-center text-sm">
                        <div class="form-check">
                          <form action="{{ route('admin_tables.update', $tampilkan->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            @if ($tampilkan->role === '1')
                              <input type="hidden" value="0" name="status_akun" >
                              <input type="hidden" value="{{$tampilkan->id}}" name="id_akun" >
                              <label class="form-check-label" for="flexCheckDefault">
                                ganti status akun?
                              </label>
                              <button type="submit" class="btn btn-primary" id="flexCheckDefault">ganti</button>
                            @elseif ($tampilkan->role === '0')
                              <input type="hidden" value="1" name="status_akun" >
                              <input type="hidden" value="{{$tampilkan->id}}" name="id_akun" >
                              <label class="form-check-label" for="flexCheckDefault">
                                ganti status akun?
                              </label>
                              <button type="submit" class="btn btn-primary" id="flexCheckDefault">ganti</button>
                            @endif
                          </form>
                        </div>
                      </td> -->
                </tr>

                @empty
                Kosong

                @endforelse

                {{-- <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>

                      <!-- <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                       -->
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>

                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Refresh
                        </a>
                      </td>
                    </tr> --}}

                {{-- <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>

                      <!-- <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                            </td> -->

                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Refresh
                        </a>
                      </td>
                    </tr> --}}

                {{-- <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Michael Levi</h6>
                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>

                      <!-- <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                            </td> -->

                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Refresh
                        </a>
                      </td>
                    </tr> --}}

                {{-- <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Richard Gran</h6>
                            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                          </div>
                        </div>
                      </td>

                      <!-- <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>
                                             -->
                      <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                            </td>

                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Refresh
                        </a>
                      </td>
                    </tr> --}}

                {{-- <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Miriam Eric</h6>
                            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                          </div>
                        </div>
                      </td>

                      <!-- <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-success">Online</span>
                                            </td>
                                             -->
                      <td class="align-middle text-center text-sm">
                                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                            </td>

                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Refresh
                        </a>
                      </td>
                    </tr> --}}

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
