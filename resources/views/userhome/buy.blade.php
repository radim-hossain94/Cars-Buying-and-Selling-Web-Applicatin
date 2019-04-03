<html>

<head>
	<title>Confirm Buy</title>
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


<body>
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
        <a class="nav-link" href="">Profile </a>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

<body>
	<script>

		function checkcrd(form){

	var a = document.forms["myform"]["myfield1"].value;

	var check = /^(?:3[47][0-9]{13})$/;

	if(!a.match(check)){
		alert("Not a valid Amercican Express credit card number!");
    return false;
	}
}

</script>
<div align="center">
	<form id="myform" onsubmit="return checkcrd(this);" method="post">
		<input type="hidden" value="{{$user->id}}" name="uid" />
		Card number: <input type="text" id="myfield1" name="fld1">

		<input class="btn btn-primary" type="submit" id="sub" name="sub">
	</form>
</div>
</body>

</html>
