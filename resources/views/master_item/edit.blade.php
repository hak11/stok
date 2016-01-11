@extends('template.admin_template')

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-6">
            {!! Form::model($master_item, [
                'method' => 'PATCH',
                'url' => ['master_item', $master_item->id],
                'class' => 'form-horizontal'
            ]) !!}

                        <div class="form-group {{ $errors->has('nama_barang') ? 'has-error' : ''}}">
                {!! Form::label('nama_barang', 'Nama Barang: ', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('nama_barang', null, ['class' => 'form-control', 'required' => 'required','tabindex' => 1]) !!}
                    {!! $errors->first('nama_barang', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('kategori') ? 'has-error' : ''}}">
                {!! Form::label('kategori', 'Kategori: ', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::number('kategori', null, ['class' => 'form-control', 'required' => 'required' ,'tabindex' => 2]) !!}
                    {!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
                {!! Form::label('harga', 'Harga: ', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::number('harga', null, ['class' => 'form-control', 'required' => 'required' ,'tabindex' => 3]) !!}
                    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('distributor') ? 'has-error' : ''}}">
                {!! Form::label('distributor', 'Distributor: ', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('distributor', null, ['class' => 'form-control','tabindex' => 4]) !!}
                    {!! $errors->first('distributor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group pull-right">
                {!! Form::submit('Update', ['class' => 'btn btn-primary','tabindex' => 5]) !!} || 
                <a href="{{ route('master-item') }}" class="btn btn-warning" tabindex="6">Kembali</a>
            </div>
            {!! Form::close() !!}
            </div><!-- col-md-6 -->
            
            <div class="col-md-6">
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <i class="icon fa fa-ban"></i>{{ Session::get('message') }}</p>
                    @endif
            </div>   
        </div><!-- box body -->
    </div><!-- box - primary -->
@endsection