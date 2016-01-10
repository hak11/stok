@extends('template.admin_template')


@section('content')

			<div class="box box-primary">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="col-md-6">
                <form method="POST" action="{!! route('proses-regis') 	!!}" class="form-horizontal">
				    {!! csrf_field() !!}

				    <div class="form-group">
				        <label class="col-sm-4 control-label">Nama</label>
				        <div class="col-sm-8">
				        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Contoh : Abdul Jabar Hakim">
				        </div>
				    </div>

				    <div class="form-group">
				        <label class="col-sm-4 control-label">Username</label>
				        <div class="col-sm-8">
				        <input type="text" name="username" value="{{ old('username') }}" class="form-control" placeholder="Contoh : hak11">
				        </div>
				    </div>

				    <div class="form-group">
				        <label class="col-sm-4 control-label">E-Mail</label>
				        <div class="col-sm-8">
				        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Contoh : abduljabar.hakim11@gmail.com">
				        </div>
				    </div>

				    <div class="form-group">
				        <label class="col-sm-4 control-label">Password</label>
				        <div class="col-sm-8">
				        <input type="password" name="password" class="form-control" placeholder="Password">
				        </div>
				    </div>

				    <div class="form-group">
				        <label class="col-sm-4 control-label">Konfimasi Password</label>
				        <div class="col-sm-8">
				        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password">
				        </div>
				    </div>

				    <div class="form-group">
				        <button type="submit" class="btn btn-primary pull-right">Register</button>
				    </div>
				</form>
				</div><!-- col-md-6 -->
				<div class="col-md-6">
					@if(Session::has('message'))
			            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
			                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <i class="icon fa fa-ban"></i>{{ Session::get('message') }}</p>
			        @endif
				</div>
				</div><!-- box body -->
			</div><!-- box - primary -->
			<div class="box box-primary">
				<div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<table id="datatable" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    {{-- */$x=0;/* --}}
                    @foreach ($datauser as $data)
                    <tr>
                       {{-- */$x++;/* --}}
                    	<td>{!! $x !!}</td>
                    	<td>{!! $data->username !!}</td>
                    	<td>{!! $data->name !!}</td>
                    	<td>@if ($data->admin == 1)
                    		admin
                    		@else
                    		user
                    	@endif
                    	</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div><!-- box- body -->
			</div>

			
@endsection