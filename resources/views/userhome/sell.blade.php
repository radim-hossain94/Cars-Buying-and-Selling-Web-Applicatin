<!DOCTYPE html>
<html>
<head>
  <title img width="150" height= "45" src="{{asset('/contents/image/black.jpg')}}">Car Bazar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <!-- Tell the browser to be responsive to screen width -->
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
  <div class="container">
  <a class="navbar-brand" href="{{route('home')}}"><img width="150" height= "45" src="{{asset('/contents/image/black.jpg')}}" ></a>

  <div class="navbar-form navbar-right" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <li class="nav-item ">
       <a class="nav-link"> Welcome {{strtoupper(Session::get('user')->name)}}</a>
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
  <div class="container">
    <br> {{-- @if($errors->any()) @foreach($errors->all() as $err)
    <div class="alert alert-danger">
      {{$err}}
    </div>
    @endforeach @endif --}}

    <div class="col-md-6">
          <!-- general form elements -->
          
            <!-- /.box-header -->
            <!-- form start -->
           
            <form role="form" method="Post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="brand">Brand</label>
                  <font color="red" size="5"> *</font>
                  <input type="text" class="form-control" name="brand" value="{{old('brand')}}" id="brand" placeholder="Brand">
                </div>
                 <font color="red" size="3"> {{$errors->first('brand')}}</font>
                <div class="form-group">
                  <label for="model">Model</label>
                  <font color="red" size="5"> *</font>
                  <input type="text" class="form-control" name="model" value="{{old('model')}}" id="model" placeholder="Model">
                </div>
                 <font color="red" size="3"> {{$errors->first('model')}}</font>
                  <div class="form-group">
                  <label for="mileage">Mileage</label>
                  <font color="red" size="5"> *</font>
                  <input type="text" class="form-control" name="mileage" value="{{old('mileage')}}" id="mileage" placeholder="Mileage">
                </div>
                 <font color="red" size="3"> {{$errors->first('mileage')}}</font>
                 <div class="form-group">
                  <label for="price">Price</label>
                  <font color="red" size="5"> *</font>
                  <input type="text" class="form-control" name="price" value="{{old('price')}}" id="price" placeholder="Price">
                </div>
                 <font color="red" size="3"> {{$errors->first('price')}}</font>
                <div class="form-group">
                  <label for="image">File input</label>
                  <font color="red" size="5"> *</font>
                  <input type="file" name="image" value="{{old('image')}} id="image">
                </div>
                 <font color="red" size="3"> {{$errors->first('image')}}</font>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>


<script src="/contents/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/contents/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>