@extends('template.admin_template')

@section('content')


    <div class="box box-primary">
                <div class="box-header">
                 @if(Session::has('message_destroy'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <i class="icon fa fa-ban"></i>{{ Session::get('message_destroy') }}</p>
                @elseif(Session::has('message_update'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <i class="icon fa fa-edit"></i>{{ Session::get('message_update') }}</p>
                @endif
                  <h1><a href="{{ url('master_item/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data</a></h1>
                </div><!-- /.box-header -->
                <div class="box-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th><th>Nama Barang</th><th>Kategori</th><th>Harga</th><th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- */$x=0;/* --}}
                    @foreach($master_item as $item)
                        {{-- */$x++;/* --}}
                        <tr>
                            <td>{{ $x }}</td>
                            <td><a href="{{ url('master_item', $item->id) }}">{{ $item->nama_barang }}</a></td><td>{!! $item->kategori !!}</td><td>{{ $item->harga }}</td>
                            <td>
                                <a href="{{ url('master_item/' . $item->id . '/edit') }}">
                                    <button type="submit" class="btn btn-primary btn-xs"> Ubah </button>
                                </a> ||
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['master_item', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                    {!! Form::submit(' Hapus ', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div><!-- box- body -->
    </div><!-- box - primary -->


@endsection
