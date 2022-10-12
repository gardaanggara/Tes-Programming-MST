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
                                
                                        <h2> Data Barang </h2>
                                        <div class="card-body">
                                            <div class="container">
                                                <form action="{{route('barang.update', $barang->id)}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group row align-items-center mb-4">
                                                        <div class="col">
                                                            <label>Kode</label>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <input type="text" required class="form-control" name="kode" value="{{$barang->kode}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-4">
                                                        <div class="col">
                                                            <label>Nama</label>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <input type="tet" required class="form-control" name="nama" value="{{$barang->nama}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-4">
                                                        <div class="col">
                                                            <label>Harga</label>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <input type="text" required class="form-control" name="harga" value="{{$barang->harga}}"/>
                                                        </div>
                                                    </div>
                                                <div class="text-end">
                                                    <button class="btn btn-primary">Simpan Data</button>
                                                </div>
                                            </form>
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
