<html>
<head>
	<title>Delete|Page</title>
</head>
<body>
	<h1>Delete User</h1>

  <form method="post">

		<input type="hidden" value="{{$user->email}}" name="uemail">
		<h2>Are You Sure ??</h2>
		<input type="submit" value="Confirm"/>
	</form>
</body>
</br>
<form action="/adminhome">
  <input type="submit" name="back" value="Back"/>
</form>
</html>
