<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Edit Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/contents/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/contents/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/contents/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/contents/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/contents/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
  <a class="navbar-brand" href="{{route('home')}}"><img width="150" height= "45" src="{{asset('/contents/image/black.jpg')}}" ></a>

  <div class="navbar-form navbar-right" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <li class="nav-item ">
       <a class="nav-link"> Welcome, {{strtoupper(Session::get('user')->name)}}</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="{{route('userhome.profile',[Session::get('user')->email])}}">Profile </a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="{{route('sell')}}">Sell Car </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
      </li>
     
  
 </ul>
  </div>
</div>
</nav>
</head>
<body>
 <div class="register-box-body">


    <form method="post">


      <div class="form-group has-feedback">
        <input type="text"  autofocus required minlength='4' maxlength='40' value="{{ $user->name }}"   name="name" class="form-control" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>
      
      <div class="form-group has-feedback">
        <input type="password" required maxlength='40' minlength='4' value="{{ $user->password}}"  id="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @foreach ($errors->get('password') as $error)
               <p style="color: red">{{ $error}}</p>
              @endforeach
      </div>


        <!-- /.col -->
        <div class="col-xs-4">
          <button class="btn btn-primary" type="submit">Confirm</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="{{route('home')}}" class="text-center">Back to Home</a>
  </div>
  <!-- /.form-box -->
</div>
<script src="/contents/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/contents/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
