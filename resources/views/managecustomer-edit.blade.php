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
                                
                                        <h2> Data Pembeli </h2>
                                        <div class="card-body">
                                            <div class="container">
                                                <form action="{{route('customer.update', $cust->id)}}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group row align-items-center mb-4">
                                                        <div class="col">
                                                            <label>Kode</label>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <input type="text" required class="form-control" name="kode" value="{{$cust->kode}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-4">
                                                        <div class="col">
                                                            <label>Nama</label>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <input type="tet" required class="form-control" name="name" value="{{$cust->name}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-4">
                                                        <div class="col">
                                                            <label>No Telepon</label>
                                                        </div>
                                                        <div class="col-12 col-md">
                                                            <input type="text" required class="form-control" name="telp" value="{{$cust->telp}}"/>
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
