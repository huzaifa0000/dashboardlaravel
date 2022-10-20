<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" placeholder="Enter email">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" placeholder="Password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></body>

{{session('message')}}
</html>