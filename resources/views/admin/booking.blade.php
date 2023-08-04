@extends('admin.dashboard')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">

      <div class="card mb-4">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <h6 class="mb-0 p-4">Tabel Booking</h6>
          </div>
          <div class="col-6 text-end  p-4">
            <!-- <a class="btn bg-gradient-dark mb-0 " href="{{route('menu.create')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Menu</a> -->
          </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pemesan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email Pemesan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No. Telpon Pemesan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pemesanan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jam Pemesanan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Orang</th>`
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bukti Pembayaran</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($pemesanan as $pesan)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$pesan->name}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$pesan->email}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$pesan->phone}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$pesan->date}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$pesan->time}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$pesan->people}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <img href="{{ asset('storage/bukti/'.$pesan->encrypted_filename)}}" alt="Gambar">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <form method="POST" action="{{ route('booking.update', ['id' => $pesan->id]) }}">
                          @csrf
                          @method('PUT')
                          <select name="status" onchange="this.form.submit()">
                            <option value="Not Accepted" {{ $pesan->status === 'Not Accepted' ? 'selected' : '' }}>Not Accepted</option>
                            <option value="Accepted" {{ $pesan->status === 'Accepted' ? 'selected' : '' }}>Accepted</option>
                          </select>
                        </form>
                      </div>
                    </div>
                  </td>


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
