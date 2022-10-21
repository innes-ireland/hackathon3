<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
  <title>Results</title>
</head>
<body>
  @include ('common/nav')
  
  @foreach ($owners as $owner)
      <a href="{{route("owner.detail",$owner->id)}}">{{$owner->first_name}} {{$owner->surname}}</a>
  @endforeach
  @foreach ($animals as $animal)
      <a href="{{route("animal.detail",$animal->id)}}">{{$animal->name}}</a>
  @endforeach
</body>
</html>