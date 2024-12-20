<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login</title>
    <link rel="stylesheet" href="css\design.css">
</head>
<body>

@if(Session::has('pesanlogin'))
<div class="alert alert-success" data-bs-dismiss="alert" style="background-color:white;">

{{Session::get('pesanlogin')}}
</div>
 @endif

    <h2>Login</h2>
<form method="post" action="{{url('loginakun')}}">
    @csrf
    @method('POST')
    <div class="container-al46">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required>


        <br><button type="submit">kirim</button><br>
        <br><input type="checkbox" checked="checked"><span>remember me</span><br>
    </div>
</form>
    <footer>
        
    </footer>
</body>
</html>