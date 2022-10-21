<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UPDATE INFO</title>
</head>
<body>
  @if($animal->id)
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
   
  @else 
      <form action="{{route("animal.update",$animal->id)}}"  method="post">

      @csrf
      <div>NAME:</div>
      <input type="text" name="name" value="">
      <div>SPECIES:</div>
      <input type="text" name="species" value="">
      <div>BREED:</div>
      <input type="text" name="breed" value="">
      <div>AGE:</div>
      <input type="text" name="age" value="">
      <div>WEIGHT:</div>
      <input type="text" name="weight" value="">
  
  @endif
  
  

      <button type="submit">{{$animal->id ? 'Confirm update' : 'Add animal'}}</button>
      
    </form>
</body>
</html>