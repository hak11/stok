<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{!! Session::get('title')->nama !!}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('/bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/bower_components/AdminLTE/plugins/iCheck/square/blue.css') }}">
  <link rel="stylesheet" href="{{ asset('/bower_components/AdminLTE/bootstrap/css/custom-login.css') }}">

</head>
<div id="wrap">
  <div id="main">
<body class="hold-transition login-page">
<div class="container-fluid">

  <div class="col-md-3 bg-login">
  <div class="col-md-12">
    <div class="login-box">
      <div class="login-logo">
        <a href="#">{!! Session::get('nama_aplikasi')->nama !!}</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">
          @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <i class="icon fa fa-ban"></i>{{ Session::get('message') }}</p>
          @else
            <p>Silakan Login</p>
          @endif
        {!! Form::open(['route' => 'proses-login']) !!}
          <div class="form-group has-feedback">
            {!! Form::text('username', null, ['class' => 'form-control','placeholder' => 'Username']) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
                  <input type="checkbox" name="remember"> Remember Me
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        {!! Form::close() !!}
      </div><!-- login box body -->
    </div><!-- login box -->
    </div>
    <div class="col-md-12">
     <div class="box box-solid">
     <div class="box-header with-border">
                  <h3 class="box-title">Pengambilan Barang Antar Deparment</h3>
                </div><!-- /.box-header -->
                 <div class="box-body">
                 @foreach ($area as $nilai)
                    <div class="progress-group">
                        <span class="progress-text">{!! $nilai->nama !!} ( {!! $nilai->lokasi !!} )</span>
                        <span class="progress-number"><b>50</b>/{!! $nilai->max  !!}</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-{!! $nilai->color !!}" style="width: 50%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                 @endforeach
                  </div>
                  </div>
      </div>
  </div>
  <div class="col-md-9 login-info">

                <div class="box-body">
                      <div class="row">
                        <div class="col-md-12">
                          <!-- AREA CHART -->
                          <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Grafik Pengeluaran dan Pemasukan</h3>

                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <div class="box-body">
                              <div class="chart">
                                <canvas id="areaChart" style="height:250px"></canvas>
                              </div><!-- chart -->
                            </div> <!-- box-body -->
                          </div> <!-- box box-primary -->
                        </div> <!-- col-md-12 -->
                      </div> <!--row-->

                      <div class="box box-solid">

                            <div class="box-header with-border">
                              <h3 class="box-title">Pengumuman Informasi</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                              <div class="box-group" id="accordion">
                              <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                              <?php $val = 1; ?>
                                @foreach ($pengumuman_informasi as $nilai)
                                  <?php $val=$val ?>
                                  <div class="panel box box-{!!  $nilai->nama !!}">
                                  <div class="box-header with-border">
                                    <h4 class="box-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse{!! $val !!}">
                                        {!!  $nilai->judul !!}
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapse{!! $val !!}" class="panel-collapse collapse @if ($val==1)
                                    in
                                  @endif">
                                    <div class="box-body">
                                        {!! $nilai->deskripsi !!}
                                    </div>
                                  </div>
                            </div>
                                  <?php $val++ ?>
                                @endforeach
                          </div><!-- box - group -->
                        </div>  <!-- box-body -->
                      </div>
              </div>
</div>
</body>
</div>
</div>
<div id="footer">
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <strong>Copyright &copy; Januari 2016 <a href="https://www.facebook.com/Jaberisme" target="_blank">Abdul Jabar Hakim</a>.</strong> AdminLTE Support
        </div>
      </footer>
</div>
<!-- jQuery 2.1.4 -->
<script src="{{ asset('/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('/bower_components/AdminLTE/plugins/iCheck/icheck.min.js') }}"></script>

<script src="{{ asset('/bower_components/AdminLTE/plugins/chartjs/Chart.min.js') }}"></script>

<script src="{{ asset('/bower_components/AdminLTE/dist/js/app.min.js') }}"></script>
<script>
  $(function () {
    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["January", "February", "March", "April", "May", "June", "July","Agustus", "September", "Oktober", "November"],
      datasets: [
        {
          label: "Electronics",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40, 60, 55, 40, 60, 60]
        },
        {
          label: "Digital Goods",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 86, 27, 90, 30, 55, 40, 60, 60]
        }
      ]
    };


    //Create the line chart
    areaChart.Line(areaChartData);

   
  });
</script>
</html>
