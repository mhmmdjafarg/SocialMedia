<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
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
    <!--PROFILE SECTION-->
    <div class="container px-4">
    <div class="row gx-5">
        <div class="col-3" style="background-color:blue">
        <div class="p-3">
            <div class="text-center">
            <img src="https://upload.wikimedia.org/wikipedia/en/e/ee/Unknown-person.gif" class="rounded" alt="..." style="max-height:200px">
            </div>
        </div>
        </div>
        <div class="col-9" style="background-color:aqua">
        <div class="p-3"> 
            <p style="max-height:200px">NAMA</p>
            <p style="max-height:200px">BIO</p>
            <p>FOLLOWING: $NUMBER</p>
            <p>FOLLOWER: $NUMBER</p>
            <p>POST: $NUMBER</p>
          
        </div>
        </div>
    </div>
    <br>
    <h5>Your Post</h5>
    <br>
    <!--CONTENT SECTION-->
    <!--POST-->
    <div class="row">
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
        </div>
    </div>
    <hr style="visibility:hidden">
     <!--POST-->
     <div class="row">
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
        </div>
    </div>
    <hr style="visibility:hidden">
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


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
