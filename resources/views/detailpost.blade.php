<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Post</title>
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
    <!--CONTENT SECTION-->
    <div class="container">
        <div class="col-9" style="background-color:#91ade6;margin:auto">
            <div style="background-color:#5f91f5">
                <h6>Author</h6>
            </div>
            <div style="background-color:#1f51b5">
                <h6>Username</h6>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies tristique diam, et eleifend ligula volutpat ullamcorper. Nullam suscipit dignissim ante in rutrum. Vivamus tristique, sem et porttitor ultrices, est nibh faucibus quam, id pulvinar purus sapien in lorem. Nam sed lectus eu libero molestie sollicitudin. Ut consectetur felis sed tempus bibendum. Cras tristique, justo in accumsan ultrices, odio massa placerat felis, ac tristique sem ipsum in enim. Proin venenatis nec neque non malesuada. Proin ultricies consequat sodales.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button type="button" class="btn btn-primary btn-lg" style="width:500px">Like</button>
                <button type="button" class="btn btn-secondary btn-lg" style="width:500px">Comment</button>
            </div>
            <h6>Comments</h6>
            <ul class="list-group">
                <li style="list-style-type:none;background-color:#245fa3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies tristique diam, et eleifend ligula volutpat ullamcorper. Nullam suscipit dignissim ante in rutrum. Vivamus tristique, sem et porttitor ultrices, est nibh faucibus quam, id pulvinar purus sapien in lorem. Nam sed lectus eu libero molestie sollicitudin. Ut consectetur felis sed tempus bibendum. Cras tristique, justo in accumsan ultrices, odio massa placerat felis, ac tristique sem ipsum in enim. Proin venenatis nec neque non malesuada. Proin ultricies consequat sodales.</li>
                <hr style="visibility:hidden">
                <li style="list-style-type:none;background-color:#245fa3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies tristique diam, et eleifend ligula volutpat ullamcorper. Nullam suscipit dignissim ante in rutrum. Vivamus tristique, sem et porttitor ultrices, est nibh faucibus quam, id pulvinar purus sapien in lorem. Nam sed lectus eu libero molestie sollicitudin. Ut consectetur felis sed tempus bibendum. Cras tristique, justo in accumsan ultrices, odio massa placerat felis, ac tristique sem ipsum in enim. Proin venenatis nec neque non malesuada. Proin ultricies consequat sodales.</li>
                <hr style="visibility:hidden">
                <li style="list-style-type:none;background-color:#245fa3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies tristique diam, et eleifend ligula volutpat ullamcorper. Nullam suscipit dignissim ante in rutrum. Vivamus tristique, sem et porttitor ultrices, est nibh faucibus quam, id pulvinar purus sapien in lorem. Nam sed lectus eu libero molestie sollicitudin. Ut consectetur felis sed tempus bibendum. Cras tristique, justo in accumsan ultrices, odio massa placerat felis, ac tristique sem ipsum in enim. Proin venenatis nec neque non malesuada. Proin ultricies consequat sodales.</li>
                <hr style="visibility:hidden">
                <li style="list-style-type:none;background-color:#245fa3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies tristique diam, et eleifend ligula volutpat ullamcorper. Nullam suscipit dignissim ante in rutrum. Vivamus tristique, sem et porttitor ultrices, est nibh faucibus quam, id pulvinar purus sapien in lorem. Nam sed lectus eu libero molestie sollicitudin. Ut consectetur felis sed tempus bibendum. Cras tristique, justo in accumsan ultrices, odio massa placerat felis, ac tristique sem ipsum in enim. Proin venenatis nec neque non malesuada. Proin ultricies consequat sodales.</li>
                <hr style="visibility:hidden">
            </ul>
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

 <!--POST-->
 <div class="row">
    
</div>
<hr style="visibility:hidden">