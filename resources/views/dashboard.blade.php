<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1" data-bs-whatever="@mdo">Tambah Data Barang</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2" data-bs-whatever="@fat">Tambah Data Pembeli</button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal3" data-bs-whatever="@getbootstrap">Laporan Transaksi</button>
                           
                            <div class="card-body">
                                <h2>Transaksi</h2>
                                <div class="container">
                                    <form action="<form action="{{route('transaction.store')}}" method="POST">
                                        @csrf
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Kode</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <input type="text" required class="form-control" name="name" />
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Tanggal</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <input type="email" required class="form-control" name="email" />
                                            </div>
                                        </div>
                                        <h2>Data Pembeli</h2>
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Kode Pembeli</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <select class="form-control" name="kode" id="kode">
                                                    <option data-id='null'>Pilih Kode Pembeli</option>
                                                    {{-- @foreach($ListCustomer as $cust) --}}
                                                    {{-- <option value="{{$cust->id}}" data-id='{{$cust->id}}'>{{$cust->name}}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Nama Pembeli</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <input type="text" required class="form-control" name="name" disabled/>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Nomor Telepon</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <input type="text" required class="form-control" name="telp" disabled/>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button class="btn btn-primary">Simpan Data</button>
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
                </div>
            </div>
        </div>
    </form>
    </div>
</x-app-layout>
