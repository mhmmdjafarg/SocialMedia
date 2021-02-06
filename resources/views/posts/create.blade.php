<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 @include('adminlte.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('adminlte.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="container">
        <div class="mb-3">
        <div class="card-header">
            <h3 class="card-title">Post new</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="/posts" method="POST">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="caption" class="form-label">Caption</label>
                <textarea class="form-control" id="caption" name="caption" rows="3" placeholder="Enter Your Caption"></textarea>
                @error('caption')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <div class="row">
                  <div class="col-6">
                      <button type="submit" class="btn btn-primary">Post</button>
                  </div>
                  <div class="col-6">
                      <a href="/posts"><button type="button" class="btn btn-secondary btn-lg">Cancel</button></a>
                  </div>
              </div>
            </div>
          </form>
        </div>
        
    </div>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong> Format:&copy;AdminLTE.  </strong> 
    <div class="float-right d-none d-sm-block">
        <strong>Used by: Feihan,Jafar,Rahmat</strong>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/adminlte/dist/js/demo.js')}}"></script>
@stack('script')
</body>
</html>
