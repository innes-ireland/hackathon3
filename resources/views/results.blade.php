<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Results</title>
</head>
<body>
  @include ('common/nav')
  @foreach ($owners as $owner)
      {{$owner->first_name}}
  @endforeach
    @foreach ($animals as $animal)
      {{$animal->name}}
  @endforeach
</body>
</html>