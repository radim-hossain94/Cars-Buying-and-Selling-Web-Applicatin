<!DOCTYPE html>
<html>
<head>
  <title img width="150" height= "45" src="{{asset('/contents/image/black.jpg')}}">Car Bazar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Tell the browser to be responsive to screen width -->

  <!-- Bootstrap 3.3.7 -->
  <!-- Font Awesome -->

  <!-- Ionicons -->

  <!-- Theme style -->


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
  <a class="navbar-brand" href=""><img width="150" height= "45" src="{{asset('/contents/image/black.jpg')}}" ></a>

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
        <li class="nav-item ">
        <a class="nav-link" href="{{route('report')}}">Report </a>
      </li>
         <li>


       <a class="nav-link" href="{{route('search.live_search')}}">Search</a>

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
      <div class="row" id="carContainer">
        @foreach($car as $row)
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img src="contents/image/car/{{$row->image}}" alt="" width="100px" height="80px" alt="My desktop">
              <div class="caption">
                  <h3>{{ $row->model }}</h3>
                  <p>Brand: {{ $row->brand }}</p>
                  <p>Total Mileage: {{ $row->mileage }}</p>
                  <p>Price: {{ $row->price }}</p>
                  @if($row->user_email==Session::get('user')->email)
                   <p><a href="{{route('userhome.editpost',[$row->id])}}" class="btn btn-primary" role="button">Edit</a> <a href="{{route('userhome.deletepost',[$row->id])}}" class="btn btn-danger" role="button">Delete</a></p>
                  @else
                   <p><a href="{{route('userhome.buy',[$row->id])}}" class="btn btn-primary" role="button">Buy</a></p>
                  @endif

                </div>
              </div>
           </div>
         @endforeach


      </div>

      </div>
<!--       <table>
      @foreach($car as $row)
      <tr>
      <td>{{ $row->brand }}</td>

      <td>{{ $row->model }}</a></td>
      <td>{{ $row->mileage }}</td>
      <td>{{ $row->price }}</td>
      <td><img src="contents/image/car/{{$row->image}}" alt="" width="100px"></td>



          </td>

    </tr>
          @endforeach
        </table>
     -->



  <script src="/contents/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/contents/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/contents/plugins/iCheck/icheck.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
