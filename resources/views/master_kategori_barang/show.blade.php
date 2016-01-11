@extends('template.admin_template')

@section('content')

    <h1>Master_kategori_barang</h1>
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID.</th> <th>Nama Kategori</th><th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $master_kategori_barang->id }}</td> <td> {{ $master_kategori_barang->nama_kategori }} </td><td> {{ $master_kategori_barang->keterangan }} </td>
                            </tr>
                        </tbody>    
                    </table>
                </div><!-- box- body -->
            </div><!-- box - primary -->

@endsection