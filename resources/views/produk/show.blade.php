@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Produk</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.produk') }}" class="btn btn-sm btn-danger">
                                Tutup
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Kode Produk</td>
                                    <td>
                                        FF-1
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>Nugget</td>
                                </tr>
                                <tr>
                                    <td>Qty</td>
                                    <td>40 pcs</td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>Rp. 25.0000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Foto Produk</h3>
                     </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <img src="{{ asset('assets/image/ff1.jpeg') }}" alt="image" class="img-thumbnail mb-2">
                                <button class="btn-sm btn-danger btn">
                                    Delete
                                </button>
                            </div>
                            <div class="col-md-3 mb-2">
                                <img src="{{ asset('assets/image/n7.jpg') }}" alt="image" class="img-thumbnail mb-2">
                                <button class="btn-sm btn-danger btn">
                                    Delete
                                </button>
                            </div>
                            <div class="col-md-3 mb-2">
                                <img src="{{ asset('assets/image/n3.jpg') }}" alt="image" class="img-thumbnail mb-2">
                                <button class="btn-sm btn-danger btn">
                                    Delete
                                </button>
                            </div>
                            <div class="col-md-3 mb-2">
                                <img src="{{ asset('assets/image/n4.jpg') }}" alt="image" class="img-thumbnail mb-2">
                                <button class="btn-sm btn-danger btn">
                                    Delete
                                </button>
                            </div>
                            <div class="col-md-3 mb-2">
                                <img src="{{ asset('assets/image/n2.jpg') }}" alt="image" class="img-thumbnail mb-2">
                                <button class="btn-sm btn-danger btn">
                                    Delete
                                </button>
                            </div>
                            <div class="col-md-3 mb-2">
                                <img src="{{ asset('assets/image/n5.jpe') }}" alt="image" class="img-thumbnail mb-2">
                                <button class="btn-sm btn-danger btn">
                                    Delete
                                </button>
                            </div>
                            <div class="col-md-3 mb-2">
                                <img src="{{ asset('assets/image/n6.jpg') }}" alt="image" class="img-thumbnail mb-2">
                                <button class="btn-sm btn-danger btn">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
