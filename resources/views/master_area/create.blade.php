@extends('template.admin_template')

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-6">
                {!! Form::open(['url' => 'master_area', 'class' => 'form-horizontal']) !!}

                            <div class="form-group {{ $errors->has('nama_area') ? 'has-error' : ''}}">
                {!! Form::label('nama_area', 'Nama Area: ', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('nama_area', null, ['class' => 'form-control', 'required' => 'required','tabindex' => 1]) !!}
                    {!! $errors->first('nama_area', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pj') ? 'has-error' : ''}}">
                {!! Form::label('pj', 'Pj: ', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('pj', null, ['class' => 'form-control', 'required' => 'required','tabindex' => 2]) !!}
                    {!! $errors->first('pj', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
                {!! Form::label('keterangan', 'Keterangan: ', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::textarea('keterangan', null, ['class' => 'form-control', 'required' => 'required','tabindex' => 3]) !!}
                    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                <div class="form-group pull-right">
                    {!! Form::submit('Tambah', ['class' => 'btn btn-primary','tabindex' => 4]) !!} ||
                    <a href="{{ url('master_area') }}" class="btn btn-warning" tabindex="5">Kembali</a>
                </div>
                {!! Form::close() !!}
            </div><!-- col-md-6 -->

            <div class="col-md-6">
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <i class="icon fa fa-check"></i>{{ Session::get('message') }}</p>
                    @endif
            </div>
        </div><!-- box body -->
    </div><!-- box - primary -->
@endsection