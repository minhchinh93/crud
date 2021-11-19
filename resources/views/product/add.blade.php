<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('product.add')}}">
    @csrf
        <input type="text" name="name">
        <label for="cars">người tạo</label>
            <select name="user_id" >
                @foreach($shows as $show)
              <option value="{{$show->id}}">{{$show->name}}</option>
                @endforeach
            </select>
            <button type="submit" >them</button>
    </form>
</body>
</html>