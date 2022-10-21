<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List of Animals</title>
</head>
<body>
  @include ('common/nav')

  
  <ul>
  @foreach ($owners as $owner)
      <li>{{$owner->first_name}} {{$owner->surname}}</li>
  @endforeach
  </ul>
  
</body>
</html>