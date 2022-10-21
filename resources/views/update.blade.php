<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UPDATE INFO</title>
</head>
<body>
    <form action="{{route("animal.update",$animal->id)}}"  method="post">
      @method('PUT')
      @csrf
      <div>NAME:</div>
      <input type="text" name="name" value="{{$animal->name}}">
      <div>SPECIES:</div>
      <input type="text" name="species" value="{{$animal->species}}">
      <div>BREED:</div>
      <input type="text" name="breed" value="{{$animal->breed}}">
      <div>AGE:</div>
      <input type="text" name="age" value="{{$animal->age}}">
      <div>WEIGHT:</div>
      <input type="text" name="weight" value="{{$animal->weight}}">

      <button type="submit">Confirm update</button>
      
    </form>
</body>
</html>