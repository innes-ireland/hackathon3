<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
  <title>Homepage</title>
</head>
<body>
@include ('common/nav')
  <form action="{{route('search')}}" method="get">
    <label for=""></label>
    <input type="text" name="searchOwner" placeholder="Search for owner">
    <button type="submit">SEARCH BY OWNER</button>
  </form>
  <form action="{{route('search')}}" method="get">
    <label for=""></label>
    <input type="text" name="searchAnimal" placeholder="Search for animal">
    <button type="submit">SEARCH BY ANIMAL</button>
  </form>

</body>
</html>