@extends('template.admin_template')

@section('content')

    <h1>Master_area</h1>
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID.</th> <th>Nama Area</th><th>Pj</th><th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $master_area->id }}</td> <td> {{ $master_area->nama_area }} </td><td> {{ $master_area->pj }} </td><td> {{ $master_area->keterangan }} </td>
                            </tr>
                        </tbody>    
                    </table>
                </div><!-- box- body -->
            </div><!-- box - primary -->

@endsection