<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<table style="width:100%">
<h1 ><a href="{{route('product.add1')}}">them</a></h1>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>slug</th>
    <th>status</th>
  </tr>
  @foreach($shows as $show)
  <tr>
      
    <td>{{$show->id}}</td>
    <td>{{$show->name}}</td>
    <td>{{$show->slug}}</td>
    <td><a href="{{ route('product.update1', [$show->id])}}">sua</a><a href="{{ route('product.delete', [$show->id])}}">|xoa</a></td>
  
    </tr>
    @endforeach

</body>
</html>