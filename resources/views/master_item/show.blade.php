@extends('template.admin_template')

@section('content')

    <h1>Master_item</h1>
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID.</th> <th>Nama Barang</th><th>Kategori</th><th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $master_item->id }}</td> <td> {{ $master_item->nama_barang }} </td><td> {{ $master_item->kategori }} </td><td> {{ $master_item->harga }} </td>
                            </tr>
                        </tbody>    
                    </table>
                </div><!-- box- body -->
            </div><!-- box - primary -->

@endsection