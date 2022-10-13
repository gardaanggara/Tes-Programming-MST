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
                    <div class="d-flex">                  
                        <button type="button" class="btn btn-primary flex-fill" data-bs-toggle="modal" data-bs-target="#modal1" data-bs-whatever="@mdo">Tambah Data Barang</button>
                        <button type="button" class="mx-2 btn btn-secondary flex-fill" data-bs-toggle="modal" data-bs-target="#modal2" data-bs-whatever="@fat">Tambah Data Pembeli</button>
                        <button type="button" class="btn btn-success flex-fill" data-bs-toggle="modal" data-bs-target="#modal3" data-bs-whatever="@getbootstrap">Laporan Transaksi</button>
                    </div>      
                            <div class="card-body">
                                <h2>Transaksi</h2>
                                <div class="container">
                                    <form action="{{route('transaction.store')}}" method="POST">
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
                                        <h2 class="mt-3">Data Pembeli</h2>
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Kode Pembeli</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <select class="form-control" name="kode" id="kodepembeli">
                                                    <option data-id='null' >Pilih Pembeli</option>
                                                    @foreach($Cust as $kd)
                                                        <option value="{{$kd->id}}" 
                                                            data-id='{{$kd->id}}' 
                                                            data-nama='{{$kd->nama}}'
                                                            data-telp='{{$kd->telp}}'
                                                            >Kode {{$kd->id}} - {{$kd->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Nama Pembeli</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <input type="text" required class="form-control" id="name" name="name" disabled/>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center mb-4">
                                            <div class="col">
                                                <label>Nomor Telepon</label>
                                            </div>
                                            <div class="col-12 col-md">
                                                <input type="text" required class="form-control" id="telp" name="telp" disabled/>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal4" data-bs-whatever="@getbootstrap">Tambah Pemesanan</button>
                                        <div class="table-responsive">
                                            <table class="table mt-3">
                                                <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Aksi</th>
                                                    <th scope="col">Kode</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Diskon (%)</th>
                                                    <th scope="col">Diskon (Rp.)</th>
                                                    <th scope="col">Harga Diskon</th>
                                                    <th scope="col">Total Bayar</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    <div class="text-end">
                                        <button class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            

                            <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Masukan Data Pembeli</h5>
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
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </form>
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
                                                  Pilih Barang
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    @foreach ($Barang as $item)
                                                    <li><a class="dropdown-item" value="{{$item->id}}" data-id="{{$item->id}}">Kode Barang - {{$item->kode}} - {{$item->nama}}</a></li>
                                                    @endforeach
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="mb-3">
                                              <label for="exampleInputEmail1" class="form-label">Jumlah Pembelian</label>
                                              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                              <div id="emailHelp" class="form-text">Masukkan Jumlah Pembelian</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Pilih Barang Lagi?</label>
                                                <button type="submit" class="btn btn-primary">Pilih</button>
                                              </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Ke Pembayaran</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="text/javascript">
        <script type="text/javascript">
            jQuery(document).ready(function (){
                jQuery('select[name="kode"]').on('change', function(){
                    var id = jQuery(this).val();

                    nama = $(this).find(':selected').attr('data-nama');
                    $('#nama').val(nama);
                    telp = $(this).find(':selected').attr('data-telp');
                    $('#telp').val(telp);

                    if(id)
                    {
                        jQuery.ajax({
                            url : 'identitaspembeli/' +id,
                            type : "GET",
                            dataType : "json",
                            success:function(data)
                            {
                                console.log(data);
                                jQuery.each(data, function(key, value){
                                    $('input[name="nama"]').val(value);
                                })
                            }
                        })
                    }
                })
            })
        </script>
    </x-slot>
</x-app-layout>
