<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                            <div class="card-body">
                                
                                        <h2> Daftar Pembeli </h2>
                                        <div class="table-responsive">
                                            <table class="table mt-3">
                                                <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Kode</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">No Telepon</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($ListPembeli as $key => $d)
                                                    <td>{{$key+1 }}</td>
                                                    <td>{{$d->kode }}</td>
                                                    <td>{{$d->name }}</td>
                                                    <td>{{$d->telp}}</td>
                                                    <td>
                                                        <form action="{{ route('customer.destroy', $d->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('customer.edit', $d->id) }}" class="btn btn-success">Edit</a>
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">
                                                                Hapus
                                                            </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                            

                            <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Masukan Data Barang</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('barang.store')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Kode</label>
                                                <input type="text" class="form-control" name="kode">
                                                <div id="emailHelp" class="form-text">Isi sesuai data yang akan dimasukkan</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama">
                                                <div id="emailHelp" class="form-text">Isi sesuai data yang akan dimasukkan</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Harga</label>
                                                <input type="text" class="form-control" name="harga">
                                                <div id="emailHelp" class="form-text">Isi sesuai data yang akan dimasukkan</div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Masukan Data Pembeli</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('customer.store')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Kode</label>
                                                <input type="text" class="form-control" name="kode">
                                                <div id="emailHelp" class="form-text">Isi sesuai data yang akan dimasukkan</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="name">
                                                <div id="emailHelp" class="form-text">Isi sesuai data yang akan dimasukkan</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" name="telp">
                                                <div id="emailHelp" class="form-text">Isi sesuai data yang akan dimasukkan</div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                          <form>
                                            <div class="d-flex justify-content-between">
                                              <label for="exampleInputEmail1" class="form-label">Pilih Barang</label>
                                                <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Dropdown button
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="mb-3">
                                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                              <label for="exampleInputPassword1" class="form-label">Password</label>
                                              <input type="password" class="form-control" id="exampleInputPassword1">
                                            </div>
                                            <div class="mb-3 form-check">
                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</x-app-layout>
