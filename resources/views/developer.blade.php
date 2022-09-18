<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style src="{{asset('js/bootstrap.min.js')}}"></style>
</head>
<style>
     a{
        text-decoration: none;
        font-size: 50px;
    }
    body{

        display: grid;
        place-items: center;
    }
</style>
<body>
    <h1>Developer: Lawrence Estillore</h1>

    <a href="{{url('/')}}">Welcome</a>
    <a href="{{url('/myApplication')}}">My Application</a>
    <a href="{{url('/developer')}}">Developer</a>

</body>
</html>