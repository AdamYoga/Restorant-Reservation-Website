@extends('admin.dashboard')
@section('content')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ganti Status</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($kirim as $tampilkan)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$tampilkan->name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$tampilkan->email}}</p>
                          </div>
                        </div>
                      </td>
                      
                      <td class="align-middle text-center text-sm">
                        {{-- <span class="badge badge-sm bg-gradient-success">{{$tampilkan->role}}</span> --}}
                        @if ($tampilkan->role === '1') 
                          <span class="badge badge-sm bg-gradient-success">Admin</span>
                        @elseif ($tampilkan->role === '0') 
                          <span class="badge badge-sm bg-gradient-secondary">Pengguna</span> 
                        @endif 
                      </td>

                      <td class="align-middle text-center text-sm">
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